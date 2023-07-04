<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{
    use HasFactory;
    public function inscription():HasMany
    {
        return $this->HasMany(Inscription::class);
    }

    public function eleve():HasMany
    {
        return $this->HasMany(Eleve::class);
    }
    
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
}
