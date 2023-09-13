@extends('layouts.header')

@section('content')
<div class="p-3">
    <form method="POST"  action="{{ route('eleves.update', $eleve->id) }}" class="bg-white p-2 flex flex-col rounded-md shadow-xl">
        @csrf
        @method('PUT')
        <div class="text-xl font-bold pb-3">modifier l'Eleve {{ $eleve->name }} </div>
        <div class="flex flex-col align-start">
            <label htmlFor="" class="text-start font-bold  pb-2 pt-3">Nom de l'eleve</label>
            <input type="text" name="name" value="{{ $eleve->name }}" placeholder="ex: John doe" class="border-2 p-2 rounded" />
         </div>
         <div class="flex flex-col pt-2 pb-2">
            <label for="" class=" pb-2 text-sm uppercase">choix de la classe</label>
            <select name="promotion_id" id="" class="p-2 border-2 outline-0 rounded">

                @foreach (App\Models\Promotion::all() as $promotion)
                    <option value="{{ $promotion->id }}" {{ $eleve->promotion_id==$promotion->id?'selected':'' }} >{{ $promotion->name }}</option>
                @endforeach
            </select>
        </div>


         <div class="pt-3 pb-3">
            <button class="p-2 rounded bg-blue-600 text-white">Enregistrer</button>
         </div>
        </form>


</div>

@endsection
