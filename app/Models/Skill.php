<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kategori',
        'judul',
        'deskripsi',
        'harga',
        'rating',
    ];


    // Relasi ke User (Satu Skill dimiliki satu User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // Relasi ke Order (Satu Skill bisa ada di banyak Order)
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
