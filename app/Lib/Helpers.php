<?php

namespace App\Lib;

use App\Models\Administration;
use App\Models\Member;

class Helpers
{
    public function getMembers($member_type)
    {
        $members = Member::orderBy('created_at', 'desc')->where('member_type', $member_type)->get();
        return $members;
    }

    public function getAdministrationMembers($member_type)
    {
        $members = Administration::orderBy('created_at', 'desc')->where('member_type', $member_type)->get();
        return $members;
    }
}