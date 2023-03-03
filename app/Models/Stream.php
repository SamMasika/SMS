<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'flug',
        'darasa_id'
       
    ];

    public function darasa()
    {
        return $this->belongsTo(Darasa::class,'darasa_id','id');
    }
}
