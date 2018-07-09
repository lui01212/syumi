<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storyAuthor extends Model
{
    //
    protected $table = 'story_author';
    //
    protected $fillable = ['author_id','author_name','flag'];
    //
}
