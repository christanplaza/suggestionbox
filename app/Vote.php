<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['suggestion_id'];
    
    public function suggestion()
    {
        return $this->belongsTo('App\Suggestion');
    }
}
