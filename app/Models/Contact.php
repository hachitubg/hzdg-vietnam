<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id','full_name','phone','email','message','is_read'];

    public function product() { return $this->belongsTo(Product::class); }
}