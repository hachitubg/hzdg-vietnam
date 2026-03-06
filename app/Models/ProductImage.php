<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id','image_url','alt_text','is_thumbnail','sort_order'];

    public function product() { return $this->belongsTo(Product::class); }
}