<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depts extends Model
{
    use HasFactory;
    protected $table = 'depts'; // Specify the table name if it doesn't follow Laravel's naming convention

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'salary'
    ]; // Specify the fillable fields for mass assignment
}
