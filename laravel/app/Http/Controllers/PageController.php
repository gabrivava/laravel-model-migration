<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Holiday;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function holidays()
    {
        $holidays = Holiday::all();
        //ddd($holidays);
        return view('holidays.index', compact('holidays'));
    }

}
