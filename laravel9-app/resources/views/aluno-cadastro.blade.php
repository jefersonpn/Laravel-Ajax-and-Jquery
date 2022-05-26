@extends('master')

@section('content')
    <div class="container mt-2 w-100 ">
        <div class="d-grid gap-4">
            <form action="{{ route('aluno-store') }}" method="post" enctype="multipart/form-data" class="">
                @csrf
                <div class="form-group p-2 bg-light border">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo do aluno">
                </div>
                <div class="form-group p-2 bg-light border">
                    <label for="image">Foto do aluno: </label>
                    <input class="form-control-file" type="file" id="image" name="image">
                </div>
                <div class="form-group p-2 bg-light border">
                    <label for="dataAniversario">Data de Nascimento: </label>
                    <input type="date" name="dataAniversario" id="dataAniversario">
                </div>
                <div class="form-group p-2">
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection