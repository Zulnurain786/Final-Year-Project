<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supervisersession extends Model
{
    use HasFactory;
    
    public function superviser()
    {
        return $this->belongsTo(Superviser::class, 'superviserid');
    }
}
