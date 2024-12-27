<?php

namespace App;

enum OfferStatus: string
{
    case Pending = 'pending';
    case Accepted = 'accepted';
    case Rejected = 'rejected';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Accepted => 'Accepted',
            self::Rejected => 'Rejected'
        };
    }

    public function getValues(): array
    {
        return [
            self::Pending,
            self::Accepted,
            self::Rejected
        ];
    }
}
