<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $fillable = ['name', 'manufacturer', 'ram', 'processo', 'image'];
}
