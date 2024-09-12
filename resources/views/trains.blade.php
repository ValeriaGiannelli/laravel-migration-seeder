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
            <th scope="col">Treno numero</th>
            <th scope="col">In patenza da</th>
            <th scope="col">Arriva a</th>
            <th scope="col">Delle ore</th>
            <th scope="col">Ritardo</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $trains as $train )
                <tr>
                    <td>{{$train -> id}}</td>
                    <td>{{$train -> code}}</td>
                    <td>{{$train -> departure_station}}</td>
                    <td>{{$train -> arrival_station}}</td>
                    <td>{{$train -> departure_time}}</td>
                    <td>{{$train -> on_time}}</td>
                    <td>{{$train -> cancelled}}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    trains
@endsection
