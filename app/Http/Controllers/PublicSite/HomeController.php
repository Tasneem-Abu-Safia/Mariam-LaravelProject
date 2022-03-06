<?php

namespace App\Http\Controllers\PublicSite;

use App\Http\Controllers\Controller;
use App\Models\section;
use Illuminate\Http\Request;
use App\Models;
class HomeController extends Controller
{
    public function index()
    {
        $sections = section::withoutTrashed()->where('sectionPage','home')->get();
        return view('layout.publicSite.Home')->with('sections',$sections);
    }
}
