<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModels extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
    'title',
    'description',
    'category',
    'date',
    'start_time',
    'end_time',
    'location',
    'venue',
    'address',
    'contact',
    'email',
    'speaker_name',
    'image'
];
}
