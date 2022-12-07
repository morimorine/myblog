@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">
                    {{ __('ログイン中です') }}             
                </div>

                <div class="card-body">
                    <a class="text-white" style="text-decoration:none" href="{{ url('/posts') }}">記事一覧へ</a>
                </div>
                <div class="card-body">
                    <a class="text-danger" style="text-decoration:none;" href="{{ url('/posts/create') }}">新規投稿</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
