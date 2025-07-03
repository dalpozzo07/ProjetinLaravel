<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Item extends Model
{
    use HasFactory;

     protected $table = 'items';

      protected $fillable = [
        'trade_id',
        'name',
        'valor',
        'latitude',
        'longitude',
        'explorer_id',
    ];

    
    public function inventories()
{
    return $this->hasMany(Inventory::class);
}

public function explorer()
{
    return $this->belongsTo(Explorer::class);
}

}
