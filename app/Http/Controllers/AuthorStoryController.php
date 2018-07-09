<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\storyAuthor;

class AuthorStoryController extends Controller
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
    public function getAuthorMaster(Request $request)
    {
    	if($request->ajax() || 'NULL')
        {
            $storyAuthor = storyAuthor::paginate(1);
            if ($request->ajax()) {
                return view('admin.adminPage.authorDetail',compact('storyAuthor'));
            }
            return view('admin.adminPage.author', compact('storyAuthor'));
        }
    }
    public function postAddAuthorMaster(Request $request)
    {
        //
        $authorName = $request->input('authorName');
        $storyAuthorShow = new storyAuthor();
        $storyAuthorShow ->author_name =$authorName;
        $storyAuthorShow ->flag = 1;
        $storyAuthorShow ->save();
        //
    	$storyAuthor = storyAuthor::paginate(1);
        return view('admin.adminPage.author') ->with('storyAuthor',$storyAuthor);
    }
    public function postEditAuthorMaster(Request $request)
    {
        if($request->ajax() || 'NULL'){
	        //
	        $authorName = $request->input('authorName');
	        $authorId   = $request->input('authorId');
	        $flag      	= $request->input('flag');
	        $storyAuthorEdid = storyAuthor::where('author_id',$authorId)->update(['author_name'=>$authorName,'flag' => $flag]);
	        //
	        // $storyType = storyType::paginate(2);
	        // return view('admin.adminPage.storyDetail',compact('storyType'));
	        $data['Status'] = 'NORMAL';
	        return $data;
        }
    }
    public function postDeleteAuthorMaster($id)
    {
               //
        $storyAuthorEdid = storyAuthor::where('author_id',$id)->update(['flag'=>2]);
        //
        // $storyType = storyType::paginate(2);
        // return view('admin.adminPage.story') ->with('storyType',$storyType);
        $data['Status'] = 'NORMAL';
        return $data;
    }
}
