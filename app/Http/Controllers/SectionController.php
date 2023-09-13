<?php

namespace App\Http\Controllers;



class SectionController extends StandardController
{
    protected string $model = 'App\Models\Section';
    protected $validator_classes = [
        "App\Http\Requests\StoreSectionRequest",
        "App\Http\Requests\UpdateSectionsRequest"
    ];
}
