<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\storyTypeRequest;

use App\storyType;

class storyTypeController extends Controller
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
    public function getStoryMaster(Request $request)
    {
        if($request->ajax() || 'NULL')
        {
            $storyType = storyType::paginate(5);
            if ($request->ajax()) {
                return view('admin.adminPage.storyDetail',compact('storyType'));
            }
            return view('admin.adminPage.story', compact('storyType'));
        }
    }
    public function postAddStoryMaster(storyTypeRequest $request)
    {
        //
        $typeName = $request->input('typeName');
        $storyTypeShow = new storyType();
        $storyTypeShow ->type_name =$typeName;
        $storyTypeShow ->type_name_link =str_slug($typeName);
        $storyTypeShow ->flag = 1;
        $storyTypeShow ->save();
        //
    	$storyType = storyType::paginate(5);
        return view('admin.adminPage.story') ->with('storyType',$storyType);
    }
    public function postEditStoryMaster(storyTypeRequest $request)
    {
        if($request->ajax() || 'NULL'){
        //
        $typeName = $request->input('typeName');
        $typeId   = $request->input('typeId');
        $flag      = $request->input('flag');
        $storyTypeEdid = storyType::where('type_id',$typeId)->update(['type_name'=>$typeName,'flag' => $flag]);
        //
        $data['Status'] = 'NORMAL';
        return $data;
        }
    }
    public function postDeleteStoryMaster($id)
    {
        //
        $storyTypeEdid = storyType::where('type_id',$id)->update(['flag'=>2]);
        //
        $data['Status'] = 'NORMAL';
        //
        return $data;
    }
}
