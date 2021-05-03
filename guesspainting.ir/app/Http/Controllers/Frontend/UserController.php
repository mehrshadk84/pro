<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Word;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('layouts.home.index');
    }
    public function game()
    {
        $random = rand(1, 2);
        $flight = Word::where('id', $random);
        return view('layouts.app', compact('flight', 'random'));
    }
}