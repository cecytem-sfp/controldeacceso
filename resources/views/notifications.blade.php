@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('notifications') }}</div>
				
                <div class="card-body">
                    <form action="{{ url('/notification/save') }}" method="post">
						@csrf
						<div class="form-group">
							<label for="title"></label>
							<input type="text" name="title" id="title">
							
							<label for="description"></label>
							<textarea name="description" id="description# cols="30"
							
                </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
