<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('facebook_url')->nullable();
            $table->string('line_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 插入預設數據
        DB::table('social_links')->insert([
            'facebook_url' => 'https://www.facebook.com/',
            'line_url' => 'https://line.me/',
            'instagram_url' => 'https://www.instagram.com/',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('social_links');
    }
};
