<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function login(){
        return view('saludo');

        
    }
    public function index(){
        return view('login');
    }
}