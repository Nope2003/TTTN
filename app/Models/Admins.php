<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Admins as Authenticatable;

class Admins extends Model
{
    use HasFactory;

    protected $guard = 'admins';

    protected $fillable = [
        'nameadmins',
        'emailadmins',
        'passwordadmins',
    ];
}
