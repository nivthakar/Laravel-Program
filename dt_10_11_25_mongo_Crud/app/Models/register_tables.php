<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class register_tables extends Model
{
    //
    protected $collection = 'register_tables';
  
    protected $connection = 'mongodb';

    protected $fillable = [
        'studname',
        'studemail',
        'studcity',
        'studcontact'
    ];
   
}
