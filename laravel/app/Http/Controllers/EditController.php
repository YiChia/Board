<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edit;

class EditController extends Controller
{
    /*
    // 後台 照片上傳、編輯
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function index()
    {
        
      // $query=Edit::all();
      // return view('Edit.index',compact('query'));
       return view('Edit.index');
    }
    public function edit($id)
    {
       $query=Edit::find($id);       
       return view('Edit.edit',compact('query'));
    }
    public function update(Request $request,$id)
    {
        
        Edit::where('id',$id)->update([
            'picName'=>$request->get('picName'),
            'hashtag'=>$request->get('hashtag'),
            ]);
        return redirect('Edit');
    }
   public function create()
    {  
       return view('Edit.create');
    }
     public function store(EditRequest $request)
    {

       Edit::create($request->all());
     
       return redirect('Edit');
      
        
       return view('Edit.index');
    }
    
    public function destroy($id)
    {
        $query=Edit::find($id);
       // $query=Edit::destroy($id);
        $query->delete();
       return redirect('Edit');
    }
     public function show()
    {

       
       // return "welcome to Laravel";
        
       return view('Edit.index');
    }
}
