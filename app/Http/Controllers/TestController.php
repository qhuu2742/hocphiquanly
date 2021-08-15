<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController
{
    public function test()
    {
        return view('layout.master');
    }
}
