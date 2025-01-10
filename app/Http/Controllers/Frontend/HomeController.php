<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Product;
use App\Models\Advert;
use App\Models\HomeAd;
use App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $homeAds = Advert::orderBy('sort_order', 'asc')
            ->where('is_active', 1)
            ->get();

        $posts = Post::orderBy('sort_order', 'asc')
            ->with('category')
            ->whereHas('category', function ($query) {
                $query->where('name', '首頁服務');
            })
            ->where('is_active', 1)
            ->get();

        return view('frontend.home', compact('homeAds', 'posts'));
    }

    public function memberAgreement()
    {
        return view('frontend.member.agreement');
    }
}
