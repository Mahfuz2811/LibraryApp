<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\DynamicPage;
use App\Models\Form;
use App\Models\Notice;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $sliders = Slider::all();
        $books = Book::all();
        $pages = DynamicPage::all();
        $notices = Notice::orderBy('created_at', 'desc')->take(5)->get();
        $forms = Form::orderBy('created_at', 'desc')->take(15)->get();
        return view('frontend.home', compact('sliders', 'notices', 'forms', 'pages', 'books'));
    }

    public function dynamicPage($id)
    {
        $pages = DynamicPage::all();
        $dynamic_page = DynamicPage::where('page_url', $id)->first();
        return view('frontend.dynamic_page', compact('pages', 'dynamic_page'));
    }

    public function libraryMember()
    {
        $pages = DynamicPage::all();
        return view('frontend.library_members', compact('pages', 'dynamic_page'));
    }
    
    public function libraryAdministration()
    {
        $pages = DynamicPage::all();
        return view('frontend.library_administration', compact('pages'));
    }

    public function noticeDetails($id)
    {
        $notice = Notice::find($id);
        $pages = DynamicPage::all();
        return view('frontend.notice_details', compact('notice', 'pages'));
    }

    public function bookDetails($id)
    {
        $book = Book::find($id);
        $pages = DynamicPage::all();
        return view('frontend.book_details', compact('book', 'pages'));
    }

    public function downloadNotice($attachment)
    {
        $download_link = public_path('uploads/notice/'.$attachment);
        return response()->download($download_link);
    }

    public function downloadForm($attachment)
    {
        $download_link = public_path('uploads/form/'.$attachment);
        return response()->download($download_link);
    }

}
