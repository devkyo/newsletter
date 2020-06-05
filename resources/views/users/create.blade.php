@extends('layouts.app')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Crear nuevo usuario</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('users.index') }}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>


<div class="card">
  <div class="card-body">
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" placeholder="" value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>
          <div class="form-group">
            <label for="first_surname">Apellido Paterno</label>
            <input   type="text" class="form-control @error('first_surname') is-invalid @enderror" id="first_surname" name="first_surname" placeholder="" value="{{ old('first_surname') }}">
            @error('first_surname')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="last_surname">Apellido Materno</label>
            <input  type="text" class="form-control" id="last_surname" name="last_surname" placeholder="" value="{{ old('last_surname') }}">
          </div>
          <div class="form-group">

            <label for="email">Correo</label>
            <input type="text" id="email" name="email" placeholder="name@avitar.pe" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        
        </div> 
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="phone">Celular de contacto / WhatsApp</label>
            <input  type="text" class="form-control" id="phone" placeholder="+51987654321" value="+51" name="phone" value="{{ old('phone') }}">
            <small id="phone" class="form-text text-muted">
              Ingresa tu numero sin espacio ni guion medio* 
            </small>
          </div>
          <div class="form-group">
            <label for="charge">Cargo</label>
            <select class="form-control  @error('charge_id') is-invalid @enderror" id="cargo" name="charge_id" placeholder="cargo">
              <option value="" >Seleciona un cargo</option>
              @foreach($charges as $charge)
                <option value="{{ $charge->id }}" {{ old('charge_id') == $charge->id ? 'selected' : '' }} >{{ $charge->name }}</option>
              @endforeach
            </select>
            @error('charge_id')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="rol">Rol</label>
            <select class="form-control @error('rol_id') is-invalid @enderror" id="rol" name="rol_id" >
              <option value="" >Seleciona un rol</option>
              @foreach($roles as $rol)
                <option value="{{ $rol->id }}" {{ old('rol_id') == $rol->id ? 'selected' : '' }}>{{ $rol->name }}</option>
              @endforeach
            </select>
            @error('rol_id')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <avatar-component
            :message="'Usar una imagen maxima de 300x300 px para una mejor experiencia del usuario receptor del email.'"
            :name="'avatar'"
       />
        </div>

      </div>

      <button type="submit" class="btn btn-avitar">Crear</button>
    </form>
  </div>
</div>


@endsection
