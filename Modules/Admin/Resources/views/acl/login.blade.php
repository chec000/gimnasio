{!! Form::open(['url' => Request::url()]) !!}
        <!-- username field -->
<div class="form-group {!! FormMessage::getErrorClass('username') !!}">
    {!! Form::label('username', trans('admin::pages.username'), ['class' => 'control-label']) !!}
    {!! Form::text('username', Request::input('username'), ['class' => 'form-control']) !!}
    <span class="help-block">{!! FormMessage::getErrorMessage('username') !!}</span>
</div>

<!-- password field -->
<div class="form-group {!! FormMessage::getErrorClass('password') !!}">
    {!! Form::label('password', trans('admin::pages.password'), ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- remember field -->
<div class="form-group">
    <div class="checkbox remember-me">
        <label>
            {!! Form::checkbox('remember', 'yes', false) !!}
                {{trans('admin::pages.login_remember')}}
        </label>
    </div>
</div>

{!! Form::hidden('login_path', Request::input('login_path')) !!}

        <!-- submit button -->
<p>{!! Form::submit(trans('admin::pages.login'), ['class' => 'btn btn-primary']) !!}</p>

{!! Form::close() !!}

<div class="row">
    <div class="col-sm-12 forgot-pw">
        <a href="{!! route('admin.login.password.forgotten') !!}">  {{trans('admin::pages.forgot_password')}}</a>
    </div>
</div>
