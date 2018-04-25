<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LockSystemController extends Controller
{
    public function lockSystem()
    {
    	return view('adminLib.lock_system.lock_system');
    }
}
