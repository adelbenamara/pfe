<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competence extends Model
{
    public function profile(){
        $this->belongsTo("App/Models/profile");
    }

    use HasFactory;
}
