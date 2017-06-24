<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Http\Requests\UploadRequest;
use App\Product;
use App\ProductsPhoto;
use DB;
use Illuminate\Support\Facades\Storage;
use File;
use Image;
//use App\file;
//use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    //

    public function index()
    {
      
       $query = DB::table('products')
                ->join('products_photos', 'products.id', '=', 'products_photos.product_id')
                ->select('products.id', 'products.name', 'products_photos.filename')
                ->get();
         
     return view('Upload.index',compact('query'));
    // return view('Upload.index')
    //        ->with('query',$query);
  
    }
  

     public function uploadForm()
    {

        return view('Upload.create');
    }


    public function uploadSubmit(UploadRequest $request)
    {
        
        $product = Product::create($request->all());
        //Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('public');
       //    $filename= Storage::putFile('public',$request->file('photos'));  //儲存於 putFile
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        }
     //   return 'Upload successful!';
       return redirect('UploadI');
      
     

    }
    public function destroy($id)
    {
        $query=Product::find($id);
        $query->delete();

       
       return redirect('Upload');
    }
  
}
