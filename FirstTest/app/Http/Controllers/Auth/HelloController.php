<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($id)
    {
        dd($id);
    }
}
