<?php

namespace App\Models;

use App\JobType;
use App\RepresentativeRoles;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'is_active',
        'job_type',
        'role',
        'branch_id'
    ];

    protected $hidden = [
        'password'
    ];

    protected function cast(): array
    {
        return [
            'password' => 'hashed',
            'is_active' => 'boolean',
            'job_type' => JobType::class,
            'role' => RepresentativeRoles::class
        ];
    }
}
