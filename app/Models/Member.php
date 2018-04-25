<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function designation()
    {
        return $this->belongsTo('App\Models\Designation', 'designation_id');
    }
}
