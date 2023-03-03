<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'flug',
        'njia_id'
       
    ];

    public function njia()
    {
        return $this->belongsTo(Njia::class,'njia_id','id');
    }
}
