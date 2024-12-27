<?php

namespace App;

enum PropertyStatus: string
{
    case Available = 'available';
    case UnderOffer = 'under_offer';
    case OfferAccepted = 'offer_accepted';
    case ContractExchanged = 'contract_exchanged';
    case SoldOut = 'sold_out';

    public function label(): string
    {
        return match ($this) {
            self::Available => 'Available',
            self::UnderOffer => 'Under Offer',
            self::OfferAccepted => 'Offer Accepted',
            self::ContractExchanged => 'Contract Exchanged',
            self::SoldOut => 'Sold Out'
        };
    }

    public function getValues(): array
    {
        return [
            self::Available,
            self::UnderOffer,
            self::OfferAccepted,
            self::ContractExchanged,
            self::SoldOut
        ];
    }
}
