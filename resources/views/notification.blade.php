@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col align-middle">{{ __('Notificaciones') }}</div>
                        <div class="col float-right"><a class="btn btn-primary" href="{{ url('notification/add') }}">{{ __('Nueva') }}</a></div>
                    </div>
                </div>

                <div class="card-body">
                    @forelse($notifications as $notification)
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('notification/' . $notification->id) }}">
                                    {{ $notification->id }}
                                </a>
                            </div>
                            <div class="col">{{ $notification->title }}</div>
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
