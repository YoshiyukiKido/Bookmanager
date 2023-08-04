@extends('adminlte::page')

@section('title', 'Category Editor')

    @section('content_header')
        {{ __('Category Editor') }}
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
                            <input class="form-control col-md-2" type="text" readonly name="id" value="{{ isset($cate) ? $cate->id : '' }}">
                        </div>
                        <div class="form-group">
                            <label class="col-md-2" for="name">NAME</label>
                            <input class="form-control col-md-6" type="text" name="name" value="{{ isset($cate) ? $cate->name : '' }}">
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