@extends('template.app')

@section('content')
    <div class="container" style="align-items: center; display: flex; flex-direction: column; margin-top: 3rem;">
        <div style="margin-top: 5px; text-align: center;" class="col-md-12">
            <h3>Cadastrar Carros</h3>
        </div>
        <div class="col-md-20 well">
            <form action="{{route('salvar_carro')}}" method="post">
                {{ csrf_field() }}
                <div class="from-group">
                    <label for="modelo" class="Control-label" style="margin-top: 1rem">
                        <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                    </label>
                </div>
                <div class="from-group" style="margin-top: 1rem">
                    <label for="marca" class="Control-label">
                        <input type="text" name="marca" class="form-control" placeholder="Marca">
                    </label>
                </div>
                <select class="form-select" name="tipo" style="width: 69%;margin-top: 1rem;">
                    <option value="SUV">SUV</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Hatch">Hatch</option>
                </select>
                <div class="btn-group-toggle" data-toggle="buttons" style="margin-top: 1rem">
                    <label class="btn btn-secondary active" style="margin-right: 1rem">
                        <input type="radio" name="status" id="option1" value="1" autocomplete="on" checked> Disponivel
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="status" id="option1" value="0" autocomplete="off"> Alugado
                    </label>

                    <button class="btn btn-primary" type="submit" style="margin-left: 1rem">Salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
