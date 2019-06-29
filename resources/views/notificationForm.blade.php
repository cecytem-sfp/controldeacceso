@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Notificacion') }} </div> 

                <div class="card-body">
                    <form action="{{ url('/notification/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('Titulo') }}</label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('Descripción') }}</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="type">{{ __('Tipo de Notifiación') }}</label>
                            <select name="type" class="form-control" id="type">
                                <option value="group">{{ __('Grupo') }}</option>
                                <option value="user">{{ __('Usuario') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="notify_to">{{ __('Notificar a') }}</label>
                            <input type="text" class="form-control" name="notify_to" id="notify_to">
                        </div>
                        <div class="form-group">
                            <label for="expire_at">{{ __('Expirar en:') }}</label>
                            <input type="text" class="form-control" name="expire_at" id="expire_at">
                        </div>
                            <button type="submit"class="btn btn-success" >{{ __("Guardar") }}</button>
							
                       </div>
					
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
