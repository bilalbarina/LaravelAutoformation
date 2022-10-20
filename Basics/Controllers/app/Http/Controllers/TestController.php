<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    function index()
    {
        $text = "Hello World";
        return view('index', [
            'text' => $text,
        ]);
    }
}
