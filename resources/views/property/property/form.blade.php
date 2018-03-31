<div class="col-lg-5 col-md-5 col-sm-10 col-xs-8 col-md-offset-1">
   <div class="row clearfix">
      <div class="form-group form-float {{ $errors->has('name') ? 'has-error' : ''}}">
         <div class="form-line">
            <label class="form-label">Name property</label>
            <input class="form-control" name="name" type="text" id="name" maxlength="191" minlength="5" value="{{ $property->name or ''}}" required>
            {!! $errors->first('name', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
      </div>
   </div>
</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 col-md-offset-1">
   <div class="row clearfix">
      <div class=" form-group form-float {{ $errors->has('type') ? 'has-error' : ''}}" >
         <!-- <div class="form-line"> -->
         <label class="form-label">
         Type:
         </label>
         <div class="demo-radio-button">
            <input name="type" type="radio" id="radio_31" value="hall_wedding" class="with-gap radio-col-pink"  required {{ (isset($property->type) && $property->type == 'hall_wedding') ? 'checked' : ''}} />
            <label for="radio_31">Hall Wedding</label>
            <input name="type" type="radio" id="radio_35" value="chale" class="with-gap radio-col-blue" {{ (isset($property->type) && $property->type == 'chale') ? 'checked' : ''}}/>
            <label for="radio_35">Chalet</label>
            <input name="type" type="radio" id="radio_39" value="farm" class="with-gap radio-col-green" {{ (isset($property->type) && $property->type == 'farm') ? 'checked' : ''}}/>
            <label for="radio_39">Farm</label>
            <input name="type" type="radio" id="radio_46" value="lounge" class="with-gap radio-col-brown" {{ (isset($property->type) && $property->type == 'lounge') ? 'checked' : ''}}/>
            <label for="radio_46">Lounge</label>
         </div>
         {!! $errors->first('type', '
         <p class="help-block">:message</p>
         ') !!}
         <!-- </div> -->
      </div>
   </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-10 col-xs-8 col-md-offset-1">
   <div class="row clearfix">
      <div class="form-group form-float {{ $errors->has('time_entry') ? 'has-error' : ''}}">
         <div class="form-line">
            <label class="form-label">Time Entry</label>
            <input   class="timepicker form-control" name="time_entry" type="time" id="time_entry" value="{{ $property->time_entry or ''}}" required >
            {!! $errors->first('time_entry', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
      </div>
   </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-10 col-xs-8 col-md-offset-1">
   <div class="row clearfix">
      <div class="form-group form-float {{ $errors->has('time_out') ? 'has-error' : ''}}">
         <div class="form-line">
            <label class="form-label">Time Out</label>
            <input   class="timepicker form-control" name="time_out" type="time" id="time_out" value="{{ $property->time_out or ''}}" required>
            {!! $errors->first('time_out', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
      </div>
   </div>
</div>
@role('admin')
<div class="col-lg-2 col-md-2 col-sm-10 col-xs-8 col-md-offset-1">
   <div class="row clearfix">
      <div class="form-group form-float {{ $errors->has('user_id') ? 'has-error' : ''}}">
         <div class="form-line">
            <input   class="form-control"  name="user_id" type="number" id="user_id" value="{{ $property->name or ''}}" required>
            {!! $errors->first('user_id', '
            <p class="help-block">:message</p>
            ') !!}
            <label class="form-label">User ID</label>
         </div>
      </div>
   </div>
</div>
@endrole
@role('admin')
<div class="col-lg-2 col-md-2 col-sm-10 col-xs-8 col-md-offset-1">
@endrole
@role('owner')
<div class="col-lg-4 col-md-4 col-sm-10 col-xs-8 col-md-offset-1">
   @endrole
   <div class="row clearfix">
      <div class="form-group form-float {{ $errors->has('phon_num_one') ? 'has-error' : ''}}">
         <div class="form-line">
            <input   class="form-control" name="phon_num_one" pattern="[0][5][0-9]{8}$" type="number" id="phon_num_one" lang="en" maxlength="10" minlength="10" value="{{ $property->phon_num_one or ''}}" required>
            <label class="form-label">Phon Number One</label>
            {!! $errors->first('phon_num_one', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
         <div class="help-info">0512345678</div>
      </div>
   </div>
</div>
<div class="row clearfix">
@role('admin')
<div class="col-lg-2 col-md-2 col-sm-10 col-xs-8 col-md-offset-1">
   @endrole
   @role('owner')
   <div class="col-lg-4 col-md-4 col-sm-10 col-xs-8 col-md-offset-1">
      @endrole
      <div class="form-group form-float {{ $errors->has('phon_num_two') ? 'has-error' : ''}}">
         <div class="form-line">
            <input    name="phon_num_two"  id="phon_num_two" class="form-control"  type="number" lang="en" maxlength="10" minlength="10" value="{{ $property->phon_num_two or ''}}">
            <label class="form-label">Phon Number Tow</label>
            {!! $errors->first('phon_num_two', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
         <div class="help-info">0512345678</div>
      </div>
   </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-8 col-md-offset-1">
   <div class="row clearfix">
      <div class="form-group   form-float {{ $errors->has('describstion') ? 'has-error' : ''}}">
         <div class="form-line">
            <label class="form-label">Describstiont</label>
            <textarea rows="3"  name="describstion" class="form-control no-resize auto-growth"   type="textarea" id="describstion" maxlength="500" minlength="3" required>{{ $property->describstion or ''}}</textarea>
            {!! $errors->first('describstion', '
            <p class="help-block">:message</p>
            ') !!}
         </div>
         <div class="help-info">Min. 3, Max. 500 characters</div>
      </div>
   </div>
</div>
<div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 m-b-30 m-t-30">
      <div class="form-group form-float {{ $errors->has('image') ? 'has-error' : ''}}">
         <label class="form-label">Home Picture of Property:</label>
         <input name="image" type="file" name="Home Picture" required>
         {!! $errors->first('image', '
         <p class="help-block">:message</p>
         ') !!}
      </div>
   </div>
</div>
<div class="row clearfix">
   <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 m-b-30 m-t-30">
      <div class="body">
         <div id="map" class="gmap"></div>
      </div>
      <input type="text"  name="lat" id="lat" value="0">
      <input type="text" name="lng" id="lng" value="0">
      <br>
      <br>
      <input id="latlng" type="text" value="24.700494,46.8024262">
      <input id="submit" type="button" value="Reverse Geocode">
   </div>
   <input type="text"  name="lat" id="addsForm" value="0">
   <!-- <p id="addsForm" ></p> -->
</div>
<div class="row clearfix">
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-5 m-t-30">
      <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
   </div>
</div>
