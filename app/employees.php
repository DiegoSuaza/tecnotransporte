<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    protected $table = 'employees';    
    protected $fillable = ['name','last_name','id_companies','email','phone'];
    public $timestamps = true;
}
