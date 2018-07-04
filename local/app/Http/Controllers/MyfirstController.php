<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
    //
    public function getController($a,$b){
    	echo "this is my first Controller".$a.$b;
    }
    public function getView(){
    	$data['a'] = ['hello1sdsaddasdsa','adfasds'.'adasdada'];
    	return view('MyFirstView',$data);
    }
}
