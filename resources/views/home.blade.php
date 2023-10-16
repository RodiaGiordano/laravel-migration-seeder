@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    @foreach ($trains as $train)
      <h1>
        @if ($train->data_di_partenza == '2023-10-16')

        <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Azienda: {{$train->azienda}}</li>
            <li class="list-group-item">Stazione arrivo: {{$train->stazione_di_arrivo}}</li>
            <li class="list-group-item">Stazione partenza:{{$train->stazione_di_partenza}}</li>
            <li class="list-group-item">Orario partenza: {{$train->orario_di_partenza}}</li>
            <li class="list-group-item">Orario arrivo: {{$train->orario_di_arrivo}}</li>
          </ul>
        </div>
       
            
        @endif
      </h1>
        
    @endforeach
  </section>
@endsection
