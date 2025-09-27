<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','name','slug','short_description','description',
        'price','stock','sku','image','is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
