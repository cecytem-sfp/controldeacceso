@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listado de Usuarios') }}</div>

                <div class="card-body">
                    <form action="{{ url('/notificacion/save')}}"method="post">
					    @csrf
                </div class="form-group">
				      <label for="title"></larabel>
					  <input type="text" name="title" id="title">
					  
					  <label for="description"></label>
					  <textarea name="description" id="description" cols="30" rows="10"
            </div>
        </div>
    </div>
</div>
@endsection
