<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explorer extends Model
{
    use HasFactory;

     protected $table = 'explorers';

      protected $fillable = [
        'name',
        'idade',
        'latitude',
        'longitude',
    ];

    public function inventory()
{
    return $this->hasMany(Inventory::class);
}

public function tradesSent()
{
    return $this->hasMany(Trade::class, 'from_explorer_id');
}

public function tradesReceived()
{
    return $this->hasMany(Trade::class, 'to_explorer_id');
}
public function itemsFound()
{
    return $this->hasMany(Item::class);
}

}
