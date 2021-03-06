<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $members = Member::all();
        return view('admin.member.index', compact('members', 'user'));

    }

    public function addMember()
    {
        return view('admin.member.add_member');
    }


    public function postMember(Request $request)
    {
        $this->validate($request, [
            'designation'   => 'required',
            'name'          => 'required',
            'member_type'   => 'required',
        ]);

        try{

            $member = new Member;

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

                $success = $file->move('uploads/member',$new_file_name);

                if($success)
                {
                    $member->photo_url = 'uploads/member/'.$new_file_name;
                }
            }

            $data = $request->all();

            $member->designation    = $data['designation'];
            $member->name           = $data['name'];
            $member->email          = $data['email'];
            $member->phone          = $data['phone'];
            $member->member_type    = $data['member_type'];

            if($member->save())
            {
                return redirect()
                    ->route('admin_member')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Member has been added successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_member')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function editMember($id)
    {

        $user = Auth::user();
        
        $member = Member::find($id);
        return view('admin.member.edit_member', compact('member', 'user'));

    }

    public function postEditMember(Request $request, $id)
    {
        $this->validate($request, [
            'designation'   => 'required',
            'name'          => 'required',
            'member_type'   => 'required',
        ]);

        try{

            $member = Member::find($id);

            if($request->hasFile('file'))
            {
                if($member->photo_url)
                {
                    $delete_path = public_path($member->photo_url);
                    $delete = unlink($delete_path);
                }

                $file = $request->file('file');

                $file_name = $file->getClientOriginalName();
                $without_extention = substr($file_name, 0, strrpos($file_name, "."));
                $file_extention = $file->getClientOriginalExtension();
                $num = rand(1,500);
                $new_file_name = $without_extention.$num.'.'.$file_extention;

                $success = $file->move('uploads/member',$new_file_name);

                if($success)
                {
                    $member->photo_url = 'uploads/member/'.$new_file_name;
                }
            }

            $data = $request->all();

            $member->designation    = $data['designation'];
            $member->name           = $data['name'];
            $member->email          = $data['email'];
            $member->phone          = $data['phone'];
            $member->member_type    = $data['member_type'];

            if($member->save())
            {
                return redirect()
                    ->route('admin_member')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Member has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_member')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }

    public function deleteMember($id)
    {
        try{

            $member = Member::find($id);

            if($member->photo_url)
            {
                $delete_path = public_path($member->photo_url);
                $delete = unlink($delete_path);
            }

            if($member->delete())
            {
                return redirect()
                    ->route('admin_member')
                    ->with('swt.title', 'Success!')
                    ->with('swt.text', 'Member has been updated successfully.')
                    ->with('swt.type', 'success');
            }

        }
        catch (Exception $e)
        {
            return redirect()
                ->route('admin_member')
                ->with('swt.title', 'Danger!')
                ->with('swt.text', 'Something went to wrong.')
                ->with('swt.type', 'error');
        }
    }
}
