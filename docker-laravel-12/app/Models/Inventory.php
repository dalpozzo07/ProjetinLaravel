<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'itens';

      protected $fillable = [
    
        'explorer_id',
        'item_id',
    ];
     public function explorer()
{
    return $this->belongsTo(Explorer::class);
}

public function item()
{
    return $this->belongsTo(Item::class);
}

    
}
