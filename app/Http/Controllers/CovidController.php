<?php

namespace App\Http\Controllers;

use App\Covid;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index(Request $request) 
    {
        $covid = new Covid();
        $covids = $covid::all();
        return view('covids.index', compact('covids'));
    }

    public function store(Request $request)
    {
        $covid = new Covid();
        $covid->nome = $request->get('nome');
        $covid->cpf = $request->get('cpf');
        $covid->observacao = $request->get('observacao');
        $covid->save();
        return redirect()->action('CovidController@index');
    }

    public function create()
    {   
        return view('covids.create');
    }

    public function show()
    {

    }

    public function update($id, Request $request)
    {
        $covid = Covid::find($id);
        $covid->nome = $request->get('nome');
        $covid->cpf = $request->get('cpf');
        $covid->observacao = $request->get('observacao');
        $covid->save();
        echo "cheguei aqui";
        return redirect()->action('CovidController@index');
    }

    public function destroy($id)
    {
        Covid::destroy($id);
        return redirect()->action('CovidController@index');
    }

    public function edit($id)
    {
        $covids = Covid::find($id);
        return view('covids.edit', compact('covids'));
    }

}
