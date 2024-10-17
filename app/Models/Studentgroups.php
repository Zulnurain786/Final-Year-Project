<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentgroups extends Model
{
    use HasFactory;
    public function studentsrecords()
    {
        return $this->hasOne(studentsrecords::class, 'regno', 'm1regno');
    }
    public function studentsrecord1()
    {
        return $this->hasOne(studentsrecords::class, 'regno', 'm2regno');
    }
    public function studentsrecord2()
    {
        return $this->hasOne(studentsrecords::class, 'regno', 'm3regno');
    }
    public function PreliminaryProposal()
    {
        return $this->hasOne(preliminaryProposal::class,'groupid');
    }
    public function allgrouplogin()
    {
        return $this->belongsTo(allgroupslogin::class, 'loginid');
    }
    public function studentdoc()
    {
        return $this->hasone(projectdocumentation::class, 'groupid');
    }
    public function submiteditems()
    {
        return $this->hasone(groupsubmiteditems::class, 'groupid');
    }
    
}
