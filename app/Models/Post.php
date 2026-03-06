<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id','slug','title','thumbnail','excerpt','content',
        'author','is_visible','is_featured','view_count','sort_order','published_at'
    ];
    protected $casts = ['published_at'=>'datetime'];

    public function category() { return $this->belongsTo(Category::class); }
}