<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'membership_id',
        'first_name',
        'last_name',
        'parents_name',
        'emergency_contact',
        'birth_date',
        'age',
        'email',
        'address',
        'city',
        'post_code',
        'communication_mode',
    ];
}
