<?php

namespace App\Models;

use App\OfferStatus;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'property_id',
        'buyer_id',
        'offered_price',
        'offered_date',
        'status'
    ];

    protected function cast(): array
    {
        return [
            'status' => OfferStatus::class
        ];
    }
}
