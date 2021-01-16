@extends('layouts.admin')

@section('title', '物事一覧')
   
@section('content')

    @csrf

    <label>URL</label>
    {{ $inputs['url'] }}
    <input
        name="url"
        value="{{ $inputs['url'] }}"
        type="hidden">

    <label>タイトル</label>
    {{ $inputs['title'] }}
    <input
        name="title"
        value="{{ $inputs['title'] }}"
        type="hidden">

<label>ジャンル</label>
    {{ $inputs['genres'] }}
    <input
        name="genres"
        value="{{ $inputs['genres'] }}"
        type="hidden">

<label>初知り単語</label>
    {{ $inputs['words'] }}
    <input
        name="words"
        value="{{ $inputs['words'] }}"
        type="hidden">

<label>画像</label>
    {{ $inputs['image'] }}
    <input
        name="image"
        value="{{ $inputs['image'] }}"
        type="hidden">
        
    <label>本文</label>
    {!! nl2br(e($inputs['bodies'])) !!}
    <input
        name="bodies"
        value="{{ $inputs['bodies'] }}"
        type="hidden">

    <button type="submit" name="action" value="back">
        入力内容修正
    </button>
   
</form>

@endsection