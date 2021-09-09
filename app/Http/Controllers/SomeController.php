<?php

namespace App\Http\Controllers;

use App\Models\User;

class SomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index')->with(['users' => $users]);
    }

    public function show(int $id)
    {
        $user = User::find($id);
        return view('show',compact('user'));
    }
}
