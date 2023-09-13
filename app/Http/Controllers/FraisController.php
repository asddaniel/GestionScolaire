<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class FraisController extends StandardController
{
    protected string $model = 'App\Models\Frais';
    protected $validator_classes = [
        "App\Http\Requests\StoreFraisRequest",
        "App\Http\Requests\UpdateFraisRequest"
    ];
    public function store(Request $request)
    {

        $this->model::create($request->all());

            return redirect()->route("fraiss.index")->with("success");


    }
    public function update(Request $request, $object)
    {

        $data = $request->all();
        $data['cible'] = $data['cible']=='on'?1:0;
        // dd($data);
        $object->update($data);

            return redirect()->route("fraiss.index")->with("success");


    }
}
