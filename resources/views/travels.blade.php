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
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ( $trains as $train )
                <tr>
                    @if($train->date >= Carbon\Carbon::now()->format('Y-m-d'))
                        <td>{{$train -> id}}</td>
                        <td>{{$train -> code}}</td>
                        <td>{{$train -> departure_station}}</td>
                        <td>{{$train -> arrival_station}}</td>
                        <td>{{($train -> date)->format('d-m-Y')}}</td>
                        <td>{{($train->departure_time)->format('H:i')}}</td>
                        <td>{{$train -> on_time}}</td>
                    @endif
                </tr>
            @endforeach --}}

        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    trains
@endsection
