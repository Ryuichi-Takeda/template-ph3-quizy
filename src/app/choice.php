<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function choices()
    {
        return $this->hasMany(Prefecture::class);
    }

    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'question_id' => 'required',
        'region' => 'required'
    );

    public function getData()
    {
        return $this->region;
    }
}
