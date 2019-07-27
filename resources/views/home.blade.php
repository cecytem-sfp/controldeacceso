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

                    <div class="row"><span class="col">{{ __('messages.welcome') }}</span></div>

                    <div class="alert alert-warning" role="alert">
                        <div class="row alert-heading"><h4 class="col">{{ __('messages.emergency_contact') }}</h4></div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.name') }}</th>
                                    <th>{{ __('messages.address') }}</th>
                                    <th>{{ __('messages.email') }}</th>
                                    <th>{{ __('messages.phone') }}</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach ($emergency_contact as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if(empty(($emergency_contact)))
                            <div class="row">
                                <span class="col md-8">{{ __('messages.no_emergency_contact') }}</span>
                                <span class="col md-4">
                                    <a href="{{ url('/emergencycontact/add') }}" class="btn btn-success">{{ __('messages.emergency_contact_add') }}</a>
                                </span>
                            </div>
                        @endif
                    </div>

                    <div class="row card">
                        <div class="card-header">{{ __('messages.last_visits') }}</div>
                        <ul class="list-group list-group-flush">
                            @forelse ($last_visits as $visit)
                                <li class="list-group-item">{{ $visit->hora_registro }}</li>
                            @empty
                                <li class="list-group-item">{{ __('messages.no_visits') }}</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
