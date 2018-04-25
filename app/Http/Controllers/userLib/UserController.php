<?php

namespace App\Http\Controllers\userLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
    	return view('userLib.index');
    }

    public function applyBook()
    {
    	return view('userLib.apply');
    }

    public function bookList()
    {
    	return view('userLib.book_list');
    }

    public function previousIssuedBookList()
    {
    	return view('userLib.pending_issue_book');
    }

    public function pendingBookList()
    {
    	return view('userLib.pending_issue_book');
    }
}
