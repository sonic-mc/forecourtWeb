<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['accountType', 'accountStatus', 'credit', 'debit', 'registered_user_id'];

    public function registeredUser()
{
    return $this->belongsTo(RegisteredUser::class);
}

}
