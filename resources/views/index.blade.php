@extends('templates.template')

@section('content')
<h1 class="text-center">Crud simples com Laravel e MySQL</h1>
    <hr>
    <div class="text-center mt-3 mb-4">
        <a href="">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col" class="text-center">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($book as $bo)
                @php
                   $user = $bo->find($bo->id)->relUsers;
                @endphp
            <tr>
                <th scope="row">{{$bo->id}}</th>
                <td>{{$bo->title}}</td>
                <td>{{$user->name}}</td>
                <td>{{$bo->price}}</td>
                <td class="text-center">
                    <a href="">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
