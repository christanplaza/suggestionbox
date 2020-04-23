<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $fillable = ['content', 'author'];

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
