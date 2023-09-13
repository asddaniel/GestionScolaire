<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'eleve_id', 'frais_id'];

        /**
         * Get all of the eleves for the Paiement
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne the eleve associated with the Paiement
         */
        public function eleve(): HasOne
        {
            return $this->hasOne(Eleve::class, 'id', 'eleve_id');
        }

        /**
         * Get the frais associated with the Paiement
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasOne
         */
        public function frais(): HasOne
        {
            return $this->hasOne(Frais::class, 'id', 'frais_id');
        }
}
