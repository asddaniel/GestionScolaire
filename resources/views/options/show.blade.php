@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">modifier l'option {{ $option->name }}</div>
        <form action="{{ route('options.update', $option->id) }}" method="POST" class="px-2">
            @method('PUT')
            @csrf
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">Nom de l'option</label>
                <input type="text" name="name" value="{{ $option->name }}" class="rounded border-2 outline-0">
            </div>
            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de la section</label>
                <select name="section_id" id="" class="p-2 border-2 outline-0">
                    @foreach (App\Models\Section::all() as $section)
                        <option value="{{ $section->id }}" {{ $option->section_id == $section->id ? 'selected' : '' }}>{{ $section->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="pt-3 pb-2">
                   <button class="rounded p-2 px-3 text-white bg-blue-600 font-bold">modifier</button>
            </div>
        </form>

    </div>

</div>
@endsection