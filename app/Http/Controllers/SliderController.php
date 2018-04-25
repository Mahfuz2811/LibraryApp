<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders', 'user'));

    }

    public function addSlider()
    {
        return view('admin.slider.add_slider');
    }


    public function postSlider(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'file'  => 'required|image',
            'file2' => 'required|image'
        ]);

        try{

            $slider = new Slider;

            if($request->hasFile('file'))
            {
                $file = $request->file('file');
                //return $file;

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $new_file_name = str_replace(' ', '_', $new_file_name);

                $success = $file->move('uploads/slider',$new_file_name);

                if($success)
                {
                    $slider->photo_url = 'uploads/slider/'.$new_file_name;
                }
            }

            if($request->hasFile('file2'))
            {
                $file = $request->file('file2');
                //return $file;

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $new_file_name = str_replace(' ', '_', $new_file_name);

                $success = $file->move('uploads/slider',$new_file_name);

                if($success)
                {
                    $slider->background_url = 'uploads/slider/'.$new_file_name;
                }
            }

            $data = $request->all();

            $slider->title       = $data['title'];

            if($slider->save())
            {
                return redirect()
                    ->route('admin_slider')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Slider has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_slider')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editSlider($id)
    {

        $user = Auth::user();

        $slider_id = $id;
        $slider = Slider::find($id);
        return view('admin.slider.edit_slider', compact('slider', 'slider_id', 'user'));

    }

    public function postEditSlider(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'file' => 'required|image',
        ]);

        try{

            $slider = Slider::find($id);
            $user_id = $slider['created_by'];

            if($request->hasFile('file'))
            {
                if($slider->photo_url)
                {
                    $delete_path = public_path($slider->photo_url);
                    $delete = unlink($delete_path);
                }

                $file = $request->file('file');

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/slider',$new_file_name);

                if($success)
                {
                    $slider->photo_url = 'uploads/slider/'.$new_file_name;
                }
            }

            $data = $request->all();

            $slider->title       = $data['title'];

            if($slider->save())
            {
                return redirect()
                    ->route('admin_slider')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Slider has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_slider')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteSlider($id)
    {
        try{

            $slider = Slider::find($id);

            if($slider->photo_url)
            {
                $delete_path = public_path($slider->photo_url);
                $delete = unlink($delete_path);
            }

            if($slider->background_url)
            {
                $delete_path = public_path($slider->background_url);
                $delete = unlink($delete_path);
            }

            if($slider->delete())
            {
                return redirect()
                    ->route('admin_slider')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Slider has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_slider')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }
}
