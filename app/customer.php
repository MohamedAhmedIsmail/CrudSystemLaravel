<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=['name','email','country','favorite','gender','image'];
}
