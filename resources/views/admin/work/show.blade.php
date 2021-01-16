@extends('layouts.admin')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2>タイトル：{{ $content->title }}
	<small>投稿日：{{ date("Y年 m月 d日",strtotime($content->created_at)) }}</small>
</h2>
<p>カテゴリー：{{ $content->category->name }}</p>
<p>{{ $content->content }}</p>

<hr />


@endsection