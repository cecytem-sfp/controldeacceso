@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{_('Notificaciones') }} <a class="btn btn-success" href="{{ url('/notification/add')}}">
				Agregar</a> </div>

                <div class="card-body">
                    @forelse($notifications as $notification)
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('notification/' . $notification->id) }}">
                                    {{ $notification->id }}
                                </a>
                            </div>
                            <div class="col">{{ $notifications->title }}</div>
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

				
