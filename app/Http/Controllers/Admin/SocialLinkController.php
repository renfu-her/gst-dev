<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function edit()
    {
        $socialLink = SocialLink::first();
        return view('admin.social_links.edit', compact('socialLink'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'facebook_url' => 'nullable|url',
            'line_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'is_active' => 'boolean'
        ]);

        $socialLink = SocialLink::first();
        $socialLink->update($validated);

        return redirect()->route('admin.social-links.edit')
            ->with('success', '社群媒體連結已更新');
    }
}
