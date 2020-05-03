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

<div class="inner">
<h1>管理画面</h1>
<h2 style="color:red">{{ session('message') }}</h2>
@foreach ($articles as $article)
<div>
    {{ $article->id }}
    {{ $article->title }}
    <a href="/admin/article/{{ $article->id }}/edit">編集</a>

    <form action="/admin/article/{{ $article->id }}" method="post">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit">削除</button>
    </form>

</div>
@endforeach
<a href="/admin/article/create">新規作成</a>
<a href="/">サイトを見る</a>
</div>
@endsection
