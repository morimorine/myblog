@extends('layouts.app')
@section('title', 'detail page')

@section('content')
<div class="container">
    <div class="row">
        <!-- メイン -->
        <div class="col-10 col-sm-8 offset-1 offset-sm-2">
            <div class="">
                <div class="card-header">                    
                    <h1 class="text-center">{{ $post->title }}</h1>
                </div>
                <div class="card-body">
                    <img class="mb-2 mb-sm-4 d-block mx-auto" src="{{ Storage::url($post->image) }}" width="100%">
                    <h4 class="mb-1 mb-sm-3">{{ $post->body }}</h4>
                    <p>投稿ID：{{ $post->id }}</p>
                    <p>投稿日時：{{ $post->created_at }}</p>  
                    <div class="mb-1 mb-sm-3"><span class="font-weight-bold">by:</span> {{ $user->name }}</div>
                    @auth
                        <div class="btn_area d-flex mb-3">
                            <a href="{{ url('posts/edit/'.$post->id) }}" class="btn btn-primary m-1">編集</a>
                            <form action="/posts/delete/{{$post->id}}" method="POST">
                                {{ csrf_field() }}
                                <input type="submit" value="削除" class="btn m-1 btn-danger post_del_btn">
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection