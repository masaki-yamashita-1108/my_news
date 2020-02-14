<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
//以下を追記
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'news_id' => 'required',
        'edited_at' => 'required',
    );

}
