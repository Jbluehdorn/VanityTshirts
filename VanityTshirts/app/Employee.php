<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['firstName', 'lastName', 'picture', 'email', 'motto', 'bio', 'position'];
}
