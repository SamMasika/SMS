<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'flug',
        'dom_id'
       
    ];

    public function domitory()
    {
        return $this->belongsTo(Domitory::class,'dom_id','id');
    }
}
