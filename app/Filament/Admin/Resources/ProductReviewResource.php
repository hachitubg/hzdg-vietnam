<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductReviewResource\Pages;
use App\Models\ProductReview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProductReviewResource extends Resource
{
    protected static ?string $model = ProductReview::class;
    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Đánh giá';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('product_id')
                ->label('Sản phẩm')
                ->relationship('product', 'name')
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('reviewer_name')->label('Họ tên')->required(),
            Forms\Components\TextInput::make('reviewer_email')->label('Email')->email(),
            Forms\Components\TextInput::make('reviewer_phone')->label('SĐT'),
            Forms\Components\Select::make('rating')
                ->label('Đánh giá')
                ->options([1=>'1 sao',2=>'2 sao',3=>'3 sao',4=>'4 sao',5=>'5 sao'])
                ->required(),
            Forms\Components\Textarea::make('comment')->label('Nhận xét')->rows(4),
            Forms\Components\Toggle::make('is_approved')->label('Duyệt hiển thị'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')->label('Sản phẩm')->limit(30),
                Tables\Columns\TextColumn::make('reviewer_name')->label('Người đánh giá'),
                Tables\Columns\TextColumn::make('rating')->label('Sao')->sortable(),
                Tables\Columns\TextColumn::make('comment')->label('Nhận xét')->limit(40),
                Tables\Columns\IconColumn::make('is_approved')->label('Duyệt')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày')->date('d/m/Y'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_approved')->label('Đã duyệt'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductReviews::route('/'),
            'create' => Pages\CreateProductReview::route('/create'),
            'edit' => Pages\EditProductReview::route('/{record}/edit'),
        ];
    }
}