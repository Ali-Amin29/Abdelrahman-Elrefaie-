<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComplain extends Model
{
    // payemnt
    use HasFactory;
    public $table = 'users_complain';
    protected $fillable = ['name', 'email', 'description', 'response','is_active','subject'];
    // protected $attributes = [ 'your_text_field' => '' ];
}
