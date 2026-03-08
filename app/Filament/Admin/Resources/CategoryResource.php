<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationLabel = 'Danh mục';
    protected static ?string $navigationGroup = 'Hệ thống';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('type')
                ->label('Loại')
                ->options(['product' => 'Sản phẩm', 'post' => 'Bài viết', 'project' => 'Dự án'])
                ->required(),
            Forms\Components\Select::make('parent_id')
                ->label('Danh mục cha')
                ->options(function () {
                    return Category::all()->mapWithKeys(function ($cat) {
                        $img = $cat->image
                            ? '<img src="' . Storage::url($cat->image) . '" style="width:22px;height:22px;object-fit:cover;border-radius:3px;display:inline-block;vertical-align:middle;margin-right:6px;">'
                            : '<span style="width:22px;height:22px;display:inline-block;vertical-align:middle;margin-right:6px;background:#e5e7eb;border-radius:3px;"></span>';
                        return [$cat->id => $img . htmlspecialchars($cat->name, ENT_QUOTES)];
                    });
                })
                ->allowHtml()
                ->searchable()
                ->nullable(),
            Forms\Components\TextInput::make('name')
                ->label('Tên danh mục')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\Textarea::make('description')
                ->label('Mô tả')
                ->rows(3),
            Forms\Components\FileUpload::make('image')
                ->label('Hình ảnh')
                ->image()
                ->directory('categories'),
            Forms\Components\TextInput::make('sort_order')
                ->label('Thứ tự')
                ->numeric()
                ->default(0),
            Forms\Components\Toggle::make('is_visible')
                ->label('Hiển thị')
                ->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Ảnh')->square()->size(40),
                Tables\Columns\TextColumn::make('name')->label('Tên')->searchable(),
                Tables\Columns\TextColumn::make('type')->label('Loại')->badge()
                    ->color(fn (string $state) => match ($state) {
                        'product' => 'success', 'post' => 'info', 'project' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('parent.name')->label('Danh mục cha'),
                Tables\Columns\IconColumn::make('is_visible')->label('Hiện')->boolean(),
                Tables\Columns\TextColumn::make('sort_order')->label('Thứ tự')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->label('Loại')
                    ->options(['product' => 'Sản phẩm', 'post' => 'Bài viết', 'project' => 'Dự án']),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}