@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    <ul>
					   @forelse($users as $users)
					    <li>
						    <div>
							    <a herf="{{ url('users/' . $users->id) }}">
								    {{ $users->id }}
								</a>
							</div>
							<div>{{ $user->name }}}</div>
							<div>{{ $users->no_control }}}</div>
						</li>
					@else 
						<li>{{__('Aun no tiene suarios registrados') }}</li>
					@endforelse 
			       </ul>
			   </div>
								    
                
            </div>
        </div>
    </div>
</div>
@endsection
