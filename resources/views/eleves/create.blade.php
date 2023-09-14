@extends('layouts.header')

@section('content')
<div class="p-3">
    <form method="POST"  action="{{ route('eleves.store') }}" class="bg-white p-2 flex flex-col rounded-md shadow-xl">
        @csrf
        <div class="text-xl font-bold pb-3">Ajout d'un Eleve </div>
        <div class="flex flex-col align-start">
            <label htmlFor="" class="text-start font-bold  pb-2 pt-3">Nom de l'eleve</label>
            <input type="text" name="name" placeholder="ex: John doe" class="border-2 p-2 rounded" />
         </div>
         <div class="flex flex-col pt-2 pb-2">
            <label for="" class=" pb-2 text-sm uppercase">choix de la classe</label>
            <select name="promotion_id" id="" class="p-2 border-2 outline-0 rounded">

                @foreach (App\Models\Promotion::all() as $promotion)
                    <option value="{{ $promotion->id }}" >{{ $promotion->name }}</option>
                @endforeach
            </select>
        </div>


         <div class="pt-3 pb-3">
            <button class="p-2 rounded bg-blue-600 text-white">Enregistrer</button>
         </div>
        </form>

    <div class="pt-3 pb-2">
        <div class="bg-white p-2 rounded shadow-md">
            <div>
                <div class="flex flex-col">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                  <thead
                    class="border-b bg-white font-medium border-neutral-500 ">
                    <tr>
                      <th scope="col" class="px-6 py-4">#</th>

                      <th scope="col" class="px-6 py-4">name</th>
                      <th scope="col" class="px-6 py-4">classe</th>
                      <th scope="col" class="px-6 py-4">section</th>
                      <th scope="col" class="px-6 py-4">option</th>
                      <th scope="col" class="px-6 py-4">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($eleves as $cle=>$eleve)
                    <tr
                    class="border-b bg-neutral-100 border-neutral-200 hover:bg-neutral-300">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cle }}</td>

                    <td class="whitespace-nowrap px-6 py-4">{{ $eleve->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $eleve->promotion->name??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $eleve->promotion->section->name??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $eleve->promotion->option->name??'' }}</td>
                    <td class="flex gap-2 align-center py-4">
                      <a href="{{ route('eleves.show',$eleve->id) }}" class="px-4 py-2 text-white font-bold bg-slate-600 rounded-md">Modifier</a>
                      <form action="{{ route('eleves.destroy',$eleve->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 text-white bg-red-600 font-bold rounded-md">Supprimer</button>
                      </form>
                  </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
            </div>
        </div>
    </div>
</div>

@endsection
