<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = Guest::all();
        return view('user.index', compact('users'));
    }
}
