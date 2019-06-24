@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Usuarios') }}</div>

                <div class="card-body">
                  <div class="row">
                      <div class="col">Nombre de Usuario</div>
                      <div class="col">{{$user->name}}</div>
                  </div>
                  <div class="row">
                      <div class="col">Correo Electronico</div>
                      <div class="col">{{$user->email}}</div>
                  </div>
                  <div class="row">
                      <div class="col">Dirección</div>
                      <div class="col">{{$user->address}}</div>
                  </div>
                  <div class="row">
                      <div class="col">No. Control</div>
                      <div class="col">{{$user->no_control}}</div>
                  </div>
                  <div class="row">
                      <div class="col">Telefono</div>
                      <div class="col">{{$user->phone}}</div>
                  </div>
                  <div class="row">
                      <div class="colg">
                          {!! QrCode::size(350)->generate($user->id . '|' . $user->no_control . '|' . $user->name) !!}
                      </div>
                  </div>

                  <div class="row">
                      <div class="col"></div>
                      <div class="col"><a href="{{ url('/users/list') }}">Regresar</a></div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
