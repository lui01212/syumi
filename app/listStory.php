<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listStory extends Model
{
     //
    protected $table = 'list_stories';
    //
    protected $fillable = ['story_id','story_name','author_id','story_image','story_intro','story_rating','story_view','story_sum_chapter','story_source','story_status','story_price','update_id','flag'];
    //
}
