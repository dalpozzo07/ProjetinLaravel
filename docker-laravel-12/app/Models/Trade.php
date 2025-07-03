<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'from_explorer_id',
        'to_explorer_id',
        'status',
    ];

    public function fromExplorer()
{
    return $this->belongsTo(Explorer::class, 'from_explorer_id');
}

public function toExplorer()
{
    return $this->belongsTo(Explorer::class, 'to_explorer_id');
}

public function items()
{
    return $this->hasMany(TradeItem::class);
}

}
