@extends('layouts.app')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Proyectos</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          {{-- <li>
            <a href="{{ route('projects.create') }}" class="btn btn-avitar">
              <i class="fas fa-plus-circle"></i> Agregar nuevo proyecto
            </a>
          </li> --}}
        </ol>
      </div>
    </div>
  </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<section class="content">
  
  <div class="container-fluid">

    <div class="row">
      @foreach($projects as $project)
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="/profiles/{{ $project->image }}" alt="Card image cap">
            <div class="card-body">
              <h1 class="" style="text-align: center"><strong>{{ $project->name }}</strong></h1>
              <p class="card-text"></p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Dormitorios: </strong>{{ $project->bedrooms }}</li>
                <li class="list-group-item"><strong>Area: </strong> <i>desde</i> {{ $project->from }} <i>hasta</i> {{ $project->to }}</li>
                <li class="list-group-item"><strong>Estado:</strong> {{ $project->status }}</li>
                <li class="list-group-item"><strong>Entrega:</strong> {{ $project->year }}</li>
                <li class="list-group-item"><strong>Dirección:</strong> {{ $project->address }}</li>
                <li class="list-group-item"><strong>Distrito:</strong> {{ $project->district }}</li>
              </ul>
              <div class="center-btn">
                <a href="{{ route('projects.edit',$project->id) }}" class="btn btn-avitar ">Editar información</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{ $projects->links() }}
    
  </div>

</section>



@endsection
