<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;
class info_tables extends Model
{
    //
   protected $collection = 'info_tables';
  
    protected $connection = 'mongodb';
    protected $fillable = [
        'name',
        'email',
        'city',
        'contact'
    ];
}
