@extends('layouts.admin')

@section('title', '物事一覧')
   
@section('content')
<div class="col-xs-8 col-xs-offset-2">
        <h1>物事一覧</h1>
        
        
    @if(session('err_msg'))
        <p class='text-danger'>
            {{session('err_msg')}}
        </p>
    @endif   
         <div class="col-md-8">
                            
         </div>
         <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
          </div>
    <form action="{{ action('Admin\WorkController@index') }}" method="get">
        <tr>
            <th>記事番号</th>
            <th>タイトル</th>
            <th>投稿日</th>
            <th>カテゴリー</th>
            <th>画像</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    @foreach($contents as $content)
    <table class='table table-stripped'>
        <tr>
            <td>{{$content->id}}</td>
            <td><a href="/admin/work/{{$content->id}}">{{$content->title}}</a></td>
            <td>{{$content->updated_at}}</td>
            <td>{{$content->name}}</td>
            <td><img class="newsimg" src="{{$content->image}}"></td>
            <td><a href='/admin/work/edit/{{$content->id}}'" class="btn btn-primary" >編集</button></td>
            
            
　　　 <form action="{{route('delete',$content->id) }}" method="post" enctype="multipart/form-data onSubmit="return checkDelete()">
       @csrf
            <td><button type="submit" class="btn btn-primary" onclick= >削除</button></td>
            <td></td>
            </form>
        </tr>
    </table>
    @endforeach
<div class="mt-4 mb-4">
    <a href="{{action('Admin\WorkController@create')}}" class="btn btn-primary">
        投稿新規作成
    </a>
   
</div>
<script>
function checkDelete(){
    if(window.confirm('削除してもよろしいですか？')){
        return true;
    }else{
        return false;
    }
        
    }
</script>
@endsection