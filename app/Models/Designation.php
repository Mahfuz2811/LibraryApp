<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function members()
    {
        return $this->hasMany('App\Models\Member', 'designation_id');
    }
}
