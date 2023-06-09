<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'm_rooms';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];

    // roomと予約枠のリレーション
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
