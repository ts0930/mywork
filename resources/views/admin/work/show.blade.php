@extends('layouts.admin')

@section('title', '物事詳細')

@section('content')
<div class="row">

    <div class="col-xs-8 col-xs-offset-2">
        <h2>ブログ記事</h2>   

        <h2>{{$content->title}}</h2>
        <span>作成日：{{$content->created_at}}</span>
        <span>更新日：{{$content->updated_at}}</span>
        <span>ジャンル{{$content->genre['name']}}</span>


        <p>Url:{{$content->url}}</p>
        <p>Content:</p>{{$content->bodies}}</p>
        <p>Image:{{$content->image}}</p>
        <p>Word:{{$content->words}}</p>

    </div>
</div>

@endsection