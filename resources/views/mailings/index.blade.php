@extends('layouts.app')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Mailings</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('mailings.create') }}" class="btn btn-avitar">
              <i class="fas fa-plus-circle"></i> Enviar nuevo prospecto
            </a>
          </li>
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
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Prospectos enviados</h3>
          </div>

          <div class="card-body">
            <table id="example2" class="table  table-hover table-responsive-md">
              <thead>
              <tr>
                <th>Proyecto</th>
                <th>Asesor</th>
                <th>Cliente</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>F. de Envio</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($mailings as $mailing) 
              <tr>

                <td>
                  @if($mailing->project)
                  {{ $mailing->project->name}}
                  @else
                  --
                  @endif
                </td>
                @if($mailing->user)
                  <td>{{ $mailing->user->name }} {{ $mailing->user->first_surname }}</td>
                @else
                  <td>---</td>
                @endif
                <td>{{ $mailing->client }}</td>
                <td>{{ $mailing->email }}</td>
                <td>{{ $mailing->subject }}</td>
                <td>{{ $mailing->created_at }}</td>
                
                <td>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"  data-mailingid={{$mailing->id}} data-target="#mailingdelete">
                    Eliminar
                  </button>
                  {{-- <form action="{{ route('users.destroy',$mailing->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form> --}}
                </td>
              </tr>
              @endforeach
              </tbody>
             
            </table>
            {{ $mailings->links() }}
          </div>
         
        </div>
       
      </div>

    </div>
    
  </div>

</section>

<!-- Modal -->
<div class="modal fade" id="mailingdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación de eliminación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('mailings.destroy','mailing') }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          <p class="text-center">¿Estas seguro que deseas eliminar este mail?</p>
          <input type="hidden" name="mailing_id" id="mailing_id" value="">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Si, eliminar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, cerrar</button>
          </div>
      </form>
    </div>
  </div>
</div>


@endsection
