<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CirculationController extends Controller
{
    public function issueBookList()
    {
    	return view('adminLib.circulation.issue_book_list');
    }

    public function addIssueBook()
    {
    	return view('adminLib.circulation.add_issue_book');
    }

    public function addReturnBook()
    {
    	return view('adminLib.circulation.add_return_book');
    }
}
