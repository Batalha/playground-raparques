@extends('template')
    @section('title')
        Cliente
    @endsection
    @section('conteudo')
        <h1>Parque</h1>


            <table class="table">
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereco</th>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->telefone}}</td>
                        <td>{{$cliente->endereco}}</td>
                    </tr>
                @endforeach
            </table>
    @endsection