<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showMessage()
    {
        return "This is a message from the controller!";
    }

    public function showBlade()
    {
        $name = "Faiza";
        return view('welcomeView', ['name' => $name]);
    }
}
