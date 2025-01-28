<?php

namespace App\Http\Controllers;

use App\Models\PostMenu;
use Illuminate\Http\Request;

class PostMenuController extends Controller
{
    public function show(PostMenu $postMenu)
    {
        if (!$postMenu->is_active) {
            abort(404);
        }

        return view('frontend.post-menus.show', compact('postMenu'));
    }
}
