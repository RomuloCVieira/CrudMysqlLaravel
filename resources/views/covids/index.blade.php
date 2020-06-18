
@extends('covids.layout')
@section('title', 'Casos de Covid Cadastrados')
@section('container')
<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Observacao</th>
            <th>data</th>
            <th style="width: 30%">#</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($covids as $item)
           <tr>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->cpf }}</td>
            <td>{{ $item->observacao }}</td>
            <td>{{  datetimeformat($item->created_at, 'd/m/Y H:i:s')}}</td>
            <td> 
                <div class="btn-group"> 
                    <div>
                        <a name="editar" id="editar" class="btn btn-primary" href="/covid/{{ $item->id }}/edit" role="button">Editar</a>
                    </div>
                    <form action="{{route('covid.destroy',  $item->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" name="delete" id="delete" class="btn btn-danger">Remover</button>
                    </form>
                </div>
            </td>
           </tr>
       @endforeach
    </tbody>
</table>
<a name="novo" id="novo" class="btn btn-primary" href="/covid/create" role="button">Novo aluno</a>
