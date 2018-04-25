<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeeAdjustmentController extends Controller
{
    public function feeAdjustment()
    {
    	return view('adminLib.fee_adjustment.fee_adjustment');
    }
}
