<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','slug','name','price','sale_price','specs_summary','specs_full',
        'advantages','description','video_url','catalog_url','in_stock','is_bestseller',
        'is_hot','is_new','is_visible','is_promotion','promotion_product_id','view_count','sort_order'
    ];
    protected $casts = ['specs_summary'=>'array','specs_full'=>'array','advantages'=>'array'];

    public function category() { return $this->belongsTo(Category::class); }
    public function images() { return $this->hasMany(ProductImage::class)->orderBy('sort_order'); }
    public function reviews() { return $this->hasMany(ProductReview::class); }
    public function promotionProduct() { return $this->belongsTo(Product::class, 'promotion_product_id'); }
    public function contacts() { return $this->hasMany(Contact::class); }
}