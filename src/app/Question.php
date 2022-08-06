<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // protected $guarded = array('id');

    public static $rules = array(
        'prefecture_id' => 'required',
        'question_id' => 'required',
        'img' => 'required'
    );

    public function getData(){
        return $this->question_id . ':' . $this->img;
    }
    
}
