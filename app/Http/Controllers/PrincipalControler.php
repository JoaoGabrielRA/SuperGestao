<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class principalControler extends Controller
{
     public function principal()
    {
        return view('site.principal');
    }
}
