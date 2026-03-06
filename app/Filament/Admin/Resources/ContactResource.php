<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Liên hệ';
    protected static ?string $navigationGroup = 'Hệ thống';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('product_id')
                ->label('Sản phẩm quan tâm')
                ->relationship('product', 'name')
                ->searchable()
                ->nullable(),
            Forms\Components\TextInput::make('full_name')->label('Họ tên')->required(),
            Forms\Components\TextInput::make('phone')->label('SĐT')->required(),
            Forms\Components\TextInput::make('email')->label('Email')->email(),
            Forms\Components\Textarea::make('message')->label('Nội dung')->rows(4),
            Forms\Components\Toggle::make('is_read')->label('Đã đọc'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')->label('Họ tên')->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('SĐT'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('product.name')->label('Sản phẩm')->limit(30),
                Tables\Columns\TextColumn::make('message')->label('Nội dung')->limit(40),
                Tables\Columns\IconColumn::make('is_read')->label('Đã đọc')->boolean(),
                Tables\Columns\TextColumn::make('created_at')->label('Ngày')->date('d/m/Y H:i'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')->label('Đã đọc'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}