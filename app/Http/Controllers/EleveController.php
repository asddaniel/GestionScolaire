<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use App\Http\Resources\TemplateResource;

class EleveController extends StandardController
{
    protected string $model = 'App\Models\Eleve';
    protected $validator_classes = [
        "App\Http\Requests\StoreEleveRequest",
        "App\Http\Requests\UpdateEleveRequest"
    ];
}
