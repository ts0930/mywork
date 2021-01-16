@extends('layouts.admin')

@section('title', 'newsdiary')
   
@section('content')


<div class="col-xs-8 col-xs-offset-2">
       
        <h1>Mynews作成画面</h1>
        
  <form action="{{ action('Admin\WorkController@create') }}" method="post" enctype="multipart/form-data">
        
  @if (count($errors) > 0)
        <ul>
           @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
           @endforeach
        </ul>
  @endif

	<div class="form-group">
		<label for="title" class="">タイトル</label>
		<div class="">
			{{ Form::text('title', null, array('class' => '')) }}
		</div>
	</div>
	<div class="form-group">
		<label for="url" class="">URL</label>
		<div class="">
			{{ Form::text('url', null, array('class' => '')) }}
		</div>
	</div>
	<div class="form-group">
		<label for="words" class="">初知り単語</label>
		<div class="">
			{{ Form::text('words', null, array('class' => '')) }}
		</div>
	</div>

	<div class="form-group">
		<label for="genres" class="">ジャンル</label>
		<div class="">
			<select name="genres" type="text" class="">
				<option></option>
				<option value="" selected="selected">▼ひとつ選択してください</option>
				<option value="fashion" name="1"　>ファッション</option>
				<option value="economic" name="2">経済</option>
				<option value="other" name="3">その他</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label for="bodies" class="">本文</label>
		<div class="">
			{{ Form::textarea('bodies', null, array('class' => '')) }}
		</div>
	</div>
	<div class="form-group">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>

	<div class="form-group">
	 {{ csrf_field() }}
		<button type="submit" class="btn btn-primary">登録</button>
	</div>
</div>

@endsection