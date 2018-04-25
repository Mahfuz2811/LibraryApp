<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $forms = Form::all();
        return view('admin.form.index', compact('user', 'forms'));

    }

    public function addForm()
    {
        return view('admin.form.add_form');
    }

    public function postForm(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'file'  => 'required',
        ]);

        try{

            $form = new Form;

            if($request->hasFile('file'))
            {
                $file = $request->file('file');
                //return $file;

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/form',$new_file_name);

                if($success)
                {
                    $form->file_url = 'uploads/form/'.$new_file_name;
                    $form->file_name = $new_file_name;
                }
            }

            $data = $request->all();

            $form->title       = $data['title'];

            if($form->save())
            {
                return redirect()
                    ->route('admin_form')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Form has been uploaded successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_form')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editForm($id)
    {

        $user = Auth::user();

        $form = Form::find($id);
        return view('admin.form.edit_form',compact('form','id', 'user'));

    }

    public function postEditForm(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        try{

            $form = Form::find($id);


            if($request->hasFile('file'))
            {
                if($form->file_url)
                {
                    $delete_path = public_path($form->file_url);
                    $delete = unlink($delete_path);
                }

                $file = $request->file('file');

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/form',$new_file_name);

                if($success)
                {
                    $form->file_url = 'uploads/form/'.$new_file_name;
                    $form->file_name = $new_file_name;
                }


            }

            $data = $request->all();

            $form->title       = $data['title'];

            if($form->update())
            {
                return redirect()
                    ->route('admin_form')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Form has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_form')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteForm($id)
    {
        try{

            $form = Form::find($id);

            if($form->file_url)
            {
                $delete_path = public_path($form->file_url);
                $delete = unlink($delete_path);
            }

            if($form->delete())
            {
                return redirect()
                    ->route('admin_form')
                    ->with('swt.title', 'Danger!')
                    ->with('swt.text', 'Something went to wrong.')
                    ->with('swt.type', 'error');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_form')
                ->with('swt.title', 'Success!')
                ->with('swt.text', 'Form has been deleted successfully.')
                ->with('swt.type', 'success');
        }
    }
}
