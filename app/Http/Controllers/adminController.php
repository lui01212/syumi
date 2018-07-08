<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function getAdminPage()
    {
    	return view('admin.master');
    }
    public function getStoryMaster()
    {
        return view();
    }
}
