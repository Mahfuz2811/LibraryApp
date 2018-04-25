<?php

namespace App\Http\Controllers;

use App\Models\DynamicPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DynamicPageController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $dynamic_pages = DynamicPage::all();
        return view('admin.dynamic_page.index', compact('user', 'dynamic_pages'));

    }

    public function addDynamicPage()
    {
        return view('admin.dynamic_page.add_dynamic_page');
    }

    public function postDynamicPage(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
        ]);

        try{

            $page = new DynamicPage;

            $data = $request->all();

            $page->title       = $data['title'];
            $page->details     = $data['details'];
            $page->page_url    = str_replace(' ', '', strtolower(str_replace(' ', '-', $data['title'])));

            if($page->save())
            {
                return redirect()
                    ->route('admin_dynamic_page')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Dynamic Page has been created successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_dynamic_page')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editDynamicPage($page_url)
    {
        $page = DynamicPage::find($page_url);
        return view('admin.dynamic_page.edit_dynamic_page', compact('page_url', 'page'));
    }

    public function postEditDynamicPage(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
        ]);

        try{

            $page = DynamicPage::find($id);

            $data = $request->all();

            $page->title       = $data['title'];
            $page->details     = $data['details'];
            $page->page_url    = str_replace(' ', '', strtolower(str_replace(' ', '-', $data['title'])));

            if($page->update())
            {
                return redirect()
                    ->route('admin_dynamic_page')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Dynamic Page has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_dynamic_page')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteDynamicPage($id)
    {
        try{

            $page = DynamicPage::where('page_url', $id)->first();
            

            if($page->delete())
            {
                return redirect()
                    ->route('admin_dynamic_page')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Dynamic Page has been deleted successfully.')
                    ->with('swt.type', 'success');
                
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_dynamic_page')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }
}
