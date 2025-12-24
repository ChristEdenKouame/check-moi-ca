<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Tache extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'deadline',
        'priorite',
        'statut',

        //Clé étrangere de la table users
        'user_id'
    ];

    protected $casts = [
        'deadline' => 'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
