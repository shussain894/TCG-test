<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Defines the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'organisation',
        'date_of_birth'
    ];
}
