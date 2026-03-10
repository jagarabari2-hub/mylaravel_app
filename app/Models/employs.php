<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employs extends Model
{

    use HasFactory;

    protected $table = 'employs';

    protected $fillable = [
        'name',
        'depart',
        'phone'
    ];
}
