@extends('layouts.app')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tu perfil</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>

@if($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> Algunos problemas con los campos.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

<div class="card">
  <div class="card-body">
    <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" placeholder="Nombre" value="{{ $user->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>
          <div class="form-group">
            <label for="first_surname">Apellido Paterno</label>
            <input   type="text" class="form-control" id="first_surname" name="first_surname" placeholder="Apellido Paterno" value="{{ $user->first_surname }}">
          </div>
          <div class="form-group">
            <label for="last_surname">Apellido Materno</label>
            <input  type="text" class="form-control" id="last_surname" name="last_surname" placeholder="Apellido Materno" value="{{ $user->last_surname }}">
          </div>
          <div class="form-group">

            <label for="email">Correo</label>
            <input type="text" id="email" placeholder="mi@correo.com" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" disabled>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

      
        </div> 
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="phone">Celular o WhatsApp</label>
            <input  type="text" class="form-control" id="telefono" placeholder="+51987654321" name="phone" value="{{ $user->phone }}">
          </div>
          <div class="form-group">
            <label for="charge">Cargo</label>
            <select class="form-control" id="cargo" name="charge_id" placeholder="cargo">
              <option hidden value="">Seleciona un cargo</option>
              @foreach($charges as $charge)
                <option value="{{ $charge->id }}" {{ $charge->id === $user->charge_id ? 'selected' : '' }}>{{ $charge->name }}</option>
              @endforeach
            </select>
          </div>
          
          <avatar-component v-bind:userimagen="'{{ $user->avatar }}'" />
        </div>

      </div>
  
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>
  </div>
</div>


@endsection
