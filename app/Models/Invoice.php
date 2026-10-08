<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table= 'invoices';
    protected $fillable = [
    'invoice_no','booking_id','user_id','event_id','amount','status'
];

public function user(){
    return $this->belongsTo(User::class);
}

public function event(){
    return $this->belongsTo(EventModels::class);
}
}
