<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    //
     //Table Name
     protected $table = 'fixtures';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = false;
}
