@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Perfil</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>
                                                        {{ $error }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('profile.update') }}" method="POST" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', auth()->user()->name) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="cargo" class="col-md-4 col-form-label text-md-right">Cargo</label>
                                            <div class="col-md-6">
                                                <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo', auth()->user()->cargo) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">Data de nascimento</label>
                                            <div class="col-md-6">
                                                <input id="data_nascimento" type="date" class="form-control" name="data_nascimento" value="{{ old('data_nascimento', auth()->user()->data_nascimento) }}" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="salario" class="col-md-4 col-form-label text-md-right">Salario</label>
                                            <div class="col-md-6">
                                                <input id="salario" type="number" class="form-control" name="salario" maxlength="16" value="{{ old('salario', auth()->user()->salario) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="telefone" class="col-md-4 col-form-label text-md-right">Telefone</label>
                                            <div class="col-md-6">
                                                <input id="telefone" type="tel" class="form-control" name="telefone" maxlength="14" value="{{ old('telefone', auth()->user()->telefone) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="profile_image" class="col-md-4 col-form-label text-md-right">Imagem de perfil</label>
                                            <div class="col-md-6">
                                                <input id="profile_image" type="file" class="form-control" name="profile_image">
                                                @if (auth()->user()->image)
                                                    <code>{{ auth()->user()->image }}</code>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nova senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 mt-5">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">Atualizar perfil</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
