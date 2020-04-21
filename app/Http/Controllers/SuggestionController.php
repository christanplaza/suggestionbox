<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function create()
    {
        return view('suggestion.create');
    }
}
