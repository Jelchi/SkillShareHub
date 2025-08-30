<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Achievement extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'ikon'];


    public function users(): BelongsToMany
    {
        // Tambahkan juga di relasi sebaliknya
        return $this->belongsToMany(User::class)
            ->withPivot('earned_at')
            ->withTimestamps();
    }
}
