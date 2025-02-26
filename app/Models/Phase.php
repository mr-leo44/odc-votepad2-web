<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Phase extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom",
        "description",
        "statut",
        "duree",
        "slug",
        "date_debut",
        "date_fin",
        "evenement_id",
        "type"
    ];

    public function evenement():BelongsTo
    {
        return $this->belongsTo(Evenement::class,"evenement_id");
    }
    public function questions():HasMany
    {
        return $this->hasMany(Question::class);
    }
    public function intervenants(): BelongsToMany
    {
        return $this->belongsToMany(Intervenant::class, 'intervenant_phases');
    }

    public function criteres(): BelongsToMany
    {
        return $this->belongsToMany(Critere::class, 'phase_criteres');
    }

    public function juries():BelongsToMany
    {
        return $this->BelongsToMany(Jury::class, 'jury_phases');
    }
}
