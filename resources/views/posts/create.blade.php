@extends('layouts.app')
@section('title', 'create page')

@section('content')
    <div class="row">
        <!-- メイン -->
        <div class="col-10 col-md-6 offset-1 offset-md-3">
            <form action="/posts" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="mb-3" for="exampleFormControlTextarea1">新規投稿</label>
                    <p class="mb-1">タイトル</p>
                    <textarea class="form-control mb-3" name="title" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <p class="mb-1">本文</p>
                    <textarea class="form-control mb-3" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <p class="mb-1">画像登録</p>
                    <input type="file" class="form-control-file mb-3" name='image' id="image">
                    <div class="text-center mt-3">
                        <input class="btn btn-primary" type="submit" value="投稿する">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection