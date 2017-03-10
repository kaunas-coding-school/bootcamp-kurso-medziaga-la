<?php

namespace App\Http\Controllers;

use App\OMDB;
use Illuminate\Http\Request;

class SearchMoviesController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function send(Request $request)
    {
        $keyword = $request->keyword;

        $omdb = new OMDB;
        $response = $omdb->getSearch($keyword);
        $result = $omdb->getResults($response);

        return redirect()->route('search-results')->with('movies', $result);
    }

    public function results()
    {
        return view('search.results');
    }
}
