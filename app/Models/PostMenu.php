<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class PostMenu extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // 在保存模型前自動生成 slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($postMenu) {
            if (empty($postMenu->slug)) {
                $postMenu->slug = self::generateSlug($postMenu->title);
            }
        });

        static::updating(function ($postMenu) {
            if ($postMenu->isDirty('title') && empty($postMenu->slug)) {
                $postMenu->slug = self::generateSlug($postMenu->title);
            }
        });
    }

    // 生成 slug 的方法
    protected static function generateSlug($title)
    {
        $pinyin = new Pinyin();
        // 先轉換為拼音
        $slug = $pinyin->permalink($title);

        // 確保 slug 唯一
        $count = 1;
        $originalSlug = $slug;

        while (static::where('slug', $slug)
            ->where('id', '!=', request()->route('postMenu.id'))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }

    // 使用 slug 作為路由參數
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // 圖片訪問器
    public function getImageUrlAttribute()
    {
        if (!$this->image) return null;
        return asset('storage/post_menus/' . $this->image);
    }

    // 圖片路徑處理
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
