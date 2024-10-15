<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manager_order(){
        return view('admin.manager.manager');
    }
}
