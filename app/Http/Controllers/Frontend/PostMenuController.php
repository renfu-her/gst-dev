<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PostMenu;
use Illuminate\Http\Request;

class PostMenuController extends Controller
{
    /**
     * 顯示指定的文章
     */
    public function show(PostMenu $postMenu)
    {
        // 檢查文章是否啟用
        if (!$postMenu->is_active) {
            abort(404);
        }

        return view('frontend.post-menus.show', compact('postMenu'));
    }
}
