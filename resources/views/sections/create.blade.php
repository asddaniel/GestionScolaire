@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">Ajout d'une section</div>
        <form action="{{ route('sections.store') }}" method="POST" class="px-2">
            @csrf
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">Nom de la section</label>
                <input type="text" name="name" class="rounded border-2 outline-0">
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
                      <th scope="col" class="px-6 py-4">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($sections as $cle=>$section)
                    <tr
                    class="border-b bg-neutral-100 border-neutral-200 hover:bg-neutral-300">
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cle }}</td>

                    <td class="whitespace-nowrap px-6 py-4">{{ $section->name }}</td>
                    <td class="flex gap-2 align-center py-4">
                      <a href="{{ route('sections.show',$section->id) }}" class="px-4 py-2 text-white font-bold bg-slate-600 rounded-md">Modifier</a>
                      <form action="{{ route('sections.destroy',$section->id) }}" method="POST">
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