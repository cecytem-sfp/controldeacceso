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
					         <label for="title">{{_('Titulo') }}</label>
					         <input type="text" class="form-control" name="title" id="title">
					    </div>
						<div class="form-group">
					         <label for="description">{{ _('Descripcion') }}</label>
					         <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
						</div>
						<div class="form-group">
							<label for="type">{{_('Tipo de Notificacion') }}</label>
					        <select name="type" class="form-control" id="type">
							     <option value="group">{{ _('Grupo') }}</option>
								 <option value="user">{{ _('Usuario') }}</option>
							</select>
						</div>
						<div class="form-group">
							<label for="notify_to">{{ _('Notificar a') }}</label>
							<input type="text" class="form-control" name="notify_to" id="notify_to">
						</div>
						<div class="form-group">
						    <label for="expire_at">{{ _('Expirar en:') }}</label>
					        <input type="text" class="form-control" name="expire_at" id="expire_at">
						</div>
						    <button type="submit"class="btn btn-success" >{{ _("Guardar") }}</button>
						</div>
					</form>
                </div>
			</div>
        </div>
    </div>
</div>
@endsection
