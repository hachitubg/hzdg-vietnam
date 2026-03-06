<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id','reviewer_name','reviewer_email','reviewer_phone','rating','comment','is_approved'];

    public function product() { return $this->belongsTo(Product::class); }
}