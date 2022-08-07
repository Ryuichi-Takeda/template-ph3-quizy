<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    // public function questions()
    // {
    //     return $this->hasMany(Question::class);
    // }

    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'prefecture' => 'required'
    );

    public function getData(){
        return $this->id . ':' . $this->prefecture;
    }
}
