<?php

namespace App\Models;

use App\AppointmentStatus;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'buyer_id',
        'seller_id',
        'appointment_date',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'appointment_date' => 'datetime',
            'status' => AppointmentStatus::class
        ];
    }
}
