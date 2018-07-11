<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\listStory;

use App\storyType;

use App\storyAuthor;

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

        $storyType      = storyType::all();
        $storyAuthor    = storyAuthor::all();
        $listStory      = listStory::paginate(1);

        return view('admin.adminPage.listStory') ->with(['storyType'=>$storyType , 'storyAuthor'=>$storyAuthor,'listStory'=>$listStory]);
        // echo "string";
    }
    public function postAddListStoryMaster(Request $request){
            $storyImage = $request ->file('storyImage');
            $storyImage ->move('images/','tenhinh.jpg');
            $storyName = $request ->input('storyName');
            $authorName = $request ->input('authorName');
            $storySource = $request ->input('storySource');
            $storySumChapter = $request ->input('storySumChapter');
            $storyView = $request ->input('storyView');
            $storyRating = $request ->input('storyRating');
            $storyStatus = $request ->input('storyStatus');
            $storyPrice = $request ->input('storyPrice');
            $storyIntro = $request ->input('storyIntro');
            return $storyIntro;
    }
}
