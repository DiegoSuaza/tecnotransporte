<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';    
    protected $fillable = ['name','email','logo'];
    public $timestamps = true;
}
