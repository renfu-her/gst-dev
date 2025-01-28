<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostMenu;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostMenuController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $posts = PostMenu::latest()->paginate(10);
        return view('admin.post_menus.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post_menus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
            'is_active' => 'boolean'
        ]);

        // 使用 ImageService 處理圖片上傳
        if ($request->hasFile('image')) {
            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'post_menus',  // 存儲路徑
                800            // 圖片寬度
            );
        }

        PostMenu::create($validated);

        return redirect()->route('admin.post-menus.index')
            ->with('success', '文章已建立');
    }

    public function edit(PostMenu $postMenu)
    {
        return view('admin.post_menus.edit', compact('postMenu'));
    }

    public function update(Request $request, PostMenu $postMenu)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
            'is_active' => 'boolean',
            'meta_title' => 'nullable|string|max:60',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        // 圖片更新邏輯(與 ProductController 一致)
        if ($request->hasFile('image')) {
            // 刪除舊圖片
            if ($postMenu->image) {
                Storage::disk('public')->delete($postMenu->getImagePath());
            }

            $validated['image'] = $this->imageService->uploadImage(
                $request->file('image'),
                'post_menus',
                800
            );
        }

        $postMenu->update($validated);

        return redirect()->route('admin.post-menus.index')
            ->with('success', '文章已更新');
    }

    public function destroy(PostMenu $postMenu)
    {
        // 刪除圖片(與 ProductController 邏輯一致)
        if ($postMenu->image) {
            Storage::disk('public')->delete($postMenu->getImagePath());
        }

        $postMenu->delete();

        return redirect()->route('admin.post-menus.index')
            ->with('success', '文章已刪除');
    }
}
