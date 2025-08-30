<?php


namespace App\Models;


use App\Models\Exchange;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Review extends Model
{
   protected $fillable = ['order_id', 'rating', 'komen'];
    // Relasi ke Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
