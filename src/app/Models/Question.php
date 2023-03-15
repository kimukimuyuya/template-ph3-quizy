<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Choice;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'update_at'];
    public function choices()
    {
        # code...
        // $questions = Question::all();
        // $choices = Choice::all();
        return $this->hasMany(Choice::class);
    }
}
