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
<p>Recuerde que al editar un proyecto con otra información, la información cambiara el las plantillas enviadas.</p>
<p>Los campos son sensibles a Mayusculas y Minisculas</p>
{{-- 
 @if($errors->any())
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif  --}}

<div class="card">
  <div class="card-body">
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="form-group">
            <label for="nombre">Proyecto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="nombre" name="name" placeholder="Nombre de proyecto" value="{{ $project->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="bedrooms">Dormitorios</label>
            <input   type="text" class="form-control @error('bedrooms') is-invalid @enderror" id="bedrooms" name="bedrooms" placeholder="Dormitorios" value="{{ $project->bedrooms }}">
            @error('bedrooms')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          
          
          <h6><strong>Dimensiones</strong></h6>
          <div class="row">
              <div class="col-md-6">
                <div class="form-group form-inline">
                  <label style="font-size: 10px; font-weight:normal;text-transform:uppercase;" for="form" class="control-label">Desde: </label>
                  <input style="margin-left:1em" type="text" class="form-control @error('from') is-invalid @enderror" id="from" name="from" placeholder="35 m2" value="{{ $project->from }}">
                  @error('from')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group form-inline">
                  <label style="font-size: 10px; font-weight:normal;;text-transform:uppercase;" for="to">Hasta: </label>
                  <input  style="margin-left:1em" type="text" class="form-control @error('to') is-invalid @enderror" id="to" name="to" placeholder="90 m2" value="{{ $project->to }}">
                  @error('to')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
          </div>

          <div class="form-group">
            <label for="status">Estado</label>
            <input   type="text" class="form-control @error('address') is-invalid @enderror" id="status" name="status" placeholder="Estado" value="{{ $project->status }}">
            @error('year')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
        
         
        </div> 
        <div class="col-md-6 col-12">

          <div class="form-group">
            <label for="year">Entrega</label>
            <input   type="text" class="form-control @error('address') is-invalid @enderror" id="year" name="year" placeholder="MARZO 21" value="{{ $project->year }}">
            @error('year')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" id="address" name="address" placeholder="Ingrese la dirección" class="form-control @error('address') is-invalid @enderror" value="{{ $project->address }}">
            @error('address')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="district">Distrito</label>
            <input  type="text" class="form-control @error('district') is-invalid @enderror" id="district" placeholder="" name="district" value="{{ $project->district }}">
            <small id="district" class="form-text text-muted">
              Ingresa tu numero sin espacio ni guion medio* 
            </small>
            @error('district')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          </div>
          
          
          <avatar-component 
            :userimagen="'{{ $project->image }}'" 
            :message="'Usar una imagen maxima de 350x200 px para una mejor experiencia del usuario receptor del email.'"
            :name="'image'"
          />
        </div>

      </div>
   
        <button type="submit" class="btn btn-avitar">Guardar</button>

    </form>
  </div>
</div>


@endsection
