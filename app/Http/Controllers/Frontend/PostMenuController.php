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
    public function show($slug)
    {
        // 先嘗試用 ID 查找
        if (is_numeric($slug)) {
            $postMenu = PostMenu::find($slug);
        } else {
            // 如果不是數字，則用 slug 查找
            $postMenu = PostMenu::where('slug', $slug)->first();
        }

        // 如果找不到文章或文章未啟用，返回 404
        if (!$postMenu || !$postMenu->is_active) {
            abort(404);
        }

        return view('frontend.post-menus.show', compact('postMenu'));
    }
}
