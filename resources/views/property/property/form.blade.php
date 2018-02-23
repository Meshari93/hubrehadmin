
<h3>Property Information</h3>
 <fieldset>

<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
       <div class="form-group form-float {{ $errors->has('name') ? 'has-error' : ''}}">
          <div class="form-line">
              <label class="form-label">Name property</label>
             <input class="form-control" name="name" type="text" id="name" value="{{ $property->name or ''}}" required>
             {!! $errors->first('name', '
             <p class="help-block">:message</p>
             ') !!}

          </div>
       </div>
       </div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
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
             {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
             <!-- </div> -->
          </div>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
              <div class="form-group form-float {{ $errors->has('time_entry') ? 'has-error' : ''}}">
                <div class="form-line">
                  <label class="form-label">Time Entry</label>
                   <input   class="form-control" name="time_entry" type="time" id="time_entry" value="{{ $property->time_entry or ''}}" required >
                   {!! $errors->first('time_entry', '
                   <p class="help-block">:message</p>
                   ') !!}
                </div>
             </div>
             </div>
             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
               <div class="form-group form-float {{ $errors->has('time_out') ? 'has-error' : ''}}">
                <div class="form-line">
                  <label class="form-label">Time Out</label>
                   <input   class="form-control" name="time_out" type="text" id="time_out" value="{{ $property->time_out or ''}}" required>
                   {!! $errors->first('time_out', '
                   <p class="help-block">:message</p>
                   ') !!}
                </div>
             </div>
             </div>
             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
              <div class="form-group   form-float {{ $errors->has('describstion') ? 'has-error' : ''}}">
                <div class="form-line">
                  <label class="form-label">Describstiont</label>
                   <textarea rows="3" class="form-control no-resize auto-growth" placeholder="Please type some describstiont" name="describstion" type="textarea" id="describstion" required>{{ $property->describstion or ''}}</textarea>
                   {!! $errors->first('describstion', '
                   <p class="help-block">:message</p>
                   ') !!}
                </div>
             </div>
             </div>
             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 m-b-30 m-t-30">
                 <div class="form-group form-float {{ $errors->has('image') ? 'has-error' : ''}}">
                   <label class="form-label">Home Picture of Property:</label>
                     <input name="image" type="file" name="Home Picture" required>
                     {!! $errors->first('image', '
                     <p class="help-block">:message</p>
                     ') !!}
               </div>
             </div>
</fieldset>

<!-- //////////////////////////////////////// -->
<h3>User Information</h3>
 <fieldset>
     @role('admin')
     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
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
     @endrole
       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
        <div class="form-group form-float {{ $errors->has('phon_num_one') ? 'has-error' : ''}}">
          <div class="form-line">
             <input   class="form-control" name="phon_num_one" type="number" id="phon_num_one" value="{{ $property->phon_num_one or ''}}" required>
             <label class="form-label">Phon Number One</label>
             {!! $errors->first('phon_num_one', '
             <p class="help-block">:message</p>
             ') !!}
          </div>
       </div>
       </div>
     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 col-md-offset-1">
       <div class="form-group form-float {{ $errors->has('phon_num_two') ? 'has-error' : ''}}">
          <div class="form-line">
             <input   class="form-control" name="phon_num_two" type="number" id="phon_num_two" value="{{ $property->phon_num_two or ''}}">
             <label class="form-label">Phon Number Tow</label>
             {!! $errors->first('phon_num_two', '
             <p class="help-block">:message</p>
             ') !!}
          </div>
       </div>
    </div>
</fieldset>
