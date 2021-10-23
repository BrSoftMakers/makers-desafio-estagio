@extends('templates.template')
@section('content')
<br>
@if(isset($carro))
    <form action="{{route('atualizar_carro', $carro->id)}}" method="POST">
    @method('PUT')
@else
    <form action="{{route('registrar_carro')}}" method="POST">
@endif
        @csrf
@if(isset($carro))
        <input class="form-control" type="text" name="modelo" placeholder="modelo" value="{{$carro->modelo}}" required><br>
        <input class="form-control" type="text" name="marca" placeholder="marca" value="{{$carro->marca}}" required><br>
        <input class="form-control" type="text" name="tipo" placeholder="tipo" value="{{$carro->tipo}}" required><br>
        <div class="form-group">
                <label for="description"> Status</label><br/>
                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($carro->status) && $carro->status == '1') ? "checked" : "" }}}> Disponivel</label>
                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($carro->status) && $carro->status == '0') ? "checked" : "" }}}> Alugado</label>
            </div>
        @else
        <input class="form-control" type="text" name="modelo" placeholder="modelo" required><br>
        <input class="form-control" type="text" name="marca" placeholder="marca" required><br>
        <input class="form-control" type="text" name="tipo" placeholder="tipo" required><br>
        <div class="form-group">
                <label for="description"> Status</label><br/>
                <label class="radio-inline"><input type="radio" name="status" value="1" {{{ (isset($carro->status) && $carro->status == '1') ? "checked" : "" }}}> Disponivel</label>
                <label class="radio-inline"><input type="radio" name="status" value="0" {{{ (isset($carro->status) && $carro->status == '0') ? "checked" : "" }}}> Alugado</label>
            </div>
@endif
        
@if(isset($carro))
        <input name="id" value="{{$carro->id}}"  hidden/>
@endif
        <button>enviar</button>
    </form>
@endsection