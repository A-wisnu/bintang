<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_game';

    protected $fillable = [
        'title',
        'description',
        'genre',
        'release_year',
        'publisher',
        'daily_rate',
        'image',
        'is_available'
    ];

    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class, 'id_game');
    }
} 