@extends('template.app')

@section('content')
    <div class="container" style="align-items: center; display: flex; flex-direction: column; margin-top: 3rem;">
        <div style="margin-top: 5px; text-align: center;" class="col-md-12">
            <h3>Excluir Carro</h3>
        </div>
        <div class="col-md-20 well">
            <form action="{{route("delet_car", ['id'=>$Carro->id])}}" method="post">
                {{ csrf_field() }}
                <div class="from-group">
                    <label for="modelo" class="Control-label" style="margin-top: 1rem">
                        <input type="text" name="modelo" class="form-control" value="{{$Carro->modelo}}">
                    </label>
                </div>
                <div class="from-group" style="margin-top: 1rem">
                    <label for="marca" class="Control-label">
                        <input type="text" name="marca" class="form-control" value="{{$Carro->marca}}">
                    </label>
                </div>
                <div style="display: flex; margin-top: 1rem;">
                    <select class="form-select" name="tipo" disabled>
                        <option value="SUV">{{$Carro->tipo}}</option>
                    </select>
                    <button class="btn btn-primary" type="submit" style="margin-left: 1rem">Excluir</button>
                </div>
            </form>
        </div>
    </div>
@endsection
