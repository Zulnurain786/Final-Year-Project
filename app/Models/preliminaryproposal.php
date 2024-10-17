<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preliminaryproposal extends Model
{
    use HasFactory;
    public function supervisor()
    {
        return $this->belongsTo(superviser::class, 'superviserid');
    }
    public function studentgroup()
    {
        return $this->belongsTo(studentgroups::class,'groupid');
    }
    // public function studentGroup()
    // {
    //     return $this->belongsTo('App\StudentGroup', 'group_id');
    // }

    // public function supervisor()
    // {
    //     return $this->belongsTo('App\Supervisor', 'supervisor_id');
    // }
}
