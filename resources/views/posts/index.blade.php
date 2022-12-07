@extends('layouts.app')
@section('title', 'TOP page')

@section('content')
<div class="container">
    <tbody>
        <h1 class="mb-5">記事一覧</h1>
        <div class="article_list p-3 ">
            <div class="row">
            @foreach ($posts as $post)
                <div class="mb-5 col-sm-4 p-3 up_down">
                    <a style="position: relative;" class="" href="{{ url('posts/'.$post->id) }}">
                        <img class="list_image mb-1" src="{{ Storage::url($post->image) }}" style="width:100%; aspect-ratio:4/3; object-fit:cover;">
                        <p class="list_text">タップすると<br>ぼかしが消えます</p>
                    </a>
                    <!-- <p>投稿ID：{{ $post->id }}</p>
                    <p>作成日時：{{ $post->created_at }}</p> -->                                
                    <h5 class="mb-1">{{ $post->title }}</h5>
                    <h6>
                    <?php                                
                    echo substr( "$post->created_at",0,10 );
                    ?>
                    </h6>
                    <!-- <p class="mb-1">本文</p>
                    <p>{{ $post->body }}</p>
                    <div class="btn_area d-flex mb-3">
                        <a href="{{ url('posts/'.$post->id) }}" class="btn m-1 btn-success">詳細</a>
                    @auth
                        <form action="/posts/delete/{{$post->id}}" method="POST">
                            {{ csrf_field() }}
                            <input type="submit" value="削除" class="btn m-1 btn-danger post_del_btn">
                        </form>
                    @endauth
                    </div> -->
                </div>
            @endforeach
            </div>
        </div>
    </tbody>
</div>
@endsection