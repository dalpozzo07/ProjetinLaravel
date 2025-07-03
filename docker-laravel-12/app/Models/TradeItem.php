<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradeItem extends Model
{

    protected $table = 'trade_items';

    protected $fillable = ['trade_id',
     'item_id',
      'offered_by',
    ];

    public function trade()
{
    return $this->belongsTo(Trade::class);
}

public function item()
{
    return $this->belongsTo(Item::class);
}

}
