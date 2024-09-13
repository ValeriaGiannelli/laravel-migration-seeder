{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome Pacchetto</th>
            <th scope="col">Destinazione</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Data di ritorno</th>
            <th scope="col">Durata</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Tipo di viaggio</th>
            <th scope="col">Disponibilità</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $travels as $travel )
                <tr>
                    @if($travel->departure_date >= Carbon\Carbon::now()->format('Y-m-d'))
                        <td>{{$travel -> id}}</td>
                        <td>{{$travel -> package_name}}</td>
                        <td>{{$travel -> destination}}</td>
                        <td>{{($travel -> departure_date)->format('d-m-Y')}}</td>
                        <td>{{($travel -> return_date)->format('d-m-Y')}}</td>
                        <td>{{$travel->duration}}</td>
                        <td>{{$travel -> price}}</td>
                        <td>{{$travel -> trip_type}}</td>
                        <td>{{$travel ->aviable ? 'Sì' : 'No'}}</td>
                    @endif
                </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    trains
@endsection
