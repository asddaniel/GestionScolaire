<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'option_id',
        'section_id',
        'promotion_id',
        'cible',
        'montant'
    ];
}
