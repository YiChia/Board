<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
     public function show($id) //登入
    {
        //
        return View::make('Admin.login');
    }
     public function login() //驗證
    {
            $input = Input::all();
            $rules = ['email'=>'required|email',
                    'password'=>'required'
                    ];
            $validator = Validator::make($input, $rules);
            if ($validator->passes()) {
                $attempt = Auth::attempt([
                    'email' => $input['email'],
                    'password' => $input['password']
                ]);
                if ($attempt) {
                    return Redirect::intended('post');
                }
                 return Redirect::to('login')
                ->withErrors(['fail'=>'Email or password is wrong!']);
    }
    //fails
                return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
    }
     public function logout() //登出
    {
       Auth::logout();
      return Redirect::to('/login');
    }
}
