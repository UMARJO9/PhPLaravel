<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCity extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'age', 'is_active'];
}
