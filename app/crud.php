<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class crud extends Model
{
     use SoftDeletes; 
 protected $crud = ['deleted_at']; 
}

