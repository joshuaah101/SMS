<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function payment(){
        return view('payment');
    }

    public function portal(){
        return view('portal');
    }

    public function check_status(){
        return view('check-status');
    }
}
