<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class superviser extends Model
{
    use HasFactory;
    public function superviserSessions()
    {
        return $this->hasMany(supervisersession::class, 'superviserid');
    }
    public function preliminaryProposal()
    {
        return $this->hasMany(preliminaryProposal::class, 'superviserid');
    }
}
