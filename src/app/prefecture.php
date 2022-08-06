<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// use function PHPUnit\Framework\returnSelf;

class Prefecture extends Model
{
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
