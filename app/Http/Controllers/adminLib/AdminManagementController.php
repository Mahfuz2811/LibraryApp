<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminManagementController extends Controller
{
    public function index()
    {
    	return view('adminLib.book.index');
    }

}
