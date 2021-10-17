@extends("template.app")

@section("content")
    <form class="container" style="margin-top: 7rem; width: 43%;">
        <div>
            <table class="table container">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                @foreach($Carros as $Carro)
                    <tbody>
                    <Tr>
                        <td>{{$Carro->id}}</td>
                        <td>{{$Carro->modelo}}</td>
                        <td>{{$Carro->marca}}</td>
                        <td>{{$Carro->tipo}}</td>
                        <td>{{$Carro->status}}</td>
                        <td><a href="{{route("edit_car", ['id'=>$Carro->id])}}" class="btn btn-xs btn-primary">Editar</a></td>
                        <td><a href="{{route("delet_car", ['id'=>$Carro->id])}}" class="btn btn-xs btn-primary">Excluir</a></td>
                    </Tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </form>
@endsection
