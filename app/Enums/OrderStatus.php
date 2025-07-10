<?php

namespace App\Enums;

enum OrderStatus: int
{
    case PENDING = 1; // 待處理
    case COMPLETED = 2; // 已完成

    public function label(): string
    {
        return match ($this) {
            self::PENDING => '待處理',
            self::COMPLETED => '已完成',
        };
    }
}
