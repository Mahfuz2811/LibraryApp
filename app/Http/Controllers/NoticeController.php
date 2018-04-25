<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Notice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notices = Notice::all();
        return view('admin.notice.index', compact('user', 'notices'));

    }

    public function addNotice()
    {
        return view('admin.notice.add_notice');
    }

    public function postNotice(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'type' => 'required',
        ]);

        try{

            $notice = new Notice;

            if($request->hasFile('file'))
            {
                $file = $request->file('file');
                //return $file;

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/notice',$new_file_name);

                if($success)
                {
                    $notice->file_url = 'uploads/notice/'.$new_file_name;
                    $notice->file_name = $new_file_name;
                }
            }

            $data = $request->all();

            $notice->title       = $data['title'];
            $notice->details     = $data['details'];
            $notice->type        = $data['type'];

            if($notice->save())
            {
                return redirect()
                    ->route('admin_notice')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Notice has been created successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_notice')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editNotice($id)
    {

        $user = Auth::user();
        
        $notice = Notice::find($id);
        return view('admin.notice.edit_notice',compact('notice','id', 'user'));

    }

    public function postEditNotice(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'details' => 'required',
            'type' => 'required',
        ]);

        try{

            $notice = Notice::find($id);

            $user_id = $notice->created_by;

            if($request->hasFile('file'))
            {
                if($notice->file_url)
                {
                    $delete_path = public_path($notice->file_url);
                    $delete = unlink($delete_path);
                }

                $file = $request->file('file');

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/notice',$new_file_name);

                if($success)
                {
                    $notice->file_url = 'uploads/notice/'.$new_file_name;
                    $notice->file_name = $new_file_name;
                }


            }

            $data = $request->all();

            $notice->title       = $data['title'];
            $notice->details     = $data['details'];
            $notice->type        = $data['type'];

            if($notice->update())
            {
                return redirect()
                    ->route('admin_notice')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Notice has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_notice')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteNotice($id)
    {
        try{

            $notice = Notice::find($id);

            if($notice->file_url)
            {
                $delete_path = public_path($notice->file_url);
                $delete = unlink($delete_path);
            }

            if($notice->delete())
            {
                return redirect()
                    ->route('admin_notice')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Notice has been deleted successfully.')
                    ->with('swt.type', 'success');
                
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_notice')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }
}
