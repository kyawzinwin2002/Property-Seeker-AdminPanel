<?php

namespace App;

enum JobType: string
{
    case FullTime = 'full_time';
    case PartTime = 'part_time';

    public function  label(): string
    {
        return match ($this) {
            self::FullTime => 'Full Time',
            self::PartTime => 'Part Time'
        };
    }

    public static function toArray(): array
    {
        return [
            self::FullTime,
            self::PartTime
        ];
    }
}
