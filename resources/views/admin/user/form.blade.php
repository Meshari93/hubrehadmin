<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line"   >
            {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
            {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line"   >
            {!! Form::text('last_name', null,  ['class' => 'form-control', 'required' => 'required']) !!}
            {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line"   >
            {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required'] ) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="form-line"   >
            {!! Form::password('password', ['class' => 'form-control', 'required' => 'required'] ) !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div><div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
    {!! Form::label('roles', 'Roles', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('roles[]', Spatie\Permission\Models\Role::get()->pluck('name', 'name'), isset($user)?$user->getRoleNames():null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required', 'multiple'] : ['class' => 'form-control','multiple']) !!}
        {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
