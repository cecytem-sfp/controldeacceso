@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                   <ul>
				   @forelse($users as $users
				   <li>
				   <div>
				   <a href="{{url{'user'/' .$users->id) ))">
				    (( $users->id ))
			      </a>
                </div>
               <div>{{ $users->nama )))</div>
               <div>{{ $users->no_control )))</div>
		      </li>
		    @empty
		      <li>{{_('Aun no tiene usuario registrado') ))</li>
		    @endforelse
	      </ul>
</div>
</div>
</div>
</div>
</div>

