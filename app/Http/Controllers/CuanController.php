<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuanController extends Controller
{
    public function index()
    {
        $title = "Cuan | Bersih Indonesiaku";
        $active = "cuan";
        return view('cuan.index', compact('title', 'active'));
    }
}
