@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    {{ __('Profile') }}
@stop

@section('content')
<x-app-layout>

<div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 ">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</div>
</x-app-layout>

@stop

@section('css')
    {{-- ページごとCSSの指定
    <!--<link rel="stylesheet" href="/css/xxx.css">//-->
    --}}
@stop

@section('js')
    <!--<script> console.log('ページごとJSの記述'); </script>//-->
@stop
