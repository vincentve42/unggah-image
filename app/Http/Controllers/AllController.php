<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function TentangUi()
    {
        return view("tentang-kami");
    }
}
