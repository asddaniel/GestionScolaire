<?php

namespace App\Http\Controllers;



class OptionController extends StandardController
{
    protected string $model = 'App\Models\Option';
    protected $validator_classes = [
        "App\Http\Requests\StoreOptionRequest",
        "App\Http\Requests\UpdateOptionRequest"
    ];
}
