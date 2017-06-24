<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;



class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
         //return view('Auth.contact');
          return view('Article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
      return Redirect::to('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     public function __construct()
    {
        $this->middleware('auth');
    }
}
