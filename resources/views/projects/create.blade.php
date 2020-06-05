@extends('layouts.app')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Editar Proyecto</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('projects.index') }}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Volver
            </a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>

{{-- @if($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif --}} 

<div class="card">
  <div class="card-body">
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="nombre">Proyecto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" placeholder="Nombre">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="bedrooms">Dormitorios</label>
            <input   type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Dormitorios">
          </div>
          
          
          <h6><strong>Dimensiones</strong></h6>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-inline">
                    <label style="font-size: 10px; font-weight:normal;text-transform:uppercase;" for="form" class="control-label">Desde: </label>
                    <input style="margin-left:1em" type="text" class="form-control" id="from" name="from" placeholder="35 m2">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-inline">
                    <label style="font-size: 10px; font-weight:normal;;text-transform:uppercase;" for="to">Hasta: </label>
                    <input  style="margin-left:1em" type="text" class="form-control" id="to" name="to" placeholder="90 m2">
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label for="status">Estado</label>
              <input   type="text" class="form-control" id="status" name="status" placeholder="Estado">
            </div>
            
        </div> 
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="year">Entrega</label>
            <input   type="text" class="form-control" id="year" name="year" placeholder="MARZO 21">
          </div>

          <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" placeholder="Ingrese su direccion" class="form-control @error('address') is-invalid @enderror">
            @error('address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="district">Distrito</label>
            <input  type="text" class="form-control" id="district" placeholder="" name="district">
            <small id="district" class="form-text text-muted">
              Ingresa tu numero sin espacio ni guion medio* 
            </small>
          </div>
          
          
          <avatar-component 
            :message="'Usar una imagen maxima de 300x200 px para una mejor experiencia del usuario receptor del email.'"
            :name="'image'"
          />
        </div>

      </div>
   
        <button type="submit" class="btn btn-avitar">Guardar</button>

    </form>
  </div>
</div>


@endsection
