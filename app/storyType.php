<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storyType extends Model
{
    //
    protected $table = 'story_type';
    //
    protected $fillable = ['type_id','type_name','flag'];
    //
}
