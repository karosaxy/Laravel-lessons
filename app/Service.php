<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //creeate a model and put as a string every column on your dB you want fillable ...
    protected $fillable = ['name'];
}
