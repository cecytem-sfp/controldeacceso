@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col align-middle">{{ __('messages.notifications') }}</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row"><span class="col">{{ __('messages.title') }}</span><span class="col">{{ $notification->title }}</span></div>
                    <div class="row"><span class="col">{{ __('messages.description') }}</span><span class="col">{{ $notification->description }}</span></div>
                    <div class="row"><span class="col">{{ __('messages.expires_at') }}</span><span class="col">{{ $notification->expire_at }}</span></div>
                    <div class="row"><span class="col">{{ __('messages.created_at') }}</span><span class="col">{{ $notification->date }}</span></div>
                    <div class="row"><span class="col">{{ __('messages.created_by') }}</span><span class="col">{{ $notification->owner }}</span></div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col"><a class="btn btn-primary" href="{{ url('/notifications') }}">{{ __('messages.back') }}</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
