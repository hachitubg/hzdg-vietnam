<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'category_id','slug','title','thumbnail','excerpt','content',
        'client_name','location','is_visible','is_featured','view_count','sort_order','completed_at'
    ];
    protected $casts = ['completed_at'=>'datetime'];

    public function category() { return $this->belongsTo(Category::class); }
}