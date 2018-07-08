<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\storyType;

class storyTypeController extends Controller
{
    //
    // story_type::all();
    public function getStoryMaster(Request $request)
    {
        if($request->ajax() || 'NULL')
        {
            $storyType = storyType::paginate(2);
        	// return view('admin.adminPage.story') ->with('storyType',$storyType);
            return view('admin.adminPage.story', compact('storyType'));
        }
    }
    public function postAddStoryMaster(Request $request)
    {
        //
        $typeName = $request->input('typeName');
        $storyTypeShow = new storyType();
        $storyTypeShow ->type_name =$typeName;
        $storyTypeShow ->flag = 1;
        $storyTypeShow ->save();
        //
    	$storyType = storyType::paginate(2);
        return view('admin.adminPage.story') ->with('storyType',$storyType);
    }
    public function postEditStoryMaster(Request $request)
    {
        if($request->ajax() || 'NULL'){
        //
        $typeName = $request->input('typeName');
        $typeId   = $request->input('typeId');
        $flag      = $request->input('flag');
        $storyTypeEdid = storyType::where('type_id',$typeId)->update(['type_name'=>$typeName,'flag' => $flag]);
        //
        $storyType = storyType::paginate(2);
        // return view('admin.adminPage.story',compact('storyType'));
        echo $storyType;
        }
    }
    public function postDeleteStoryMaster($id)
    {
        //
        $storyTypeEdid = storyType::where('type_id',$id)->update(['flag'=>2]);
        //
        $storyType = storyType::paginate(2);
        return view('admin.adminPage.story') ->with('storyType',$storyType);
    }
}
