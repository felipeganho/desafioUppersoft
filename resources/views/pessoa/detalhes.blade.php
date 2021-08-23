@extends('layout.principal')

@section('conteudo')
    <h1>Detalhes da pessoa: {{ $pessoa->nome }}  </h1>
    <ul>
        <li>
            <b>CPF:</b> {{ $pessoa->cpf }}
        </li>
        <li>
            <b>Data Nascimento:</b> {{ date('d-m-Y', strtotime($pessoa->dataNascimento)); }}
        </li>
        <li>
            <b>E-mail</b> {{ $pessoa->email }}
        </li>
        <li>
            <b>Telefone</b> {{ $pessoa->telefone }}
        </li>
        <li>
            <b>Logradouro</b> {{ $pessoa->logradouro }}
        </li>
        <li>
            <b>Estado</b> {{ $pessoa->estado }}
        </li>
        <li>
            <b>Cidade</b> {{ $pessoa->cidade }}
        </li>
    </ul>
@endsection