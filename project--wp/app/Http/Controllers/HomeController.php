<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard(){
        return view('Dashboard');

    }

    public function index(){
        $Data = User::get();

        return view('index', compact('Data'));
    }
}
