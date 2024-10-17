<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentsrecords extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'session',
        'department',
        'regno',
        'pnumber',
        'pmo_id',
        // Add other columns that are fillable here
    ];
    
}
