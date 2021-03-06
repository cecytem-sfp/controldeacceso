@extends('layouts.app')

@section('content')
<script type="text/javascript">
    jQuery(function() {
        jQuery("#expire_at").datepicker({
            dateFormat: "yy-mm-dd",
            minDate: 0,
            maxDate: '+1M'
        });

        jQuery("#notify_to").chosen();
    });

</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.add_notification') }}</div>

                <div class="card-body">
                    <form action="{{ url('/notifications/save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('messages.title') }}</label>
                            <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" name="title" id="title">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">{{ __('messages.description') }}</label>
                            <textarea name="description" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" cols="30" rows="10">
                                {{ old('description') }}
                            </textarea>
                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="type">{{ __('messages.notification_type') }}</label>
                            <select name="type" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type">
                                <option value="group">{{ __('messages.group') }}</option>
                                <option value="user">{{ __('messages.user') }}</option>
                            </select>
                            @if ($errors->has('type'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="notify_to">{{ __('messages.notify_to') }}</label>
                            <select class="form-control{{ $errors->has('notify_to') ? ' is-invalid' : '' }}" name="notify_to" id="notify_to">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->no_control . ' - ' . $user->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('notify_to'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('notify_to') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="expire_at">{{ __('messages.expires_at') }}</label>
                            <input type="text" class="form-control{{ $errors->has('expire_at') ? ' is-invalid' : '' }}" value="{{ old('expire_at') }}" name="expire_at" id="expire_at">
                            @if ($errors->has('expire_at'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('expire_at') }}</strong>
                                </span>
                            @endif
                        </div>
                            <button type="submit"class="btn btn-success" >{{ __("messages.save") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
