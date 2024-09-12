{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Titolo</h1>
    <img src="{{ Vite::asset('resources/img/colibri.jpg') }}" alt="" class="img-fluid">
    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis eius ab, iure, expedita velit beatae, accusantium officiis omnis magnam fuga quod quae nesciunt culpa voluptates sapiente. Adipisci repellendus perferendis nisi.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
