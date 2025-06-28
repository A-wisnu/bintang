<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_console';

    protected $fillable = [
        'name',
        'type',
        'description',
        'daily_rate',
        'weekly_rate',
        'monthly_rate',
        'stock',
        'image'
    ];

    public function games()
    {
        return $this->hasMany(Game::class, 'id_console');
    }

    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class, 'id_console');
    }

    public function detailSewa()
    {
        return $this->hasMany(DetailSewa::class, 'id_console');
    }
} 