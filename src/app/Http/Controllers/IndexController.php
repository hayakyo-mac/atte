<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function date_list(){
        return view('date_list');
    }
}