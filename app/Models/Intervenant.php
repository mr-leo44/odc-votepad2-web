<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Intervenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'noms',
        'telephone',
        'genre',
        'image',
        'groupe_id'
    ];
    public function phases(): BelongsToMany
    {
        return $this->belongsToMany(Phase::class, 'intervenant_phases');
    }
    public function intervenantPhases(): HasMany
    {
        return $this->hasMany(IntervenantPhase::class);
    }
    
    public function reponse(){
        return $this->hasMany(Reponse::class);
    }
}
