<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'addmission_no',
        'addmission_date',
        'birth_date',
        'gender',
        'image',
        'permanent_address',
        'current_address',
        'document',
        'scholaring_type',
        'njia_id',
        'vehicle_id',
        'dom_id',
        'room_id',
        'darasa_id',
        'stream_id',
        'user_id',
        'parent_id',
        'level_id',
        'year_id',
        'flug',
       
    ];

    public function level()
    {
        return $this->belongsTo(Level::class,'level_id','id');
    }
}
