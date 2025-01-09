@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">編輯首頁主廣告</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.ads.update', $ad) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">標題</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" value="{{ old('title', $ad->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">描述</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3" required>{{ old('description', $ad->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            @if ($ad->image)
                                <div class="mb-3">
                                    <label class="form-label">當前圖片</label>
                                    <div>
                                        <img src="{{ asset('storage/ads/' . $ad->image) }}" alt="{{ $ad->title }}"
                                            style="max-width: 200px">
                                    </div>
                                </div>
                            @endif

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="image" class="form-label">更新圖片 (<span class="text-danger">寬度
                                            1920px</span>)</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" accept="image/*">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                @if ($ad->image_thumb)
                                    <div class="mb-3">
                                        <label class="form-label">當前手機顯示圖片</label>
                                        <div>
                                            <img src="{{ asset('storage/ads/' . $ad->image_thumb) }}"
                                                alt="{{ $ad->title }}" style="max-width: 200px">
                                        </div>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="image_thumb" class="form-label">更新手機顯示圖片 (<span class="text-danger">寬度
                                            800px</span>)</label>
                                    <input type="file" class="form-control @error('image_thumb') is-invalid @enderror"
                                        id="image_thumb" name="image_thumb" accept="image/*">
                                    @error('image_thumb')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="url" class="form-label">連結網址</label>
                                    <input type="url" class="form-control @error('url') is-invalid @enderror"
                                        id="url" name="url" value="{{ old('url', $ad->url) }}">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="start_date" class="form-label">開始日期</label>
                                    <input type="text"
                                        class="form-control flatpickr @error('start_date') is-invalid @enderror"
                                        id="start_date" name="start_date"
                                        value="{{ old('start_date', $ad->start_date->format('Y-m-d')) }}" required>
                                    @error('start_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="end_date" class="form-label">結束日期</label>
                                    <input type="text"
                                        class="form-control flatpickr @error('end_date') is-invalid @enderror"
                                        id="end_date" name="end_date"
                                        value="{{ old('end_date', $ad->end_date?->format('Y-m-d')) }}">
                                    @error('end_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="sort_order" class="form-label">排序（數字越小越前面）</label>
                                    <input type="number" class="form-control @error('sort_order') is-invalid @enderror"
                                        id="sort_order" name="sort_order" value="{{ old('sort_order', $ad->sort_order) }}">
                                    @error('sort_order')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3 d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input p-1" id="is_active" name="is_active"
                                        value="1" {{ old('is_active', $ad->is_active) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label p-1" for="is_active">啟用廣告</label>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        更新廣告
                                    </button>
                                    <a href="{{ route('admin.ads.index') }}" class="btn btn-outline-secondary">
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.flatpickr').flatpickr({
                locale: 'zh_tw'
            });
        });
    </script>
@endpush
