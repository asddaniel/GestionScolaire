@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">Ajout d'un frais</div>
        <form action="{{ route('fraiss.store') }}" method="POST" class="px-2">
            @csrf
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">Nom du frais</label>
                <input type="text" name="name" class="rounded border-2 outline-0" required>
            </div>
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">montant</label>
                <input type="number" name="montant" class="rounded border-2 outline-0 " required>
            </div>

            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de la section</label>
                <select name="section_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une section</option>
                    @foreach (App\Models\Section::all() as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de l'option</label>
                <select name="option_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une option</option>
                    @foreach (App\Models\Option::all() as $option)
                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-3 pb-3">
                <label for="" class="pt-2 pb-2 px-2">frais cible</label>
                <input type="checkbox" name="cible" class="border p-2">
            </div>
            <div class="pt-3 pb-2">
                   <button class="rounded p-2 px-3 text-white bg-blue-600 font-bold">Ajouter</button>
            </div>
        </form>

    </div>
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
                      <th scope="col" class="px-6 py-4">section</th>
                      <th scope="col" class="px-6 py-4">option</th>
                      <th scope="col" class="px-6 py-4">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($fraiss as $cle=>$frais)
                    <tr
                    class="border-b bg-neutral-100 border-neutral-200 hover:bg-neutral-300">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cle }}</td>

                    <td class="whitespace-nowrap px-6 py-4">{{ $frais->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $frais->section->name??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $frais->option->name??'' }}</td>
                    <td class="flex gap-2 align-center py-4">
                      <a href="{{ route('fraiss.show',$frais->id) }}" class="px-4 py-2 text-white font-bold bg-slate-600 rounded-md">Modifier</a>
                      <form action="{{ route('fraiss.destroy',$frais->id) }}" method="POST">
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