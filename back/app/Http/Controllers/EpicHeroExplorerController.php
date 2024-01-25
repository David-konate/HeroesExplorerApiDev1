<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpicHeroExplorerController extends Controller
{
    public function index()
    {
        return view('epic-hero-explorer.index');
    }
}
