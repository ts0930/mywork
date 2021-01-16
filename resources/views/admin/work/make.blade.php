@extends('layouts.admin')
 
@section('content')
 <div class="row">
 form action="{{  action('Admin\UserController@makesignin')}}" method="post" class="form-horizontal" style="margin-top: 50px;">
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputName">Name</label>
  <div class="col-sm-9">
  <input type="text" name="name" class="form-control" id="InputName" placeholder="Name">
  <!--/.col-sm-10---></div>
  <!--/form-group--></div>
 
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputEmail">Mailadress</label>
  <div class="col-sm-9">
  <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Mailadress">
  </div>
  <!--/form-group--></div>
 
  <div class="form-group">
  <label class="col-sm-3 control-label" for="InputPassword">Password</label>
  <div class="col-sm-9">
  <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
  </div>
  <!--/form-group--></div>
 
  <div class="form-group">
  <label class="col-sm-3 control-label" for="area1">Adress</label>
  <div class="col-sm-9">
  <select name="area" data-toggle="select" class="form-control select select-default" id="area1">
  <option>北海道</option>
  <option>東北</option>
  <option>関東</option>
  <option>中部</option>
  <option>近畿</option>
  <option>中国</option>
  <option>四国</option>
  <option>九州</option>
  <option>沖縄</option>
  </select>
  </div>
  <!--/form-group--></div>
 
 
  <div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">
  <button type="submit" class="btn btn-primary btn-block">新規登録</button>
  </div>
  <!--/form-group--></div>
  {{ csrf_field() }}
  </form>
  </div>
@endsection