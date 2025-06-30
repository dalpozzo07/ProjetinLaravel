<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Inventario extends Model
{
    use HasFactory;

     protected $table = 'itens';

      protected $fillable = [
        'name',
        'valor',
        'latitude',
        'longitude',
        'explorer',
    ];

     public function explorer()
    {
        return $this->belongsTo(Explorer::class);
    }
    
}
