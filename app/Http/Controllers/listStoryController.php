<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listStoryController extends Controller
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
    public function getListStoryMaster(Request $request)
    {
        // $storyAuthor = storyAuthor::paginate(1);
        return view('admin.adminPage.listStory');
        // echo "string";
    }
}
