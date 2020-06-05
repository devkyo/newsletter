@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">

                    @if(Auth::user()->rol_id == '1')
                        <div>
                            <p> Hola <strong>{{ Auth::user()->name }}</strong>, bienvenido al administrador de maillings de Avitar.</p>
                            <p>Con el perfil <strong>administrador</strong> podrás realizar las siguientes funciones:</p>
                            <ul>
                                <li>Crear, editar nuevos usuarios</li>
                                <li>Editar la información de los proyectos</li>
                                <li>Enviar Emails a Prospectos</li>
                            </ul>
                        </div>
                    @elseif(Auth::user()->rol_id == '2')
                        <div>
                            <p> Hola <strong>{{ Auth::user()->name }}</strong>, bienvenido al administrador de maillings de Avitar.</p>
                            <p>Con el perfil <strong>asesor</strong> podrás realizar las siguientes funciones:</p>
                            <ul>
                                <li>Enviar Emails a Prospectos</li>
                            </ul>
                        </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
