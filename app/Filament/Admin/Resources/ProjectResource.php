<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Models\Project;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Dự án';
    protected static ?string $navigationGroup = 'Nội dung';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('category_id')
                ->label('Danh mục')
                ->options(Category::where('type', 'project')->pluck('name', 'id'))
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('title')
                ->label('Tiêu đề')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\FileUpload::make('thumbnail')
                ->label('Ảnh đại diện')
                ->image()
                ->directory('projects'),
            Forms\Components\Textarea::make('excerpt')
                ->label('Mô tả ngắn')
                ->rows(3),
            TinyEditor::make('content')
                ->label('Nội dung')
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('projects/content')
                ->columnSpanFull(),
            Forms\Components\TextInput::make('client_name')->label('Khách hàng'),
            Forms\Components\TextInput::make('location')->label('Địa điểm'),
            Forms\Components\Toggle::make('is_visible')->label('Hiển thị')->default(true),
            Forms\Components\Toggle::make('is_featured')->label('Nổi bật'),
            Forms\Components\DatePicker::make('completed_at')->label('Ngày hoàn thành'),
            Forms\Components\TextInput::make('sort_order')->label('Thứ tự')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\ImageColumn::make('thumbnail')->label('Ảnh')->circular(),
                Tables\Columns\TextColumn::make('title')->label('Tiêu đề')->searchable()->limit(50),
                Tables\Columns\TextColumn::make('category.name')->label('Danh mục'),
                Tables\Columns\TextColumn::make('client_name')->label('Khách hàng'),
                Tables\Columns\IconColumn::make('is_visible')->label('Hiện')->boolean(),
                Tables\Columns\TextColumn::make('view_count')->label('Lượt xem')->sortable(),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}