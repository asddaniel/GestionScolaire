@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">modification du paiement</div>
        <form action="{{ route('paiements.update', $paiement->id) }}" method="POST" class="px-2">
            @csrf
           @method('PUT')


            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de l'eleve'</label>
                <select name="eleve_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une eleve</option>
                    @foreach (App\Models\Eleve::all() as $eleve)
                        <option value="{{ $eleve->id }}" {{ $paiement->eleve_id==$eleve->id?'selected':'' }}>{{ $eleve->name }}( {{ $eleve->promotion->name }})</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix du frais</label>
                <select name="frais_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une frais</option>
                    @foreach (App\Models\Frais::all() as $frais)
                        <option value="{{ $frais->id }}"  {{ $paiement->frais_id == $frais->id?'selected':'' }}>{{ $frais->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="pt-3 pb-2">
                   <button class="rounded p-2 px-3 text-white bg-blue-600 font-bold">enregistrer</button>
            </div>
        </form>

    </div>

</div>
@endsection