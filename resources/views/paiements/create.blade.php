@extends('layouts.header')
@section('content')
<div class="p-2">
    <div class="bg-white p-2 shadow-xl rounded">
        <div class="px-2 text-xl font-bold">Ajout d'un paiement</div>
        <form action="{{ route('paiements.store') }}" method="POST" class="px-2">
            @csrf



            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix de l'eleve'</label>
                <select name="eleve_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une eleve</option>
                    @foreach (App\Models\Eleve::all() as $eleve)
                        <option value="{{ $eleve->id }}">{{ $eleve->name }}( {{ $eleve->promotion->name }})</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col pt-2 pb-2">
                <label for="" class=" pb-2 text-sm uppercase">choix du frais</label>
                <select name="frais_id" id="" class="p-2 border-2 outline-0 rounded">
                    <option value="">selectionner une frais</option>
                    @foreach (App\Models\Frais::all() as $frais)
                        <option value="{{ $frais->id }}">{{ $frais->name }}</option>
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
            <div class="p-2">
                <form name="filter_form" method="post">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-2">
                        <div class="">
                            <label for="" class="px-2 p-2 text-lg font-bold">Promotion</label>
                            <div>
                                <select name="promotion" id="" class="border-2 p-2 w-full rounded">
                                    @foreach (App\Models\Promotion::all() as $promotion)
                                        <option value="{{ $promotion->id }}" >{{ $promotion->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>
                        <div class="">
                            <label for="" class="px-2 p-2 text-lg font-bold">Frais</label>
                            <div>
                                <select name="frais"  class="border-2 p-2 w-full rounded">
                                    @foreach (App\Models\Frais::all() as $frais)
                                        <option value="{{ $frais->id }}" >{{ $frais->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                        </div>

                    </div>
                    <div class="pt-2 pb-3">
                        <button type="submit" class="rounded p-2 bg-blue-600 text-white font-bold">Filtrer</button>
                    </div>
                </form>
            </div>
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
                      <th scope="col" class="px-6 py-4">montant</th>
                      <th scope="col" class="px-6 py-4">frais</th>
                      <th scope="col" class="px-6 py-4">date</th>
                      <th scope="col" class="px-6 py-4">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($paiements as $cle=>$paiement)
                    <tr
                    class="border-b bg-neutral-100 border-neutral-200 hover:bg-neutral-300 paiement-row" frais_id="{{ $paiement->frais->id }}" promotion_id="{{ $paiement->eleve->promotion->id }}" >
                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $cle }}</td>

                    <td class="whitespace-nowrap px-6 py-4">{{ $paiement->eleve->name??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $paiement->frais->montant??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $paiement->frais->name??'' }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $paiement->created_at }}</td>
                    <td class="flex gap-2 align-center py-4">
                      <a href="{{ route('paiements.show',$paiement->id) }}" class="px-4 py-2 text-white font-bold bg-slate-600 rounded-md">Modifier</a>
                      <form action="{{ route('paiements.destroy',$paiement->id) }}" method="POST">
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
<script>
    document.filter_form.addEventListener('submit',(e)=>{
        e.preventDefault();
        const promotion_id = document.filter_form.promotion.value;
        const frais_id = document.filter_form.frais.value;
        const paiement_rows = document.querySelectorAll('.paiement-row');
        paiement_rows.forEach(row => {
            if(row.getAttribute('promotion_id') != promotion_id || row.getAttribute('frais_id') != frais_id){
                row.style.display = 'none';
                }else{
                    row.style.display = 'table-row';
                    }
        });
        console.log(promotion_id);
    });
</script>
@endsection