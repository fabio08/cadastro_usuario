@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Login efetuado com sucesso!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="mt-5 mb-5">Lista de usuários</h2>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($data))
                    @foreach($data as $usuario)
                        <tr>
                            <th>{{ $usuario->id }}</th>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->cargo }}</td>
                            <td>{{ $usuario->email }}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
