<?php

namespace App\Http\Controllers\adminLib;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function bookList()
    {
    	return view('adminLib.book.book_list');
    }

    public function lostBookList()
    {
    	return view('adminLib.book.lost_book_list');
    }

    public function addBook()
    {
    	return view('adminLib.book.book_add');
    }
}
