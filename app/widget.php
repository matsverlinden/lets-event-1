<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = ['id', 'name', 'user_id', 'status'];
    
}
