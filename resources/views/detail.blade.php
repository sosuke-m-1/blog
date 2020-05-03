@extends('layout.basic')

@section('contents')
<style>
    .inner {
        width: 960px;
        margin: 0 auto;
    }
    .article {
        border: 1px solid black;
        margin: 0 0 30px 0;
        box-sizing: border-box;
        padding: 15px;
    }
</style>

<div class="inner">
<h1>{{ $article['title'] }}</h1>
<div class="contents">
{{ $article['contents'] }}
</div>
<a href="/">戻る</a>
</div>
@endsection
