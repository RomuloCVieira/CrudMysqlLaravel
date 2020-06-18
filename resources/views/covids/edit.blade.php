@extends('covids.layout')
@section('title', 'Editar Caso de Covid')
@section('container')

<form action="/covid/{{ $covids->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input 
            name="nome"
            type="text"
            class="form-control"
            aria-describedby="helpId" 
            placeholder="Ex: Gazin" 
            required
            value="{{ $covids->nome }}">
    </div>
    <div class="form-group">
        <label for="cpf">Cpf:</label>
        <input class="form-control" required name="cpf" id="cpf"  value="{{ $covids->cpf }}">
    </div>
    <div class="form-group">
        <label for="">Observação:</label>
        <textarea class="form-control" required name="observacao" id="observacao" cols="30" rows="10"> {{ $covids->observacao }}</textarea>
    </div>
    <div class="form-group">
        <a name="voltar" id="voltar" class="btn btn-primary" href="/covid" role="button">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>    
    </div>
</form>
@endsection