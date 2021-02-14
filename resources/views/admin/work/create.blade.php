@extends('layouts.admin')

@section('title', 'newsdiary')
   
@section('content')


<div class="col-xs-8 col-xs-offset-2">
       
        <h1>Mynews作成画面</h1>
        
  <form action="{{ action('Admin\WorkController@store') }}" method="post" enctype="multipart/form-data">
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
                        value="{{ old('title') }}"
                        type="text"
                    >
                    @if ($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
	</div>
	<div class="form-group">
		<label for="url" class="">URL</label>
		<div class="">
		 <input
                        id="url"
                        name="url"
                        class="form-control 
                        value="{{ old('url') }}"
                        type="text">
		</div>
	</div>
	<div class="form-group">
		<label for="words" class="">初知り単語</label>
		<div class="">
		<input
                        id="words"
                        name="words"
                        class="form-control 
                        value="{{ old('words') }}"
                        type="text">
		</div>
	</div>

     <p>
       <div class="form-group">
                    <label for="subject">
                        カテゴリー
                    </label>
                    <select
                        id="genre_id"
                        name="genre_id"
                        class="form-control {{ $errors->has('genre_id') ? 'is-invalid' : '' }}"
                        value="{{ old('genre_id') }}"
                    >
                     @foreach($genres as $name)
                         <option value="{{$name->id}}">{{ $name->name }}</option>
                    @endforeach
               </select>
 
	<div class="form-group">
		<label for="bodies" class="">本文</label>
		<div class="">
		<textarea
                        id="bodies"
                        name="bodies"
                        class="form-control {{ $errors->has('bodies') ? 'is-invalid' : '' }}"
                        rows="4"
                    >{{ old('bodies') }}</textarea>
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
		<button type="submit" class="btn btn-primary">登録</button>
	</div>
</div>
<script>
function checkSubmit(){
    if(window.confirm('登録してもよろしいですか？')){
        return true;
    }else{
        return false;
    }
        
    }
</script>
@endsection