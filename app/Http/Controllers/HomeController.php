<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function percentage()
    {
        $percentage = 100;
        return view('welcome', ['percentage' => $percentage]);
    }
}
