<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $casts = [
    	'isDone' => 'boolean',
    ];
    protected $fillable = ['label', 'isDone'];
}
