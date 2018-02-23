<div class="col-md-12 right">
  <div class="col-sm-8">
    <div class="form-group {{ $errors->has('serves') ? 'has-error' : ''}}">
      <label for="serves" class="col-md-4 control-label">{{ 'Serves' }}</label>
      <div class="col-md-6">
        <div class="form-line">
          <input class="form-control" name="serves" type="text" id="serves" value="{{ $serf->serves or ''}}" required >
          </div>
          {!! $errors->first('serves', '<p class="help-block">:message</p><br>') !!}
      </div>
  </div>
  </div>
</div>
 <br>
<br>
<br>
 <div class="col-md-12 right">
  <div class="col-sm-8">
    <div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
      <label for="serves" class="col-md-4 control-label">{{ 'Type' }}</label>
      <div class="col-md-6">
        <div class="form-line">
          <select class="form-control" name="type" id="type" required >
              <option value="">-- Please select --</option>
              <option value="utility"> المرافق</option>
              <option value="entertainment"> الترفيه</option>
              <option value="Safety measures">وسائل الامان </option>
              <option value="means of comfort"> وسائل الراحة </option>
              <option value="Reception services">خدمات الاستقبال </option>
          </select>          </div>
          {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
  </div>
</div>

<br>
<br>
<br>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">

    </div>
</div>
