<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientProperties extends Model
{
    protected $fillable = ['client_id', 'property_id'];
}
