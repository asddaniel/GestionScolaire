@extends('layouts.header')

@section('content')
<div class="grid lg:grid-cols-3 gap-2 px-3 pt-3">
    @php
    $eleves  = App\Models\Eleve::all()->count();
    $frais = App\Models\Frais::all()->count();
    $paiements = App\Models\Paiement::all()->count();
    $promotions = App\Models\Promotion::all()->count();
    $sections = App\Models\Section::all()->count();
    $options = App\Models\Option::all()->count();
    @endphp

    <x-card name="eleves" :quantite="$eleves" url="{{ route('eleves.index') }}"></x-card>
    <x-card name="frais" :quantite="$frais" url="{{ route('fraiss.index') }}"></x-card>
    <x-card name="promotions" :quantite="$eleves" url="{{ route('promotions.index') }}"></x-card>
    <x-card name="sections" :quantite="$sections" url="{{ route('sections.index') }}"></x-card>
    <x-card name="options" :quantite="$options" url="{{ route('options.index') }}"></x-card>

</div>

@endsection