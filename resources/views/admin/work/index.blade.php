@extends('layouts.admin')

@section('title', '物事一覧')
   
@section('content')
<div class="col-xs-8 col-xs-offset-2">
        <h1>物事一覧</h1>
        
         <div class="col-md-8">
                            <input type="text" class="form-control" name="view_title" value="{{ $view_title }}">
         </div>
         <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
          </div>
                         <form action="{{ action('Admin\WorkController@index') }}" method="get">
        @foreach($posts as $content)
	<p>{{ $content->id }}</p>
	<h2>タイトル：{{ $content->title }}
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($content->created_at)) }}</small>
	</h2>
	<p>カテゴリー：{{ $content->genre->name,100}}</p>
	<p>{{\str::limit($content->content) }}</p>
	<p>{{link_to("/bbc/{$content->id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<hr />
@endforeach

@endsection