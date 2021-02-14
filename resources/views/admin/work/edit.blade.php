@extends('layouts.admin')

@section('title', 'newsdiary editform')
   
@section('content')


<div class="col-xs-8 col-xs-offset-2">
       
        <h1>Mynews Editform</h1>
        
  <form action="{{ action('Admin\WorkController@update') }}" method="post" enctype="multipart/form-data" onSubmit="returncheckSubmit()">
@csrf
  @if (count($errors) > 0)
        <ul>
           @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
           @endforeach
        </ul>
  @endif
    
	<div class="form-group">
		<label for="title" class="">タイトル</label>
	 <input
                        id="title"
                        name="title"
                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                        value="{{ $content->title }}"
                        type="text"
                    >
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
	</div>
		<div class="form-group">
		<label for="name" class="">ジャンル</label>
		<div class="">
		 <input
                        id="name"
                        name="name"
                        class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{$content->name}}"
                        type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="url" class="">URL</label>
		<div class="">
		 <input
                        id="url"
                        name="url"
                        class="form-control  {{ $errors->has('url') ? 'is-invalid' : '' }}"
                        value="{{ $content->url }}"
                        type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="words" class="">初知り単語</label>
		<div class="">
		<input
                        id="words"
                        name="words"
                        class="form-control  {{ $errors->has('words') ? 'is-invalid' : '' }}"
                        value="{{  $content->words }}"
                        type="text">
		</div>
	</div>

     
	<div class="form-group">
		<label for="bodies" class="">本文</label>
		<div class="">
		<textarea
                        id="bodies"
                        name="bodies"
                        class="form-control {{ $errors->has('bodies') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{  $content->bodies }}</textarea>
                    @if ($errors->has('bodies'))
                        <div class="invalid-feedback">
                            {{ $errors->first('bodies') }}
                        </div>
                    @endif
		</div>
	</div>
	<div class="form-group">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
    <a class='btn btn-secondry',href={{('admin.work.index')}}キャンセル</a>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"onSubmit="return checkSubmit()">更新</button>
	</div>
</div>
<script>
function checkSubmit(){
    if(window.confirm('更新してもよろしいですか？')){
        return true;
    }else{
        return false;
    }
        
    }
</script>
@endsection