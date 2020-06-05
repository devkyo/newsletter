@extends('layouts.app')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Usuarios</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li>
            <a href="{{ route('users.create') }}" class="btn btn-avitar">
              <i class="fas fa-plus-circle"></i> Crear usuario
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
            <h3 class="card-title">Lista de usuarios</h3>
          </div>

          <div class="card-body">
            <table id="example2" class="table  table-hover table-responsive-md">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Rol</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($users as $user) 
              <tr>

                <td>{{ $user->name }} {{ $user->first_surname }}</td>
                <td>
                  <div class="user__avatar">
                    <img src="profiles/{{ $user->avatar }}" alt="" class="img-thumbnail">
                  </div>
                </td>
                <td>{{ $user->email }}</td>
                <td>
                  @if ($user->charge)
                    {{ $user->charge->name }}
                  @else 
                    --
                  @endif
                </td>
                <td>
                  @if ($user->rol)
                    {{ $user->rol->name }}
                  @else 
                    --
                  @endif
                </td>
                
                <td>
                  
                  @if($user->id === 1 && $user->id === Auth::user()->id)
                 
                  @else
                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"  data-userid={{$user->id}} data-target="#userdelete">
                      Eliminar
                    </button>
                    @endif

                  {{-- </form> --}}
                </td>
              </tr>
              @endforeach
              </tbody>
             
            </table>
            {{ $users->links() }}
          </div>
         
        </div>
       
      </div>

    </div>
    
  </div>

  <!-- Modal -->
  <div class="modal fade" id="userdelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmación de eliminación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('users.destroy','user') }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            <p class="text-center">¿Estas seguro que deseas eliminar el usuario?</p>
            <input type="hidden" name="user_id" id="user_id" value="">
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Si, eliminar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No, cerrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>

</section>



@endsection
