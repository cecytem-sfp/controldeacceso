@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.user_details') }}</div>

                <div class="card-body">
                  <div class="row">
                      <div class="col">{{ __('messages.username') }}</div>
                      <div class="col">{{$user->name}}</div>
                  </div>
                  <div class="row">
                      <div class="col">{{ __('messages.email') }}</div>
                      <div class="col">{{$user->email}}</div>
                  </div>
                  <div class="row">
                      <div class="col">{{ __('messages.address') }}</div>
                      <div class="col">{{$user->address}}</div>
                  </div>
                  <div class="row">
                      <div class="col">{{ __('messages.control_number') }}</div>
                      <div class="col">{{$user->no_control}}</div>
                  </div>
                  <div class="row">
                      <div class="col">{{ __('messages.phone') }}</div>
                      <div class="col">{{$user->phone}}</div>
                  </div>
                  <div class="row">
                      <div class="colg">
                          {!! QrCode::size(350)->generate($user->id . '|' . $user->no_control . '|' . $user->name) !!}
                      </div>
                  </div>

                  <div class="row">
                      <div class="col"></div>
                      <div class="col"><a class="btn btn-primary" href="{{ url('/users/list') }}">{{ __('messages.back') }}</a></div>
                  </div>
                </div>
            </div>
        </div>
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
                        <span class="col md-12">{{ __('messages.no_emergency_contact') }}</span>
                    </div>
                @endif
            </div>
    </div>
</div>
@endsection
