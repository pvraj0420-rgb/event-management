<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speaker extends Model
{
    use HasFactory;

    protected $table='speakers';
    
    protected $fillable=[
        'name',
        'designation',
        'description',
        'image',
        'email',
        'phone',
        'fax',
        'experience',
        'skill1_name',
        'skill1_percent',
        'skill2_name',
        'skill2_percent',
        'skill3_name',
        'skill3_percent',

    ];
}
