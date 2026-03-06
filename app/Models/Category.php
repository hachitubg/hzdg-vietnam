<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id','name','slug','type','description','image','sort_order','is_visible'];

    public function parent() { return $this->belongsTo(Category::class, 'parent_id'); }
    public function children() { return $this->hasMany(Category::class, 'parent_id'); }
    public function products() { return $this->hasMany(Product::class); }
    public function posts() { return $this->hasMany(Post::class); }
    public function projects() { return $this->hasMany(Project::class); }
}