<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    // 可填充欄位
    protected $fillable = [
        'name',
        'slug',
        'sub_title',
        'description',
        'price',
        'cash_price',
        'stock',
        'category_id',
        'is_active',
        'is_new',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_new' => 'boolean'
    ];

    // 與分類的關係
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // 與購物車的關係
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // 所有圖片關聯，按排序順序
    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }

    // 主圖關聯
    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    // 輔助方法：獲取主圖 URL
    public function getPrimaryImageUrlAttribute()
    {
        return $this->primaryImage?->image_path
            ? asset('storage/' . $this->primaryImage->image_path)
            : null;
    }

    // 輔助方法：檢查是否有圖片
    public function hasImages()
    {
        return $this->images()->exists();
    }

    // 輔助方法：獲取圖片完整路徑
    public function getImagePath($filename)
    {
        return "products/{$this->id}/{$filename}";
    }

    // 輔助方法：獲取圖片完整 URL
    public function getImageUrl($filename)
    {
        return asset('storage/products/' . $this->id . '/' . $filename);
    }

    public function specifications()
    {
        return $this->belongsToMany(
            ProductSpecification::class,
            'product_specification_items',
            'product_id',
            'specification_id'
        )
            ->withPivot('is_active')
            ->withTimestamps();
    }

    // 新增一個方法來獲取已啟用的規格
    public function activeSpecifications()
    {
        return $this->specifications()->wherePivot('is_active', true);
    }

    // 獲取 SEO 標題
    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->name;
    }

    // 獲取 SEO 描述
    public function getMetaDescriptionAttribute($value)
    {
        return $value ?: Str::limit(strip_tags($this->description), 160);
    }

    public function specs()
    {
        return $this->hasMany(ProductSpec::class);
    }
}
