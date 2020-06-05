@extends('layouts.app')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Envia un nuevo correo</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('mailings.index') }}" class="btn btn-primary">
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
    <form action="{{ route('mailings.store') }}" method="POST" enctype="multipart/form-data" id="form-mailing">
      @csrf
      <div class="row">
        <div class="col-md-6 col-12 offset-md-3">
          <div class="form-group">
            <label for="project">Proyecto</label>
            <select class="form-control  @error('project_id') is-invalid @enderror" id="project" name="project_id">
              <option value="" hidden >Seleciona el proyecto</option>
              @foreach($projects as $project)
                <option value="{{ $project->id }}" {{ old('project_id') == $project->id ? 'selected' : '' }} >{{ $project->name }}</option>
              @endforeach
            </select>
            @error('project_id')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="first_surname">Cliente</label>
            <input   type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" placeholder="Ingrese el nombre del cliente" value="{{ old('first_surname') }}">
            @error('client')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Ingrese el correo del cliente" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="subject">Asunto</label>
            <input  type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Ingrese el asunto del mensaje" value="{{ old('subject') }}">
            @error('subject')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-avitar">Enviar</button>
          <button type="button" id="mailing_preview" class="btn btn-info" style="color:#fff"> <i class="fas fa-search"></i> Previzualizar</button>
        </div> 
      </div> 
    </form>
  </div>
</div>


@endsection
