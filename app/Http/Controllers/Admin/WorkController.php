<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Content;
use App\Genre;
use Validator;
class WorkController extends Controller
{
    //
   public function add()
   {
       $genre= new Genre;
       $genres= $genre->getLists();
       
       $genrejoin =\DB::table('contents')
       ->leftjoin('genres','contents.genres_id','=','genres.id')
       ->get();
       
       return view('admin.work.create',['genres'=>$genres]);
   }
   public function create(ContentRequest $request)
   {  $data = [
        'title' => $request->title,
        'bodies' => $request->bodies,
        'genres_id' => $request->genres_id,
    ];
    
    $content=new Content;
    $content->fill($data)->save();
 
      return redirect('/admin/work/create')->with('poststatus','新規投稿しました');
           
           
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
    
    public function index()
    {  
       $contents=Content::orderBy('created_at','desc')->get();
    return view('admin.work.index',['contents'=>$contents]);
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
    public function next()
    {
    return view('admin.work.create');
            }
}