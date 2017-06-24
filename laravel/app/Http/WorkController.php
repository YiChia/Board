<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Work;


use App\Product;
use App\ProductsPhoto;
use DB;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    //
     public function index()
    {

       //連接資料庫
       /*
       //$pic = DB::table('picdata')->get();
       $data = DB::table('picdata')->where('id','1')->first(); 

       // return view('Work.index', ['data' => $data->picName]);
      //  return "welcome to Laravel";
        var_dump($data->picName);
        return view('Work.index');
        */
        
         $query = DB::table('products')
                ->join('products_photos', 'products.id', '=', 'products_photos.product_id')
                ->select('products.id', 'products.name', 'products_photos.filename')
                ->get();
         
      //  $count = Model::where('status','=','1')->count();

  //   return view('Upload.index',compact('query'));
       return view('Work.index')
           ->with('query',$query);
          


    }
}
