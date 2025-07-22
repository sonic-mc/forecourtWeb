<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'api_user_name',
        'api_user_email',
    ];
}
