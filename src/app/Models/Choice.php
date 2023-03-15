<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    public function choices()
    {
        # code...
        $choices = Choice::all();
        return $choices;
    }
}

