@extends('layouts.app')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Cambiar contraseña</h1>
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
    <ul style="list-style:none;padding:0;margin:0;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('change.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="password">Contraseña actual</label>
            <input type="password" class="form-control  " name="current_password" id="password">
          </div>
          <div class="form-group">
            <label for="new_password">Nueva contraseña</label>
            <input type="password" class="form-control " name="new_password" id="new_password">
          </div>
          <div class="form-group">
            <label for="new_password_confirm" class="control-label">Confirmar nueva contraseña</label>

            <input id="new_password_confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="">
        </div>
          <button class="btn btn-success">Cambiar contraseña</button>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection
