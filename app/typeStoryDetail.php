<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeStoryDetail extends Model
{
    //
    protected $table = 'type_story_details';
    //
    protected $fillable = ['story_id','type_name_link'];
    //
}
