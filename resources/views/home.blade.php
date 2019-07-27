@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <span class="col">
                            <a href="{{ url('/emergencycontact/add') }}" class="btn btn-success">{{ __('messages.contact_emergency') }}</a>
                        </span>
                    </div>
                    <div class="row"><span class="col">{{ __('messages.welcome') }}</span></div>
                    <div class="row"><span class="col">{{ __('messages.last_visits') }}</span></div>
                    <div class="row">
                        <span class="col">
                            <ul>
                                @forelse ($last_visits as $visit)
                                    <li>{{ $visit->hora_registro }}</li>
                                @empty
                                    <li>{{ __('messages.no_visits') }}</li>
                                @endforelse
                            </ul>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
