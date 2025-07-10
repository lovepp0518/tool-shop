<?php

namespace App\Models;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price'
    ];

    protected $casts = [
        'type' => ProductType::class,
    ];

    public function serialCards(): HasMany
    {
        return $this->hasMany(SerialCard::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
