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
            <a href="{{ route('users.create') }}" class="btn btn-primary">
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
                  <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                  </form>
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

</section>



@endsection
