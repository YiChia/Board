<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpImg;
use Illuminate\Support\Facades\Storage;
class UpImgController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('UpImg.upload');
    }
    public function store(request $request)
    {
        # code...
       // return view('UpImg.upload');
     
      if($request->hasFile('image')){
             $request->file('image'); //圖片上傳位置
      // $request->image->store('public');
      // $request->image->extension(); //圖片類型
      // return Storage::putFile('public',$request->file('image'));  //儲存於 putFile
       return $request->image->storeAs('public','test.jpg');
      }else{
         return 'NO file selected';
      }
      
    }
    public function show()
    {
        # code...
       // return Storage::files('public');
       // return Storage::allfiles('public');
       // return Storage::makeDiretory('public/make'); //??
       /*
        if(Storage::deleteDiretory('public/make')){
            return 'Deleted';
        }
        */
        $url= Storage::url('test.jpg');
        return "<img src='".$url."'/>";
      // return  Storage::size('public/test.jpg');
       //return  Storage::lastModified('public/test.jpg');
       /*
         if(Storage::move('public/test.jpg','test.jpg')){
             return 'File MOved';

         }
*/
        
        // $size;
    }
}
