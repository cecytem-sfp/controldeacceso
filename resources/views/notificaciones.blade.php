@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notificaciones') }}</div>

                <div class="card-body">
                    @forelse($notificaciones as $notificaiones)
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('notificaciones/' . $notificaciones->id) }}">
                                    {{ $notificaciones->id }}
                                </a>
                            </div>
                            <div class="col">{{ $notificaciones->title }}</div>
                        </div>
                    @empty
                      <li>{{ __('Aun no tiene creado las notificaciones') }}</li>
                    @endforelse
                </div>
			
            </div>
        </div>
    </div>
</div>
@endsection
