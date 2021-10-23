@extends('templates.template')
@section('content')
    <hr>
    <div class="text-center mt-3 mb-4">
      <a href="{{url('/criar')}}">
          <button class="btn btn-success">Cadastrar</button>
      </a>
  </div>
    <div class="col-8 m-auto">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col" colspan="2">Ações</th>
          </tr>
        </thead>
        <tbody>
         @foreach($carros as $carro)
         <tr>
            <th scope="row">{{$carro->id}}</th>
            <td>{{$carro->modelo}}</td>
            <td>{{$carro->marca}}</td>
            <td>{{$carro->tipo}}</td>
            <td>{{$carro->status ? 'Disponivel' : 'Alugado'}}</td>
            <td style="width:20px">
              <form action="{{ url('deletar/'.$carro->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
      
                  <button type="submit" class="btn btn-danger">
                      <i class="fa fa-trash"></i> Deletar
                  </button>
                  
              </form>
          </td>
          <td>
            <a href="{{url("$carro->id/editar")}}">
              <button class="btn btn-primary">Editar</button>
          </a>
          <a href="{{url("$carro->id/show")}}">
            <button class="btn btn-info">Visualizar</button>
          </a>
          </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
@endsection