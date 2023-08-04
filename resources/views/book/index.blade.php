@extends('adminlte::page')

@section('title', 'Book Editor')

    @section('content_header')
            {{ __('Book Editor') }}
    @stop

    @section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">本棚</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <a href="{{ url('book/add') }}" class="btn btn-primary">書籍登録</a>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>タイトル</th>
                                <th>カテゴリー</th>
                                <th>ノート</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <!-- <td>{{ $book->id }}</td>  -->
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->note }}</td>
                                    <td>
                                        <a href="book/update/{{ $book->id }}" class="btn btn-outline-primary">編集</a>
                                        <a href="book/delete/{{ $book->id }}" class="btn btn-outline-danger">削除</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $books->links('pagination::bootstrap-4') }}
    @stop

@section('css')
@stop

@section('js')
@stop