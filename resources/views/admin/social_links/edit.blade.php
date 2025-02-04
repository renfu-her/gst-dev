@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">編輯社群媒體連結</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.social-links.update') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="facebook_url">Facebook 連結</label>
                                <input type="url" name="facebook_url" id="facebook_url"
                                    class="form-control @error('facebook_url') is-invalid @enderror"
                                    value="{{ old('facebook_url', $socialLink->facebook_url) }}">
                                @error('facebook_url')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="line_url">Line 連結</label>
                                <input type="url" name="line_url" id="line_url"
                                    class="form-control @error('line_url') is-invalid @enderror"
                                    value="{{ old('line_url', $socialLink->line_url) }}">
                                @error('line_url')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="instagram_url">Instagram 連結</label>
                                <input type="url" name="instagram_url" id="instagram_url"
                                    class="form-control @error('instagram_url') is-invalid @enderror"
                                    value="{{ old('instagram_url', $socialLink->instagram_url) }}">
                                @error('instagram_url')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="is_active" name="is_active"
                                        value="1" {{ $socialLink->is_active ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="is_active">啟用社群媒體連結</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">更新</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
