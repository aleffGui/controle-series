<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(Request $request) {
        $series = ['Greys Anatomy', 'Lost', 'Agents of SHIELD'];
        return view('series.index', compact('series'));
    }
    public function create() {
        return view('series.create');
    }
}
