@php

@endphp

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
    <div class="form-line">
        {!! Form::text('name', null , ['class' => 'form-control', 'required' => 'required']) !!}
        <!-- <input type="text" name="name" value="" class="form-control"> -->
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
</div>

<div class="form-group {{ $errors->has('permissions') ? 'has-error' : ''}}">
    {!! Form::label('permissions', 'Permission', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('permissions[]', $permission, old('permissions')??isset($role)?$role->permissions->pluck('name', 'name'):null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required', 'multiple'] : ['class' => 'form-control', 'multiple']) !!}
        {!! $errors->first('permissions', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
