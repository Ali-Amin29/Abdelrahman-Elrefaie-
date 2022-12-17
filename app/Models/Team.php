<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
 


 protected $fillable=['name','birth','work_qualifications','training_courses','experience','literature','img','title'];
}
