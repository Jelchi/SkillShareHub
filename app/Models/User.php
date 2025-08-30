<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'jenis_kelamin',
        'tanggal_lahir',
        'negara',
        'poin',
        'profil',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    // Relationship
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class)->latest();
    }

    // Relasi ke Achievement (Many to Many)
    public function achievements(): BelongsToMany
    {
        // Tambahkan withPivot untuk mengambil kolom earned_at
        return $this->belongsToMany(Achievement::class)
            ->withPivot('earned_at')
            ->withTimestamps();
    }


    public function purchases(): HasMany
    {
        return $this->hasMany(Order::class, 'pembeli_id');
    }

    public function sales(): HasMany
    {
        return $this->hasMany(Order::class, 'penjual_id');
    }
}
