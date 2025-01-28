@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>文章管理</h2>
            <a href="{{ route('admin.post-menus.create') }}" class="btn btn-primary">新增文章</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-responsive" id="dataTable">
                    <thead>
                        <tr>
                            <th style="width: 5%">ID</th>
                            <th>標題</th>
                            <th>圖片</th>
                            <th>狀態</th>
                            <th>創建時間</th>
                            <th style="width: 15%">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                                        style="width: 100px; height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    <span class="badge bg-{{ $post->is_active ? 'success' : 'secondary' }}">
                                        {{ $post->is_active ? '啟用' : '停用' }}
                                    </span>
                                </td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.post-menus.edit', $post) }}"
                                            class="btn btn-sm btn-outline-primary">
                                            編輯
                                        </a>
                                        <form action="{{ route('admin.post-menus.destroy', $post) }}" method="POST"
                                            onsubmit="return confirm('確定要刪除此文章嗎？');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                刪除
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/2.1.8/i18n/zh-HANT.json"
                },
                responsive: true,
                order: [
                    [0, 'desc']
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false
                }]
            });
        });
    </script>
@endpush

@push('styles')
    <style>
        .table td img {
            width: 100px !important;
            height: 100px !important;
            border-radius: 0 !important;
            object-fit: cover;
        }
    </style>
@endpush
