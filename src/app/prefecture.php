<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'prefecture' => 'required'
    );

    public function getData()
    {
        return $this->prefecture;
    }
}
