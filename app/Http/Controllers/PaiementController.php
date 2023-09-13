<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use App\Http\Requests\StorePaiementRequest;
use App\Http\Requests\UpdatePaiementRequest;

class PaiementController extends StandardController
{
    protected string $model = 'App\Models\Paiement';
    protected $validator_classes = [
        'App\Http\Requests\StorePaiementRequest',
        'App\Http\Requests\UpdatePaiementRequest'
        ];

}
