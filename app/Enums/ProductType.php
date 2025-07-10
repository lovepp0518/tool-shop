<?php

namespace App\Enums;

enum ProductType: int
{
    case LIFETIME = 1; // 永久卡
    case MONTHLY = 2; // 月卡

    public function validDays(): ?int
    {
        return match ($this) {
            self::LIFETIME => null, // 無期限
            self::MONTHLY => 30,
        };
    }
}
