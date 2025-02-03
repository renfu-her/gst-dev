@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>編輯選單文章</span>
                        <a href="{{ route('admin.post-menus.index') }}" class="btn btn-outline-secondary btn-sm">
                            返回列表
                        </a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.post-menus.update', $postMenu) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">標題</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title', $postMenu->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">內容</label>
                                <textarea class="form-control ckeditor5 @error('content') is-invalid @enderror" id="content" name="content"
                                    rows="10">{{ old('content', $postMenu->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">主要圖片 (<span class="text-danger">寬度
                                        800px，高度不限</span>)</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" accept="image/*">
                                <small class="text-muted">請上傳文章主圖</small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div id="imagePreview" class="row g-2">
                                    @if ($postMenu->image_url)
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img src="{{ $postMenu->image_url }}" class="card-img-top"
                                                    alt="Current Image">
                                                <div class="card-body p-2">
                                                    <small class="text-muted">目前圖片</small>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="mb-3 d-flex align-items-center">
                                <div>
                                    <input type="checkbox" class="form-check-input p-1" id="is_active" name="is_active"
                                        value="1" {{ old('is_active', $postMenu->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label p-1" for="is_active">是否啟用</label>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">SEO 設定</div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">SEO 標題</label>
                                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                            id="meta_title" name="meta_title"
                                            value="{{ old('meta_title', $postMenu->meta_title) }}" maxlength="60">
                                        <small class="text-muted">建議長度：60 字元以內，留空將使用文章標題</small>
                                        @error('meta_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">SEO 描述</label>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                            name="meta_description" rows="3" maxlength="160">{{ old('meta_description', $postMenu->meta_description) }}</textarea>
                                        <small class="text-muted">建議長度：160 字元以內，留空將使用文章描述的前 160 個字</small>
                                        @error('meta_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">SEO 關鍵字</label>
                                        <input type="text"
                                            class="form-control @error('meta_keywords') is-invalid @enderror"
                                            id="meta_keywords" name="meta_keywords"
                                            value="{{ old('meta_keywords', $postMenu->meta_keywords) }}">
                                        <small class="text-muted">多個關鍵字請用逗號分隔</small>
                                        @error('meta_keywords')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">
                                    更新文章
                                </button>
                                <a href="{{ route('admin.post-menus.index') }}" class="btn btn-outline-secondary">
                                    返回列表
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('admin.partials.ckeditor')

@push('scripts')
    <script>
        $(document).ready(function() {
            // 表單提交前驗證
            $('form').on('submit', function(e) {
                const content = editor.getData();
                if (!content.trim()) {
                    e.preventDefault();
                    alert('請填寫文章內容');
                    return false;
                }
                $('#content').val(content);
            });

            // 圖片預覽
            $('#image').on('change', function(e) {
                const $preview = $('#imagePreview');
                $preview.empty();

                if (e.target.files && e.target.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $preview.html(`
                    <div class="col-md-3">
                        <div class="card">
                            <img src="${e.target.result}" class="card-img-top" alt="Preview">
                            <div class="card-body p-2">
                                <small class="text-muted">新圖片預覽</small>
                            </div>
                        </div>
                    </div>
                `);
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    </script>
@endpush
