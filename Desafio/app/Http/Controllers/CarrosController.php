<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index()
    {
        $list_carros = Carro::all();
        return view('Carros.index',[
            'Carros' => $list_carros
            ]);
    }
    public function  novoCar()
    {
        return view('Carros.Create');
    }
    public function store(Request $request)
    {
        Carro::create($request->all());
        if ($request->has('status')) {

        }
        return redirect("/carros")->with("message", "Carro adicionado com sucesso!");
    }
    public function editarCar($id)
    {
        $Carros = Carro::findOrFail($id);
        return view('Carros.edit', ['Carro' => $Carros]);
    }
    public function update(Request $request, $id)
    {
        $Carros = Carro::findOrFail($id);

        $Carros->update([
            'modelo' => $request->modelo,
            'marca' => $request->marca,
            'tipo' => $request->tipo,
            'status' => $request->status,
        ]);
        return redirect("/carros")->with("message", "VRUM VRUM editado com sucesso!");
    }
    public function delete($id)
    {
        $Carros = Carro::findOrFail($id);
        return view('Carros.delete', ['Carro' => $Carros]);
    }
    public  function  destroy($id)
    {
        $Carros = Carro::findOrFail($id);
        $Carros ->delete();

        return redirect("/carros")->with("message", "VRUM VRUM excluido com sucesso!");
    }
}
