<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index()
    {
        $suggestions = Suggestion::all();

        return view('suggestion.index', compact('suggestions'));
    }
    
    public function create()
    {
        return view('suggestion.create');
    }

    public function store(Request $request)
    {
        Suggestion::create([
            'content' => $request->content,
            'author' => $request->author
        ]);

        return redirect()->route('suggestion.index');
    }
}
