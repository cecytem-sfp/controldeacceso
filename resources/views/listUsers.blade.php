@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Usuarios') }}</div>

                <div class="card-body">
                  <ul>
                    @forelse($users as $user)
                      <li>
                        <div>
                          <a href="{{ url('user/' . $user->id) }}">
                            {{ $user->id }}
                          </a>
                        </div>
                        <div>{{ $user->name }}}</div>
                        <div>{{ $user->no_control }}}</div>
                      </li>
                    @empty
                      <li>{{ __('Aun no tiene usuarios registrados') }}</li>
                    @endforelse
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection