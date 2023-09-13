<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePromotionRequest;
use Illuminate\Http\Request;



class PromotionController extends StandardController
{
    protected string $model = 'App\Models\Promotion';
    protected $validator_classes = [
        "App\Http\Requests\StorePromotionRequest",
        "App\Http\Requests\UpdatePromotionRequest"
    ];

    
}
