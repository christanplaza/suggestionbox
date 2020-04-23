<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function upvote($id)
    {
        $suggestion = Suggestion::find($id);

        $suggestion->votes()->create();
        
        return redirect()->route('suggestion.index');
    }

    public function downvote($id)
    {
        $suggestion = Suggestion::find($id);

        $suggestion->votes()->first()->delete();
        
        return redirect()->route('suggestion.index');
    }
}
