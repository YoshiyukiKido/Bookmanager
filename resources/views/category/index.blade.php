@extends('adminlte::page')

@section('title', 'Category Editor')

    @section('content_header')
            {{ __('Category Editor') }}
    @stop

    @section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">カテゴリー</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <a href="{{ url('category/add') }}" class="btn btn-primary">カテゴリー登録</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>名称</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cates as $cate)
                                <tr>
                                    <!-- <td>{{ $cate->id }}</td>  -->
                                    <td>{{ $cate->name }}</td>
                                    <td>
                                        <a href="category/update/{{ $cate->id }}" class="btn btn-outline-primary">編集</a>
                                        <a href="category/delete/{{ $cate->id }}" class="btn btn-outline-danger">削除</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $cates->links('pagination::bootstrap-4') }}
    @stop

@section('css')
@stop

@section('js')
@stop