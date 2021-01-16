<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;
use App\Genre;
use Validator;
class WorkController extends Controller
{
    //
    public function add()
    {
        return view('admin.work.create');
        
    }
    
    public function create(Request $request){
        
        $this->validate($request, Content::$promise);
        
        $contents=new Content;
        $form=$request->all();
        
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $contents->image = basename($path);
      } else {
          $contents->image = null;
      }
        
        unset($form['_token']);
         unset($form['image']);
        
         $contents->fill($form);
         $contents->save();
        
         return redirect('admin/work/create');
    }
    
    public function see()
    {
        return view('admin.work.see');
        
    }
    
    public function confirm(Request $request)
    {
       
        $request->validate([
            'title' => 'required|max:200',
        'bodies' => 'required|max:6000',
        'url'=>'required'
        ]);
        

        $inputs = $request->all();


        return view('admin.work.see', [
            'inputs' => $inputs,
        ]);
    }
    
    public function index(Request $request)
    {  
        $view_title=$request->view_title;
        if($view_title !=''){
        $posts=Content::where('title',$view_title)->get();
    }else{
        $posts=Content::all();
    }
    return view('admin.work.index',['posts'=>$posts,'view_title'=>$view_title]);
    }
    
    
    public function edit()
    {
        return view('admin.work.edit');
    }
    
    public function store(){
        
    }
    public static function post(Request $request)
    {
       $promise = [
        'title' => 'required|max:200',
        'bodies' => 'required|max:6000',
        'url'=>'required'
        ];
        $message=[
          'title.max' =>'タイトルは:max文字以内で入力してください。',
          'bodies.max'=>'コンテンツは:max文字以内で入力してください。',
          ];
        $validated = $request->validate($promise, $message);
        return view('admin.work.see')->with(['validated'=>$validated]);
}
}