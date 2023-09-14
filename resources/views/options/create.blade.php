@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">Ajout d'une option</div>
        <form action="{{ route('options.store') }}" method="POST" class="px-2">
            @csrf
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">Nom de l'option</label>
                <input type="text" name="name" class="rounded border-2 outline-0">
            </div>
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de la section</label>
                <select name="section_id" id="" class="p-2 border-2 outline-0 rounded">
                    @foreach (App\Models\Section::all() as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                    @endforeach
                </select>
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
                       <th scope="col" class="px-6 py-4">action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($options as $cle=>$option)
                    <tr
                    class="border-b bg-neutral-100 border-neutral-200 hover:bg-neutral-300">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cle }}</td>

                    <td class="whitespace-nowrap px-6 py-4">{{ $option->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $option->section->name??'' }}</td>
                    <td class="flex gap-2 align-center py-4">
                      <a href="{{ route('options.show',$option->id) }}" class="px-4 py-2 text-white font-bold bg-slate-600 rounded-md">Modifier</a>
                      <form action="{{ route('options.destroy',$option->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 text-white bg-red-600 font-bold rounded-md">Supprimer</button>
                      </form>
                    </td>
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