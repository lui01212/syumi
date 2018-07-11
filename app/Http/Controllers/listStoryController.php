<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\listStory;

use App\storyType;

use App\storyAuthor;

use App\typeStoryDetail;

use Auth;

use DB;

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
        $listStory  = DB::table('list_stories') ->leftjoin('story_author','list_stories.author_id','=','story_author.author_id')->paginate(1);
        return view('admin.adminPage.listStory') ->with(['storyType'=>$storyType , 'storyAuthor'=>$storyAuthor,'listStory'=>$listStory]);
    }
    public function postAddListStoryMaster(Request $request){

        $nameImage = "";

        if ($request ->hasFile('storyImage')) {

            $file = $request ->file('storyImage');

            $nameFile = $file->getClientOriginalName();

            $nameImage = str_random(4)."_".$nameFile;

            while (file_exists('images/'.$nameImage)) {

                $nameImage = str_random(4)."_".$nameFile;

            }

            $file ->move('images/',$nameImage);

        }
        $listStory      = new listStory();
        $listStory->story_image = $nameImage;
        //
        $storyType = $request ->input('storyType');
        //
        $html = '';
        $step = '';
        foreach ($storyType as  $value) {
            $html = $html.$step.$value;
            $step = ',';
        }
        $listStory->story_type = $html;
        //
        $listStory->story_name = $request ->input('storyName');
        $listStory->author_id = $request ->input('authorId');
        $listStory->story_source = $request ->input('storySource');
        $listStory->story_sum_chapter = $request ->input('storySumChapter');
        $listStory->story_view = $request ->input('storyView');
        $listStory->story_rating = $request ->input('storyRating');
        $listStory->story_status = $request ->input('storyStatus');
        $listStory->story_price = $request ->input('storyPrice');
        $listStory->story_intro = $request ->input('storyIntro');
        $listStory->update_id = Auth::id();
        $listStory->flag = 1;
        //
        $listStory ->save();
        //---------------------------------------------------------------------
        foreach ($storyType as  $value) {
            $typeStoryDetail = new typeStoryDetail();
            $typeStoryDetail ->story_id = $listStory->story_id;
            $typeStoryDetail ->type_name_link = str_slug($value);
            $typeStoryDetail->save();
        }
        return $storyType;
    }
    public function postTest(){
        $listStory      = DB::table('list_stories') ->leftjoin('story_author','list_stories.author_id','=','story_author.author_id')->get();
        return $listStory;
    }
}
