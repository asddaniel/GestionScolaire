@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">modifier la section {{ $section->name }}</div>
        <form action="{{ route('sections.update', $section->id) }}" method="POST" class="px-2">
            @method('PUT')
            @csrf
            <div class="flex flex-col pt-2 pb-2">
                <label  class=" pb-2 text-sm uppercase">Nom de la section</label>
                <input type="text" name="name" value="{{ $section->name }}" class="rounded border-2 outline-0">
            </div>
            <div class="pt-3 pb-2">
                   <button class="rounded p-2 px-3 text-white bg-blue-600 font-bold">modifier</button>
            </div>
        </form>

    </div>

</div>
@endsection