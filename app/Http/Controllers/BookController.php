<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $books = Book::all();
        return view('admin.book.index', compact('user', 'books'));

    }

    public function addBook()
    {
        return view('admin.book.add_book');
    }

    public function postBook(Request $request)
    {
        $this->validate($request, [
            'book_name' => 'required',
            'author_name' => 'required',
            'details' => 'required',
        ]);

        try{

            $book = new Book;

            $data = $request->all();

            $book->book_name       = $data['book_name'];
            $book->author_name     = $data['author_name'];
            $book->details        = $data['details'];

            if($book->save())
            {
                return redirect()
                    ->route('admin_book')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Book has been created successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_book')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editBook($id)
    {

        $user = Auth::user();

        $book = Book::find($id);
        return view('admin.book.edit_book',compact('book','id', 'user'));

    }

    public function postEditBook(Request $request, $id)
    {
        $this->validate($request, [
            'book_name' => 'required',
            'author_name' => 'required',
            'details' => 'required',
        ]);

        try{

            $book = Book::find($id);

            $data = $request->all();

            $book->book_name       = $data['book_name'];
            $book->author_name     = $data['author_name'];
            $book->details        = $data['details'];

            if($book->update())
            {
                return redirect()
                    ->route('admin_book')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Book has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_book')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteBook($id)
    {
        try{

            $book = Book::find($id);

            if($book->file_url)
            {
                $delete_path = public_path($book->file_url);
                $delete = unlink($delete_path);
            }

            if($book->delete())
            {
                return redirect()
                    ->route('admin_book')
                    ->with('swt.title', 'Danger!')
                    ->with('swt.text', 'Something went to wrong.')
                    ->with('swt.type', 'error');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_book')
                ->with('swt.title', 'Success!')
                ->with('swt.text', 'Book has been deleted successfully.')
                ->with('swt.type', 'success');
        }
    }
}
