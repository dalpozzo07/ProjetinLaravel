<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'items';

      protected $fillable = [
    
        'explorer_id',
        'items_id',
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
