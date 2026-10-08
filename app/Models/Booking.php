<?php

namespace App\Models;

use App\Models\EventModels;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'event_id',
        'user_id',
        'username',
        'name',
        'email',
        'mobile',
        'tickets',
        'total_amount',
        'payment_method'
    ];

    public function event()
    {
        return $this->belongsTo(EventModels::class, 'event_id');
    }
}
