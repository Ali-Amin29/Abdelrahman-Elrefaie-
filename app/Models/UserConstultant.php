<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserConstultant extends Model
{

    // payemnt
    use HasFactory;
    public $table = 'users_constultant';
    protected $fillable = ['id', 'name', 'email', 'typeOfConstultant', 'token','price'];
}
