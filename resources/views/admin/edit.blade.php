@extends('layout.basic')


@section('contents')
<style>
    .inner {
        width: 960px;
        margin: 0 auto;
    }
    .article {
        display: block;
        border: 1px solid black;
        margin: 0 0 30px 0;
        box-sizing: border-box;
        padding: 15px;
    }
</style>

<form action="/admin/article/{{ $article->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="inner">
        <h2 style="color:red">{{ session('message') }}</h2>
        <input type="text" name="title" id="" value="{{ $article->title }}">
        <textarea name="contents" id="" cols="30" rows="10" style="width: 100%">{{$article->contents}}</textarea>
        <button type="submit">保存</button>
        <a href="/admin/article/">戻る</a>
    </div>
</form>
@endsection
