<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'Sản phẩm';
    protected static ?string $navigationGroup = 'Sản phẩm';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Product')->tabs([

                Forms\Components\Tabs\Tab::make('Thông tin cơ bản')->schema([
                    Forms\Components\Select::make('category_id')
                        ->label('Danh mục')
                        ->options(function () {
                            return Category::where('type', 'product')->get()->mapWithKeys(function ($cat) {
                                $img = $cat->image
                                    ? '<img src="' . Storage::url($cat->image) . '" style="width:22px;height:22px;object-fit:cover;border-radius:3px;display:inline-block;vertical-align:middle;margin-right:6px;">'
                                    : '<span style="width:22px;height:22px;display:inline-block;vertical-align:middle;margin-right:6px;background:#e5e7eb;border-radius:3px;"></span>';
                                return [$cat->id => $img . htmlspecialchars($cat->name, ENT_QUOTES)];
                            });
                        })
                        ->allowHtml()
                        ->searchable()
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->label('Tên sản phẩm')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Forms\Components\TextInput::make('price')
                        ->label('Giá')
                        ->numeric()
                        ->prefix('VNĐ'),
                    Forms\Components\TextInput::make('sale_price')
                        ->label('Giá khuyến mãi')
                        ->numeric()
                        ->prefix('VNĐ'),
                    Forms\Components\TextInput::make('video_url')
                        ->label('Video YouTube')
                        ->url()
                        ->placeholder('https://www.youtube.com/watch?v=...'),
                    Forms\Components\FileUpload::make('catalog_url')
                        ->label('Catalog (PDF)')
                        ->directory('catalogs')
                        ->acceptedFileTypes(['application/pdf']),
                    Forms\Components\TextInput::make('sort_order')
                        ->label('Thứ tự')
                        ->numeric()
                        ->default(0),
                ])->columns(2),

                Forms\Components\Tabs\Tab::make('Mô tả')->schema([
                    TinyEditor::make('description')
                        ->label('Mô tả sản phẩm')
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsDirectory('products/content')
                        ->columnSpanFull(),
                ]),

                Forms\Components\Tabs\Tab::make('Thông số')->schema([
                    Forms\Components\Repeater::make('specs_summary')
                        ->label('Thông số tóm tắt (hiển thị trong sidebar sản phẩm)')
                        ->schema([
                            Forms\Components\TextInput::make('key')->label('Tên thông số')->required(),
                            Forms\Components\TextInput::make('value')->label('Giá trị')->required(),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->addActionLabel('+ Thêm dòng')
                        ->columnSpanFull(),
                    Forms\Components\Repeater::make('specs_full')
                        ->label('Thông số đầy đủ (hiển thị trong bảng chi tiết)')
                        ->helperText('Muốn thêm TIÊU ĐỀ NHÓM: điền "Tiêu đề nhóm", để trống Thông số & Giá trị. Muốn thêm HÀNG THÔNG SỐ: để trống "Tiêu đề nhóm", điền Thông số & Giá trị.')
                        ->schema([
                            Forms\Components\TextInput::make('section')
                                ->label('--- Tiêu đề nhóm (nếu có) ---')
                                ->placeholder('VD: TRÌNH ĐIỀU KHIỂN')
                                ->columnSpanFull(),
                            Forms\Components\TextInput::make('key')
                                ->label('Thông số')
                                ->placeholder('VD: Phân tích tần số'),
                            Forms\Components\Textarea::make('value')
                                ->label('Giá trị')
                                ->placeholder('VD: 52Hz-18kHz ± 3dB')
                                ->rows(2),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->addActionLabel('+ Thêm dòng')
                        ->columnSpanFull(),
                    Forms\Components\Repeater::make('advantages')
                        ->label('Ưu điểm sản phẩm')
                        ->schema([
                            Forms\Components\TextInput::make('value')->label('Ưu điểm')->required(),
                        ])
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ]),

                Forms\Components\Tabs\Tab::make('Hình ảnh')->schema([
                    Forms\Components\Repeater::make('productImages')
                        ->label('Hình ảnh sản phẩm')
                        ->relationship('images')
                        ->schema([
                            Forms\Components\FileUpload::make('image_url')
                                ->label('Ảnh')
                                ->image()
                                ->directory('products')
                                ->required(),
                            Forms\Components\TextInput::make('alt_text')->label('Alt text'),
                            Forms\Components\Toggle::make('is_thumbnail')->label('Ảnh đại diện'),
                            Forms\Components\TextInput::make('sort_order')->label('Thứ tự')->numeric()->default(0),
                        ])
                        ->columns(2)
                        ->defaultItems(0)
                        ->columnSpanFull(),
                ]),

                Forms\Components\Tabs\Tab::make('Trạng thái')->schema([
                    Forms\Components\Toggle::make('in_stock')->label('Còn hàng')->default(true),
                    Forms\Components\Toggle::make('is_bestseller')->label('Bán chạy'),
                    Forms\Components\Toggle::make('is_hot')->label('HOT'),
                    Forms\Components\Toggle::make('is_new')->label('Mới'),
                    Forms\Components\Toggle::make('is_visible')->label('Hiển thị')->default(true),
                    Forms\Components\Toggle::make('is_promotion')->label('Khuyến mãi'),
                    Forms\Components\Select::make('promotion_product_id')
                        ->label('SP khuyến mãi kèm')
                        ->options(Product::pluck('name', 'id'))
                        ->searchable()
                        ->nullable(),
                ])->columns(2),

            ])->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->label('Tên SP')->searchable()->limit(40),
                Tables\Columns\TextColumn::make('category.name')->label('Danh mục'),
                Tables\Columns\TextColumn::make('price')->label('Giá')->money('VND'),
                Tables\Columns\TextColumn::make('sale_price')->label('Giá KM')->money('VND'),
                Tables\Columns\IconColumn::make('in_stock')->label('Còn hàng')->boolean(),
                Tables\Columns\IconColumn::make('is_hot')->label('HOT')->boolean(),
                Tables\Columns\IconColumn::make('is_visible')->label('Hiện')->boolean(),
                Tables\Columns\TextColumn::make('view_count')->label('Lượt xem')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Danh mục')
                    ->options(Category::where('type', 'product')->pluck('name', 'id')),
                Tables\Filters\TernaryFilter::make('is_visible')->label('Hiển thị'),
                Tables\Filters\TernaryFilter::make('is_hot')->label('HOT'),
                Tables\Filters\TernaryFilter::make('in_stock')->label('Còn hàng'),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array { return []; }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}