@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('notificaciones') }}</div>
				
                
                <div class="card-body">
				     <form action="{{ url('/notificaciones/save')}}"method="post"> 
					    @csrf
						<dicv class="form-group">
						<label for="title"></label>
						<input 
                </div>
			
            </div>
        </div>
    </div>
</div>
@endsection
