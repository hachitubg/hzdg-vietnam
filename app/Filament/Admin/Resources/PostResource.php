<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PostResource\Pages;
use App\Models\Post;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Bài viết';
    protected static ?string $navigationGroup = 'Nội dung';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('category_id')
                ->label('Danh mục')
                ->options(Category::where('type', 'post')->pluck('name', 'id'))
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
                ->directory('posts'),
            Forms\Components\Textarea::make('excerpt')
                ->label('Mô tả ngắn')
                ->rows(3),
            TinyEditor::make('content')
                ->label('Nội dung')
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('posts/content')
                ->columnSpanFull(),
            Forms\Components\TextInput::make('author')->label('Tác giả'),
            Forms\Components\Toggle::make('is_visible')->label('Hiển thị')->default(true),
            Forms\Components\Toggle::make('is_featured')->label('Nổi bật'),
            Forms\Components\DateTimePicker::make('published_at')->label('Ngày đăng'),
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
                Tables\Columns\IconColumn::make('is_visible')->label('Hiện')->boolean(),
                Tables\Columns\IconColumn::make('is_featured')->label('Nổi bật')->boolean(),
                Tables\Columns\TextColumn::make('view_count')->label('Lượt xem')->sortable(),
                Tables\Columns\TextColumn::make('published_at')->label('Ngày đăng')->date('d/m/Y'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}