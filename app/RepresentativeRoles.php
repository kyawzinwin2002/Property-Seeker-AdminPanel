<?php

namespace App;

enum RepresentativeRoles: string
{
    case Manager = 'manager';
    case CustomerService = 'customer_service';

    public function label(): string
    {
        return match ($this) {
            self::Manager => 'Manager',
            self::CustomerService => 'Customer Service'
        };
    }
}
