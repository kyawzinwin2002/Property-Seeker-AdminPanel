<?php

namespace App\Models;

use App\PropertyStatus;
use App\PropertyType;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'address',
        'city',
        'district',
        'description',
        'price',
        'type',
        'bedrooms',
        'status',
        'date_first_offered_for_sale',
        'representative_id'
    ];

    protected function cast(): array
    {
        return [
            'date_first_offered_for_sale' => 'datetime',
            'type' => PropertyType::class,
            'status' => PropertyStatus::class,
        ];
    }
}
