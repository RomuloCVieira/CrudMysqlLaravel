@extends('covids.layout')
@section('title', 'Novo Caso de Covid')
@section('container')

<form action="/covid" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text"
        class="form-control" required name="nome" id="nome" aria-describedby="helpId" placeholder="Ex: Gazin">
    </div>
    <div class="form-group">
        <label for="cpf">Cpf:</label>
        <input class="form-control" required name="cpf" id="cpf">
    </div>
    <div class="form-group">
        <label for="">Observação:</label>
        <textarea class="form-control" required name="observacao" id="observacao" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <a name="voltar" id="voltar" class="btn btn-primary" href="/covid" role="button">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>    
    </div>
</form>
@endsection