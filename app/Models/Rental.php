<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rental_date',
        'return_date',
        'total_price',
        'status'
    ];

    protected $casts = [
        'rental_date' => 'datetime',
        'return_date' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class);
    }
} 