{{-- resources/views/admin/products/create.blade.php --}}
@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- 規格提示區塊 -->
                <div class="card mb-4">
                    <div class="card-header">規格管理</div>
                    <div class="card-body">
                        <p class="text-muted mb-0">
                            請先創建商品，保存後即可在編輯頁面中管理商品規格。
                        </p>
                    </div>
                </div>

                <!-- 原有的創建表單 -->
                <div class="card">
                    <div class="card-header">新增商品</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="category_id" class="form-label">分類</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                                    name="category_id" required>
                                    <option value="">請選擇分類</option>
                                    @foreach ($categories as $category)
                                        {{-- 父分類只作為標題顯示，不能選擇 --}}
                                        <option value="" disabled
                                            style="background-color: #f8f9fa; font-weight: bold;">
                                            {{ $category->name }}
                                        </option>
                                        {{-- 只顯示子分類供選擇 --}}
                                        @foreach ($category->children as $child)
                                            <option value="{{ $child->id }}"
                                                {{ old('category_id') == $child->id ? 'selected' : '' }}>
                                                ├─ {{ $child->name }}
                                            </option>
                                        @endforeach
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">產品名稱</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="sub_title" class="form-label">副標題</label>
                                <input type="text" class="form-control @error('sub_title') is-invalid @enderror"
                                    id="sub_title" name="sub_title" value="{{ old('sub_title') }}">
                                @error('sub_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">描述</label>
                                <textarea class="form-control ckeditor5 @error('content') is-invalid @enderror" id="content" name="content" cols="30"
                                    rows="10">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">售價</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                    id="price" name="price" value="{{ old('price') }}" required>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">庫存</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror"
                                    id="stock" name="stock" value="{{ old('stock') }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">主要圖片 (<span class="text-danger">寬度
                                        800px，高度不限</span>)</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image" accept="image/*" required>
                                <small class="text-muted">請上傳商品主圖</small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div id="imagePreview" class="row g-2"></div>
                            </div>

                            <div class="mb-3">
                                <label for="additional_images" class="form-label">其他圖片 (<span
                                        class="text-danger">可多選</span>)</label>
                                <input type="file" class="form-control @error('additional_images') is-invalid @enderror"
                                    id="additional_images" name="additional_images[]" accept="image/*" multiple>
                                <small class="text-muted">可以選擇多張商品圖片</small>
                                @error('additional_images')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div id="additionalImagesPreview" class="row g-2"></div>
                            </div>

                            <div class="mb-3 d-flex align-items-center gap-4">
                                <div>
                                    <input type="checkbox" class="form-check-input p-1" id="is_active" name="is_active"
                                        value="1" {{ old('is_active') ? 'checked' : '' }}>
                                    <label class="form-check-label p-1" for="is_active">是否啟用</label>
                                </div>
                                <div>
                                    <input type="checkbox" class="form-check-input p-1" id="is_new" name="is_new"
                                        value="1" {{ old('is_new') ? 'checked' : '' }}>
                                    <label class="form-check-label p-1" for="is_new">新品標籤</label>
                                </div>
                                <div>
                                    <input type="checkbox" class="form-check-input p-1" id="is_hot" name="is_hot"
                                        value="1" {{ old('is_hot') ? 'checked' : '' }}>
                                    <label class="form-check-label p-1" for="is_hot">熱銷標籤</label>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-header">SEO 設定</div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">SEO 標題</label>
                                        <input type="text"
                                            class="form-control @error('meta_title') is-invalid @enderror" id="meta_title"
                                            name="meta_title" value="{{ old('meta_title') }}" maxlength="60">
                                        <small class="text-muted">建議長度：60 字元以內，留空將使用商品名稱</small>
                                        @error('meta_title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">SEO 描述</label>
                                        <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                            name="meta_description" rows="3" maxlength="160">{{ old('meta_description') }}</textarea>
                                        <small class="text-muted">建議長度：160 字元以內，留空將使用商品描述的前 160 個字</small>
                                        @error('meta_description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="meta_keywords" class="form-label">SEO 關鍵字</label>
                                        <input type="text"
                                            class="form-control @error('meta_keywords') is-invalid @enderror"
                                            id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}">
                                        <small class="text-muted">多個關鍵字請用逗號分隔</small>
                                        @error('meta_keywords')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    創建產品
                                </button>
                                <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">
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
                    alert('請填寫商品描述');
                    return false;
                }

                // 更新隱藏的 textarea 值
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
                                        <small class="text-muted">商品圖片預覽</small>
                                    </div>
                                </div>
                            </div>
                        `);
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            // 多張圖片預覽
            $('#additional_images').on('change', function(e) {
                const $preview = $('#additionalImagesPreview');
                $preview.empty();

                if (e.target.files) {
                    Array.from(e.target.files).forEach((file, index) => {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            $preview.append(`
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="${e.target.result}" class="card-img-top" alt="Preview ${index + 1}">
                                        <div class="card-body p-2">
                                            <small class="text-muted">新增圖片 ${index + 1}</small>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                        reader.readAsDataURL(file);
                    });
                }
            });

            // 在 edit.blade.php 中還需要添加刪除其他圖片的處理
            $('.delete-additional-image').on('click', function() {
                const imageId = $(this).data('image-id');
                if (confirm('確定要刪除此圖片嗎？')) {
                    $.ajax({
                        url: `/admin/products/${productId}/additional-image/${imageId}`,
                        method: 'DELETE',
                        success: function() {
                            $(this).closest('.col-md-3').remove();
                        }.bind(this)
                    });
                }
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        .sortable-ghost {
            opacity: 0.5;
        }

        .sortable-chosen {
            background-color: #f8f9fa;
        }

        .drag-handle {
            cursor: move;
            position: absolute;
            top: 5px;
            right: 5px;
            padding: 5px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 3px;
        }
    </style>
@endpush
