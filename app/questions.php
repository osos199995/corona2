<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    protected $fillable=[
        'question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'true_answer',
    ];
}
