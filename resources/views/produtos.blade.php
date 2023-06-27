@extends('layouts.produto')

@section('content')


<div class="form-box">
    <h2>Cadastrar produto</h2>
    <form action="#">
        <div class="input-group">
            <label for="nome">Nome do produto</label>
            <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
        </div>

        <div class="input-group">
            <label for="telefone">Preço</label>
            <input type="tel" id="preco" placeholder="Digite o seu telefone" required>
        </div>
        
        <div class="input-group">
            <label for="telefone">Imagem do produto</label>
            <input type="text" id="imagem" placeholder="Digite um link" required>
        </div>
        
        <div class="input-group">
            <button onclick="Registar()">Cadastrar</button>
        </div>
    </form>
</div>

@endsection