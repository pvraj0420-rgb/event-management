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
        'currency',
        'amount_inr',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'payment_method',
        'payment_status'
    ];

    public function event()
    {
        return $this->belongsTo(EventModels::class, 'event_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'booking_id');
    }
}
