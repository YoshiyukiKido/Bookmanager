@extends('adminlte::page')

@section('title', 'Book Editor')

    @section('content_header')
        {{ __('Book Editor') }}
    @stop

    @section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label class="col-md-6" for="id">ID</label>
                            <input class="form-control col-md-2" type="text" readonly name="id" value="{{ isset($book) ? $book->id : '' }}">
                        </div>
                        <div class="form-group">
                            <label class="col-md-2" for="title">TITLE</label>
                            <input class="form-control col-md-6" type="text" name="title" value="{{ isset($book) ? $book->title : '' }}">
                        </div>
                        <div class="form-group">
                            <label class="col-md-2" for="category_id">CATEGORY</label>

                            <select name="category_id" class="form-control col-md-2">
                            @foreach ($categories as $ca)
                                <option value="{{ $ca->id }}" {{ (isset($book) && $book->category_id == $ca->id) ? 'selected' : '' }}>{{ $ca->name }}</option>
                            @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label class="col-md-2" for="note" >note</label>
                            <input class="form-control" type="text" name="URL" value="{{ isset($book) ? $book->note : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop

@section('css')
@stop

@section('js')
@stop