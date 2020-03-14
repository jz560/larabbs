<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description',
    ];
}
