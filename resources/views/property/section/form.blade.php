<div class="row clearfix">
  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-t-30 m-b-10">
    <h5>Information </h5>
</div>
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} form-float">
            <div class="form-line">
                <input class="form-control"name="name" type="text" id="name" value="{{ $section->name or ''}}">
                  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                <label class="form-label">Name Section</label>
            </div>
        </div>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group form-float {{ $errors->has('room_num') ? 'has-error' : ''}}">
            <div class="form-line">
                <input   class="form-control"  name="room_num" type="number" id="room_num" value="{{ $section->room_num or ''}}" >
                  {!! $errors->first('room_num', '<p class="help-block">:message</p>') !!}
                <label class="form-label">Room Number</label>
            </div>
        </div>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group form-float {{ $errors->has('capacity') ? 'has-error' : ''}}">
            <div class="form-line">
                <input   class="form-control"  name="capacity" type="number" id="capacity" value="{{ $section->room_num or ''}}" >
                  {!! $errors->first('capacity', '<p class="help-block">:message</p>') !!}
                <label class="form-label">The amount of accommodating people</label>
            </div>
        </div>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-t-30 m-b-10">
        <h5>Price</h5>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group form-float {{ $errors->has('typical_day') ? 'has-error' : ''}}">
            <div class="form-line">
                <input class="form-control" name="typical_day" type="number" id="typical_day" value="{{ $section->price->typical_day or ''}}" >
                  {!! $errors->first('typical_day', '<p class="help-block">:message</p>') !!}
                <label class="form-label">Price typical day</label>
            </div>
        </div>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group form-float {{ $errors->has('weekend') ? 'has-error' : ''}}">
            <div class="form-line">
                <input   class="form-control"  name="weekend" type="number" id="weekend" value="{{ $section->price->weekend or ''}}" >
                  {!! $errors->first('weekend', '<p class="help-block">:message</p>') !!}
                <label class="form-label">Price weekend day</label>
            </div>
        </div>
    </div>
      <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6 col-md-offset-2 m-b-30">
        <div class="form-group form-float {{ $errors->has('feast') ? 'has-error' : ''}}">
            <div class="form-line">
                <input   class="form-control"  name="feast" type="number" id="feast" value="{{ $section->price->feast or ''}}" >
                  {!! $errors->first('feast', '<p class="help-block">:message</p>') !!}
                <label class="form-label">Price feast day</label>
            </div>
        </div>
    </div>

  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 m-b-30 m-t-30">
      <div class="form-group form-float {{ $errors->has('serves') ? 'has-error' : ''}}">
        <label class="form-label">serves</label>
            <select id="optgroup" class="ms" multiple="multiple" name="serves[]">
                <!-- <optgroup label="  "> -->

                   @foreach ($idserves as $key)
                    <option  value="{{ $key->id  }}">{{$key->id }} == {{$key->serves }}</option>
                    @endforeach

                     @foreach($idservessection as $serves )
                      <option selected value="{{ $serves->id }}">{{$serves->id }} == {{$serves->serves}}</option>
                     @endforeach

               <!-- </optgroup> -->
            </select>
                  {!! $errors->first('serves', '<p class="help-block">:message</p>') !!}
      </div>
    </div>

  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-offset-1 m-b-30 m-t-30">
      <div class="form-group form-float {{ $errors->has('file1') ? 'has-error' : ''}}">
        <label class="form-label">Section  Picture:</label>
           <input name="file1[][image]" type="file" multiple max="15">
             {!! $errors->first('file1', '<p class="help-block">:message</p>') !!}
    </div>
  </div>


     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-offset-5 m-t-30">
         <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
<div class="col-lg-12 col-md-12 col-sm-12 ">
</div>
