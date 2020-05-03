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
<h1>ブログ</h1>
@foreach ($articles as $article)
    <a class="article" href="detail/{{ $article->id }}">
        {{ $article->title }}
    </a>
@endforeach
<a href="/admin/article/">管理画面へ</a>
</div>
@endsection
