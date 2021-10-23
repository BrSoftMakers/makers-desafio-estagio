@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        Modelo: {{$carro->modelo}}<br>
        Marca: {{$carro->marca}}<br>
        Tipo: {{$carro->tipo}}<br>
        Status: {{$carro->status ? 'Disponivel' : 'Alugado'}} <br>
    </div>
@endsection