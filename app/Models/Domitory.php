<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domitory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'flug',
       
    ];
}
