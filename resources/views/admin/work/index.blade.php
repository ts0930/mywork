@extends('layouts.admin')

@section('title', '物事一覧')
   
@section('content')
<div class="col-xs-8 col-xs-offset-2">
        <h1>物事一覧</h1>
        
         <div class="col-md-8">
                            
         </div>
         <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
          </div>
                         <form action="{{ action('Admin\WorkController@index') }}" method="get">
        @foreach($contents as $content)
	<p>{{ $content->id }}</p>
	<h2>タイトル：{{ $content->title }}
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($content->created_at)) }}</small>
	</h2>
	<p>カテゴリー：{{ $content->genre['name'],100}}</p>
	<p>URL:{{$content->url}}</p>
	<p>一言:{{$content->words}}</p>
	<p>{!! nl2br(e(Str::limit($content->bodies))) !!}</p>
	<p>{{link_to("/bbc/{$content->id}", '続きを読む', array('class' => 'btn btn-primary')) }}</p>
	<hr />
	</td>
            <td class="text-nowrap">
                    <p><a href="" class="btn btn-primary btn-sm">詳細</a></p>
                    <p><a href="" class="btn btn-info btn-sm">編集</a></p>
                    <p><a href="" class="btn btn-danger btn-sm">削除</a></p>
            </td>
@endforeach
<div class="mt-4 mb-4">
    <a href="{{action('Admin\WorkController@add')}}" class="btn btn-primary">
        投稿新規作成
    </a>
</div>
@endsection