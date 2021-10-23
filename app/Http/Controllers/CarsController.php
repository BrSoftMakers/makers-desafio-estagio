<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Car;

class CarsController extends Controller
{
    public function index() {
        return view('index');
    }
    public function lista() {
        $carros = Car::orderBy('created_at', 'asc')->get();
        return view('carros.lista', ['carros' => $carros]);
    }
    public function create() {
        return view('carros.criar');
    }
    public function store(Request $request) {
        Car::create([
            'modelo' => $request->modelo,
            'marca' => $request->marca,
            'tipo' => $request->tipo,
            'status' => $request->status
        ]);
        return redirect('/lista');
    }
    public function edit($id) {
        $carro = Car::find($id);
        return view('carros.criar', ['carro' => $carro]);
    }

    public function update(Request $request)
{
    Car::where('id', $request->id)->update([
        'modelo'=>$request->modelo,
        'marca'=>$request->marca,
        'tipo'=>$request->tipo,
        'status'=>$request->status,
    ]);
    return redirect('/lista');
}
    public function getStatusAttribute($value){
        return $value ? true : false;
    }

    public function show($id){
        $carro= Car::find($id);
        return view('carros.show', compact('carro'));
    }

}
