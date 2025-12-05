<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinuxInstallController extends Controller
{
    public function index()
    {
        return view('linux-install');
    }
}
