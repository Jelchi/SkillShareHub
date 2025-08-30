<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'penjual_id',
        'pembeli_id',
        'skill_id',
        'status',
    ];


    // Relasi ke User (Pembeli)
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pembeli_id');
    }


    // Relasi ke User (Penjual)
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class, 'penjual_id');
    }


    // Relasi ke Skill
    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class);
    }


    // Relasi ke Review (Satu Order punya satu Review)
    public function review(): HasOne
    {
        return $this->hasOne(Review::class);
    }
}
