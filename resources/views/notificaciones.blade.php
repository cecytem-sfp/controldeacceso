@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notificaciones') }}</div>
                
                <div class="card-body">
                    @forelse($notifications as $notificacion)
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('notificacion/' . $notificacion->id) }}">
                                    {{ $notificacion->id }}
                                </a>
                            </div>
                            <div class="col">{{ $notificacion->title }}</div>
                        </div>
                    @empty
                      <li>{{ __('Aun no ha creado notificaciones') }}</li>
                    @endforelse
                </div>
			
            </div>
        </div>
    </div>
</div>
@endsection
