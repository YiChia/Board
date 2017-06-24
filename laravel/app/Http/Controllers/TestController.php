<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use View; //使用到 view 
use App\Photo;

class TestController extends Controller
{
    //
     public function index()
    {

       
        return "welcome to Laravel";
        
      
    }
    public function show($id)
    {
        return View::make('test')
                ->with('title', '首頁')
                ->with('hello', '大家好～～'.$id);
    }

    public function Sql()
    {
      $post = new Photo;
      $post->picNo = '26';
      $post->picName = 'ks00';
      $post->pictype = 'jpg';
      $post->picWidth = '20';
      $post->hashtag = 'test';
      $post->picDate = '2017-05-24';
      $post->picMb = '1';
      $post->save();
    }

    public function Select()
    {
        # code...
        //$posts = Photo::all();
       // Post::where('id','=',25)->get();
       //$post = Photo::find($id);
       $post=Photo::where('picNo','=','25')->get();
        return View::make('test')
        ->with('title', 'My Blog - '. $post->picName)
        ->with('post', $post);
    }
}
