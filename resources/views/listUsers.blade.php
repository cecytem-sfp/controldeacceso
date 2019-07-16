@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.user_list') }}</div>

                <div class="card-body">
                    @forelse($users as $user)
                        <div class="row">
                            <div class="col">
                                <a href="{{ url('user/' . $user->id) }}">
                                    {{ $user->id }}
                                </a>
                            </div>
                            <div class="col">{{ $user->name }}</div>
                            <div class="col">{{ $user->no_control }}</div>
                        </div>
                    @empty
                      <li>{{ __('messages.no_users_yet') }}</li>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
