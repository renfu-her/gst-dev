<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('post_menus', function (Blueprint $table) {
            // 在 title 欄位後添加 slug 欄位
            $table->string('slug')->unique()->after('title')->nullable();
        });

        // 為現有記錄生成 slug
        DB::table('post_menus')->orderBy('id')->each(function ($post) {
            $pinyin = new \Overtrue\Pinyin\Pinyin();
            $slug = $pinyin->permalink($post->title);

            // 確保 slug 唯一
            $count = 1;
            $originalSlug = $slug;

            while (DB::table('post_menus')
                ->where('slug', $slug)
                ->where('id', '!=', $post->id)
                ->exists()
            ) {
                $slug = $originalSlug . '-' . $count++;
            }

            DB::table('post_menus')
                ->where('id', $post->id)
                ->update(['slug' => $slug]);
        });

        // 設置 slug 為必填
        Schema::table('post_menus', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_menus', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
};
