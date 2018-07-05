<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Validator;

class MyFristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        //
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
    public function getController($name,$age){
        $data['kaka'] = 5;
        return view('MyFristView',$data);
    }
    public function getPost(){
        return view('post');
    }
    public function getCatagory(){
        return view('catagory');
    }
    public function updateUser(){
        $arr = [
            'name'      => 'user',
            'username'  => 'name',
            'password'  => md5('bokinhvan'),
            'level'     => 2
        ];
        DB::table('users')->where('username','=','user') -> update($arr);
        return dd('update thanh cong');
    }
    public function insertUser(){
        $arr = [
            'name'      => 'user1',
            'username'  => 'name1',
            'password'  => md5('bokinhvan'),
            'level'     => 1
        ];
        DB::table('users')-> insert($arr);
        return dd('insert thanh cong');
    }
    public function getLogin(){
        return view('admin.login.view');
    }
    public function postLogin(Request $request){

        $user = $request['user'];

        $password = $request['password'];

        $rules = [
         
        'user'=>'required',
         
        'password'=>'required',
         
        ];
         
        $messages = [
         
        'user.required'=>'tài khoản không được để trống',
         
        'password.required'=>'mật khẩu không được để trống',
         
        ];
         
        $Validator = Validator::make($request->all(),$rules,$messages);
         
        if($Validator->fails()){
            return   view('admin.login.view') -> withErrors($Validator);
        }else{
            echo $user.$password;
        }
        print_r($request->all());
        // $this->validate($request,$rules,$messages);
    }
}
