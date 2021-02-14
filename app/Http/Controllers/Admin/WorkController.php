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
   public function create()
   {
       $genre= new Genre;
      
       
       //\DB::table('contents')
       //->leftjoin('genres','contents.genres_id','=','genres.id')
       //->get();
       
       $genres=Genre::All();
      
       
       return view('admin.work.create',['genres'=>$genres]);
   }
  
  
    public function index()
    {  
       //$contents=Content::orderBy('created_at','asc')->get();
        $contents=\DB::table('contents')
       ->select('genres.id as genres_id','contents.id','bodies','contents.updated_at','genres.name','image','title')
       ->leftjoin('genres','contents.genres_id','=','genres.id')
       ->get();
    return view('admin.work.index',['contents'=>$contents]);
    }
    
    
   public function show(Request $request, $id)
{
    $content = Content::findOrFail($id);
 
    return view('admin.work.show', [
        'content' => $content,
    ]);
}


    public function showList()
    {
        $contents=Content::all();
        return view('admin.work.index',['contents'=>$contents]);
    }
    
    
    
    public function showDetail($id)
    {
        $content=Content::find($id);
        
        if (is_null($content)){
            \Session::flash('err_msg','データはありません');
            return redirect('admin/work/index');
        }
        
        return view('admin.work.show',['content'=>$content]);
    }
    
    
    
       public function showEdit($id)
    {
        $content=Content::find($id);
        
        if (is_null($content)){
            \Session::flash('err_msg'('データはありません'));
            return redirect('admin/');
        }
        
        return view ('admin.work.edit',['content'=>$content]);
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

   
   public function store(ContentRequest $request)
    {
        $inputs=$request->all();
        
        \DB::beginTransaction();
        try{
            Content::create($inputs);
            \DB::commit();
        }catch(\Throwable $e){
             \DB::rollback();
            abort(500);
        }
       
        \Session::flash('err_msg','ブログを登録しました');
        return redirect('admin');
    }
     public function edit($id)
    {
      
        $content=\DB::table('contents')->first()
       ->select('genres.id as genres_id','contents.id','bodies','contents.updated_at','genres.name','contents.image','contents.title','contents.words',contents.created_at)
       ->leftjoin('genres','contents.genres_id','=','genres.id')
       ->get();
        
        
        if (is_null($content)){
            \Session::flash('err_msg','データはありません');
            return redirect('admin/work');
        }
        
        return view('admin.work.edit',['content'=>$content]);
    }
    public function update(ContentRequest $request)
    {
        $inputs=$request->all();

        \DB::beginTransaction();
        try{
            $content=Content::find($inputs['id']);
            $content->fill([
            'title'=>$inputs['title'],
            'bodies'=>$inputs['bodies'],
            'url'=>$inputs['url'],
            'words'=>$inputs['words'],
            'image'=>$inputs['image'],
            ]);
            $content->save();
            \DB::commit();
        }catch(\Throwable $e){
             \DB::rollback();
            abort(500);
        }
       
        \Session::flash('err_msg','ブログを更新しました');
        return redirect('admin');
    }
     public function delete($id)
    {
       if (empty($id)){
            \Session::flash('err_msg','データはありません');
            return redirect('admin/work/');
        }
        
         try{
            Content::destroy($id);
        }catch(\Throwable $e){
            abort(500);
        }
       
       -
        \Session::flash('err_msg','データは削除されました');
            return redirect('admin/work');
        
    }
}