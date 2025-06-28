<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'id_console',
        'id_game',
        'qty',
        'price'
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }

    public function console()
    {
        return $this->belongsTo(Console::class, 'id_console');
    }

    public function game()
    {
        return $this->belongsTo(Game::class, 'id_game');
    }
} 