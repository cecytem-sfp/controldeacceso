@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col align-middle">{{ __('messages.notifications') }}</div>
                        <div class="col float-right"><a class="btn btn-primary" href="{{ url('notification/add') }}">{{ __('messages.new') }}</a></div>
                    </div>
                </div>

                <div class="card-body">
                    @if ($errors->has('mail_deliver'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mail_deliver') }}</strong>
                        </span>
                    @endif

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
                      <li>{{ __('messages.no_notifications') }}</li>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
