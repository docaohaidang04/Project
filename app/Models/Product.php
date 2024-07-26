<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'img', 'category_id'];
    use HasFactory;
    public static function ProductById($id)
    {
        return self::find($id);
    }
    public function scopeAllProducts($query)
    {
        return $query->orderBy('id', 'desc')->get();
    }
    public function scopeNew($query)
    {
        return $query->orderBy('id', 'desc')->limit(8)->get();
    }

    public function scopeBestseller($query)
    {
        return $query->where('sold', '>', 6000)->limit(8)->get();
    }
    public function categories()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
    public static function SearchProduct($keyword)
    {
        return self::where('name', 'like', '%' . $keyword . '%')->paginate(8)->appends(['keyword' => $keyword]);
    }
    public function scopeGetRelatedProducts($query, $proid, $cateid)
    {
        return $query->where('id', '!=', $proid)
            ->where('category_id', $cateid)
            ->get();
    }
}
