<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
//use Input;

class ArticleController extends Controller
{
    //
     public function index()
    {
        
       $query=Article::all();
       return view('Article.index',compact('query'));
    }
    public function edit($id)
    {
       $query=Article::find($id);       
       return view('Article.edit',compact('query'));
    }
    public function update(Request $request,$id)
    {
        
        Article::where('id',$id)->update([
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
            ]);
        return redirect('Article');
    }
   public function create()
    {  

       return view('Article.create');
    }
     public function store(ArticleRequest $request)
    {

      // Article::create($request->all());

       /*
        $product = Article::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            ProductsPhoto::create([
                'title' => $product->title,
                'content' => $filename
            ]);
        }
       */
      //  return 'Upload successful!';
        
       return redirect('Article');
      
        
       return view('Article.index');
    }
    
    public function destroy($id)
    {
        $query=Article::find($id);
       // $query=Article::destroy($id);
        $query->delete();
       return redirect('Article');
    }
     public function show()
    {

       
       // return "welcome to Laravel";
        
       return view('Article.index');
    }
    public function iconUpload()   //image upload
    {
        $file = Input::file('user_icon_file');
        $extension = $file->getClientOriginalExtension();
        $file_name = strval(time()).str_random(5).'.'.$extension;

        $destination_path = public_path().'/upload/';

        if (Input::hasFile('user_icon_file')) {
            $upload_success = $file->move($destination_path, $file_name);
            echo "img upload success!";
        } else {
            echo "img upload failed!";
        }

        $user_obj = Auth::user();
        $user_obj->user_icon = $file_name;
        $user_obj->save();

    }
     public function __construct()
    {
        $this->middleware('auth');
    }
    
}
