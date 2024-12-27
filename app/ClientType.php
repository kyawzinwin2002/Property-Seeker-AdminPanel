<?php

namespace App;

enum ClientType: string
{
    case Buyer = 'buyer';
    case Seller = 'seller';

    public function label(): string
    {
        return match ($this) {
            self::Buyer => 'Buyer',
            self::Seller => 'Seller'
        };
    }

    public static function getValues(): array
    {
        return [
            self::Buyer,
            self::Seller
        ];
    }
}
