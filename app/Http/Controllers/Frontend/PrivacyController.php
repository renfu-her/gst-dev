<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PrivacyController extends Controller
{
    public function index()
    {

        $postPrivacy = Post::where('id', 7)->first();

        return view('frontend.privacy', compact('postPrivacy'));
    }
}
