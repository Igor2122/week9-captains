<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Captain;

class CaptainController extends Controller
{
    public function index ()
    {
        $captains = Captain::orderBy('name', 'DESC')->get();
        dd($captains);
        return view('captain/index');
    }

    public function show($captain_slug)
    {
        // dd($captain_slug);
        $captain = \App\Captain::where('slug', $captain_slug)->first();

        if (!$captain) {
            abort(404, 'Captain not found');
        }

        $view = view('captain/show');
        $view->captain = $captain;
        return $view;
    }
}
