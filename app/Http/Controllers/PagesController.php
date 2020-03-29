<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages\index');
    }
    public function features(){
        return view('pages\features');
    }
    public function pricing(){
        return view('pages\pricing');
    }
    public function mhs(){
        return view('pages\mahasiswa\index');
    }
}
