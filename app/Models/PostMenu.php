<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostMenu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',  // 儲存圖片路徑
        'content',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // 圖片訪問器(與 Product 一致)
    public function getImageUrlAttribute()
    {
        if (!$this->image) return null;
        return asset('storage/post_menus/' . $this->image);
    }

    // 圖片路徑處理(與 Product 一致)
    public function getImagePath()
    {
        return "post_menus/{$this->image}";
    }

    // SEO 標題訪問器
    public function getMetaTitleAttribute($value)
    {
        return $value ?: $this->title;
    }
}
