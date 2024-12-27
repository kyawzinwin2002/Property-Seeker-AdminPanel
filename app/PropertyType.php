<?php

namespace App;

enum PropertyType: string
{
    case House = 'house';
    case Bungalow = 'bungalow';
    case Apartment = 'apartment';
    case Condo = 'condo';

    public function label(): string
    {
        return match ($this) {
            self::House => 'House',
            self::Bungalow => 'Bungalow',
            self::Apartment => 'Apartment',
            self::Condo => 'Condo'
        };
    }

    public static function getValues(): array
    {
        return [
            self::House,
            self::Bungalow,
            self::Apartment,
            self::Condo
        ];
    }
}
