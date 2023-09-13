<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'promotion_id',
    ];

    /**
     * Get the promotion associated with the Eleve
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function promotion(): HasOne
    {
        return $this->hasOne(Promotion::class, 'id', 'promotion_id');
    }
}
