<?php

namespace App\Models;

use App\ClientType;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'is_active',
        'address',
        'type'
    ];

    protected $hidden = [
        'password'
    ];

    protected function cast(): array
    {
        return [
            'password' => 'hashed',
            'is_active' => 'boolean',
            'type' => ClientType::class
        ];
    }
}
