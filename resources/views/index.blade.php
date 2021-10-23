@extends('templates.template')
@section('content')
    <hr>
        <h1 class="text-center"> <img src="assets/Imagens/Logo.jpg" alt="some text" width="1200" height="500"></h1>
    <h3 class="text-center">
        <a href='{{url("/lista")}}'>
            <button class="btn btn-danger">Confira nossos modelos</button>
    </h3>
@endsection