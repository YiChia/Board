<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests;

class ContactUsController extends Controller
{
    //test contactUS
    public function index()
    {

       
      //  return "welcome to Laravel";
        
        return view('contact.index');
    }

     public function store(Request $request)
    {
        var_dump(request()->all());
        
       
//驗證資料來源

        $this->validate($request, [
        'name' => 'required|max:6',
        'email' => 'required',
        'message' => 'required',
        ],[

        'name.required'=>'請填姓名',
        'name.max'=>'至多輸入六個字元',
        'email.required'=>'請填Email',
        'message.required'=>'請填寫聯絡資訊',

        
    ]);
   

         
        $newContact = new Contact();
        $newContact->name = request()->get('name');
        $newContact->email = request()->get('email');      
        $newContact->message = request()->get('message');
        $newContact->save();
        

        return redirect('/ContactUs')->with('msg', '謝謝您，我們已收到您的來信，會儘快給您回覆！');
       
    }
}
