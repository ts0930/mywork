@extends('layouts.admin')

@section('title', 'newsdiary')
   
@section('content')
        <h1>編集画面</h1>
        
        <div class="form-group">
  <label for="text1">作品名:</label>
  <input type="text" id="text1" class="form-control">
</div>
<div class="form-group">
  <label for="passwd1">Password:</label>
  <input type="password" id="passwd1" class="form-control">
</div>
<div class="form-group">
  <label for="textarea1">Textarea:</label>
  <textarea id="textarea1" class="form-control"></textarea>
</div>
<div class="form-group">
  <label for="file1">File:</label>
  <input type="file" id="file1" class="form-control-file">
</div>
@endsection