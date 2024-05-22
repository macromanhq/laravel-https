<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $welcomeUrl = url('/welcome');

        return "<h1>Url: $welcomeUrl</h1>";
    }
}
