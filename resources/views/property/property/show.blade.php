@extends('layouts.app')
@section('content')
<div class="row">
   <div class="col-md-12 ">
      <div class="panel panel-default">
         <div class="panel-heading p-b-20">  {{ $property->name }}
           @if( $property->user_id == Auth::user()->id )
           <a href="{{ url('property/' . $property->id . '/createsection') }}" title="Add Section"><button class="btn btn-success right  btn-xs m-r-10 "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> New Section</button></a>

           <a href="{{ url('/property/' . $property->id . '/edit') }}" title="Edit Property"><button class="btn btn-primary right btn-xs m-r-10"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

           <form method="POST" action="{{ url('property' . '/' . $property->id) }}" accept-charset="UTF-8" style="display:inline" class="right m-r-10">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-xs" title="Delete Property" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
           </form>
           <a href="{{ url('/property') }}" title="Back"><button class="btn btn-warning right btn-xs m-r-10"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
           <!-- <br/> -->
         </div>
         <div class="panel-body">
            <!-- auth()->user()->hasRole('admin')  -->

            @endif
              <div class="col-md-5">
            <div class="table-responsive">
               <table class="table table-borderless">
                  <tbody>
                     <tr>
                        <th>ID</th>
                        <td>{{ $property->id }}</td>
                     </tr>
                     <tr>
                        <th>Name</th>
                        <td>{{ $property->name }}</td>
                     </tr>
                     <tr>
                        <th> Type </th>
                        <td> {{ $property->type }} </td>
                     </tr>
                   </tbody>
               </table>
            </div>
         </div>
         <div class="col-md-6 right">
         <div  >
            <img src="{{ URL::to('/images/store/sectionimage/' . $property->picture_home ) }}">
          </div>
       </div>
       </div>
      </div>
   </div>
   <!-- <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 "> -->
   <div class="col-lg-6 col-md-6 ">
      <div class="panel panel-default">
         <div class="panel-heading">Informatiom : Property {{ $property->name }}</div>
         <div class="panel-body">
              <div class="table-responsive">
               <table class="table table-borderless">
                  <tbody>
                      <tr>
                        <th  class="width-120 ">Phon Num One </th>
                        <td> {{ $property->phon_num_one }}</td>
                     </tr>
                     <tr>
                        <th> Phon Num two </th>
                        <td> {{ $property->phon_num_two }}</td>
                     </tr>
                     <tr>
                        <th> Status	 </th>
                        <td> {{ $property->status	 }} </td>
                     </tr>
                     <tr>
                        <th> Evaluation	 </th>
                        <td> {{ $property->evaluation	 }} </td>
                     </tr>
                     <tr>
                        <th> number section	 </th>
                        <td> {{ $property->num_section	 }} </td>
                     </tr>
                     <tr>
                        <th> Describstion </th>
                        <td style =" white-space: normal;" > {{ $property->describstion }} </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="col-md-6"> -->
     <div class="col-lg-6 col-md-6">
      <div class="panel panel-default">
         <div class="panel-heading">Ouner Information</div>
         <div class="panel-body">
             <div class="table-responsive">
               <table class="table table-borderless">
                  <tbody>
                     <tr>
                        <th>ID Ouner</th>
                        <td> {{ $property->user_id}} </td>
                     </tr>
                     <tr>
                        <th>  Name </th>
                        <td>{{ $property->owner->first_name	}} {{ $property->owner->last_name }}</td>
                     </tr>
                     <tr>
                        <th>  Email </th>
                        <td>{{ $property->owner->email	}}</td>
                     </tr>
                     <tr>
                        <th> Phone Number </th>
                        <td>{{ $property->owner->phone_num	}}</td>
                     </tr>
                     <tr>
                        <th>	Nashioty </th>
                        <td>{{ $property->owner->nashioty	}}</td>
                     </tr>
                     <tr>
                        <th>Location </th>
                        <td>{{ $property->owner->location	}}</td>
                     </tr>
                     <tr>
                        <th>Pirth Day </th>
                        <td>{{ $property->owner->pirth_day	}}</td>
                     </tr>
                     <tr>
                        <th>Gender </th>
                        <td>{{ $property->owner->gender	}}</td>
                     </tr>
                     <tr>
                        <th>Status </th>
                        <td>{{ $property->owner->Status	}}</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- Section Table -->
   <div class="col-md-12">
   </div>
   @foreach($property->section as $section )
   <div class="col-md-6 flot-right">
      <div class="panel panel-default">
         <div class="panel-heading">{{ $section->name }}</div>
         <div class="panel-body">
            <a href="{{ url('/section/' . $section->id . '/edit') }}" title="Edit Section"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
            <form method="POST" action="{{ url('section' . '/' . $section->id) }}" accept-charset="UTF-8" style="display:inline">
               {{ method_field('DELETE') }}
               {{ csrf_field() }}
               <button type="submit" class="btn btn-danger btn-xs" title="Delete Section" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
            </form>
            <br/>
            <br/>
            <div class="table-responsive">
               <table class="table table-borderless">
                  <tbody>
                     <tr>
                        <th> Section	Name </th>
                        <td>{{ $section->name	}}</td>
                     </tr>
                     <tr>
                        <th> Section	Room number </th>
                        <td>{{ $section->room_num	}}</td>
                     </tr>
                     <tr>
                        <th> Section	Capacity </th>
                        <td>{{ $section->capacity	}}</td>
                     </tr>
                     <tr>
                        <th> Section	Status </th>
                        <td>{{ $section->status	}}</td>
                     </tr>
                     <tr>
                        <th> Section	serves </th>
                        <td>
                           @foreach($section->serves as $serves )
                           - {{ $serves->serves	}}
                           @endforeach
                        </td>
                     </tr>
                  </tbody>
               </table>
               @foreach($section->picture as $picture )
               <!-- Basic Example -->
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <!-- <div class="card"> -->
                  <!-- <div class="header">
                     </div> -->
                  <div class="body">
                     <div id="carousel-example-generic{{$section->id}}" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#carousel-example-generic{{$section->id}}" data-slide-to="0" class="active"></li>
                           <li data-target="#carousel-example-generic{{$section->id}}" data-slide-to="1"></li>
                           <li data-target="#carousel-example-generic{{$section->id}}" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                           @if( $picture->picture1 !=NULL  )
                           <div class="item active">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture1 ) }}">
                              <div class="carousel-caption">
                                 <h3>1</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture2 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture2 ) }}">
                              <div class="carousel-caption">
                                 <h3>2</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture3 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture3 ) }}">
                              <div class="carousel-caption">
                                 <h3>3</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture4 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture4 ) }}">
                              <div class="carousel-caption">
                                 <h3>4</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture5 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture5 ) }}">
                              <div class="carousel-caption">
                                 <h3>5</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture6 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture6 ) }}">
                              <div class="carousel-caption">
                                 <h3>6</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture7 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture7 ) }}">
                              <div class="carousel-caption">
                                 <h3>7</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture8 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture8 ) }}">
                              <div class="carousel-caption">
                                 <h3>8</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture9 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture9 ) }}">
                              <div class="carousel-caption">
                                 <h3>9</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture10 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture10 ) }}">
                              <div class="carousel-caption">
                                 <h3>10</h3>
                              </div>
                           </div>
                           @endif
                           @if( $picture->picture11 !=NULL  )
                           <div class="item">
                              <img src="{{ URL::to('/images/store/sectionimage/' . $picture->picture11 ) }}">
                              <div class="carousel-caption">
                                 <h3>11</h3>
                              </div>
                           </div>
                           @endif
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic{{$section->id}}" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic{{$section->id}}" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
                  <!-- </div> -->
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
   @endforeach
   <!-- //////////////////////////// -->
   <div class="col-md-12">
      <div class="panel panel-default">
         <div class="panel-heading">Rating </div>
         <div class="panel-body">
            <form method="POST" action="{{ url('/addRating') }}" accept-charset="UTF-8"
               enctype="multipart/form-data">
               {{ csrf_field() }}
               <input type="text" name="property_id" value="{{$property->id}}" hidden>
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                     <div class=" form-group form-float {{ $errors->has('cleanliness') ? 'has-error' : ''}} ">
                        <!-- <div class="form-line"> -->
                        <label class="form-label">
                        Cleanliness:
                        </label>
                        <div class="demo-radio-button" style="min-width:70px;">
                           <input name="cleanliness" type="radio" id="cradio_31" value="5" class="with-gap radio-col-pink"  required />
                           <label for="cradio_31" style="min-width:70px;">5</label>
                           <input name="cleanliness" type="radio" id="radio_35" value="4" class="with-gap radio-col-blue" />
                           <label for="cradio_35" style="min-width:70px;">4</label>
                           <input name="cleanliness" type="radio" id="cradio_39" value="3" class="with-gap radio-col-green"  />
                           <label for="cradio_39" style="min-width:70px;">3</label>
                           <input name="cleanliness" type="radio" id="cradio_46" value="2" class="with-gap radio-col-brown" />
                           <label for="cradio_46" style="min-width:70px;">2</label>
                           <input name="cleanliness" type="radio" id="cradio_47" value="1" class="with-gap radio-col-red" />
                           <label for="cradio_47" style="min-width:70px;">1</label>
                        </div>
                        {!! $errors->first('cleanliness', '
                        <p class="help-block">:message</p>
                        ') !!}
                        <!-- </div> -->
                     </div>
                     <div class=" form-group form-float {{ $errors->has('place') ? 'has-error' : ''}} ">
                        <!-- <div class="form-line"> -->
                        <label class="form-label">
                        Place:
                        </label>
                        <div class="demo-radio-button " style="min-width:70px;">
                           <input name="place" type="radio" id="lradio_31" value="5" class="with-gap radio-col-pink" required  />
                           <label for="lradio_31" style="min-width:70px;">5</label>
                           <input name="place" type="radio" id="lradio_35" value="4" class="with-gap radio-col-blue" />
                           <label for="lradio_35" style="min-width:70px;">4</label>
                           <input name="place" type="radio" id="lradio_39" value="3" class="with-gap radio-col-green"  />
                           <label for="lradio_39" style="min-width:70px;">3</label>
                           <input name="place" type="radio" id="lradio_46" value="2" class="with-gap radio-col-brown" />
                           <label for="lradio_46" style="min-width:70px;">2</label>
                           <input name="place" type="radio" id="lradio_47" value="1" class="with-gap radio-col-red" />
                           <label for="lradio_47" style="min-width:70px;">1</label>
                        </div>
                        {!! $errors->first('place', '
                        <p class="help-block">:message</p>
                        ') !!}
                        <!-- </div> -->
                     </div>
                     <div class=" form-group {{ $errors->has('price') ? 'has-error' : ''}} form-float ">
                        <!-- <div class="form-line"> -->
                        <label class="form-label">
                        Price:
                        </label>
                        <div class="demo-radio-button " style="min-width:70px;">
                           <input name="price" type="radio" id="pradio_31" value="5" class="with-gap radio-col-pink"  required />
                           <label for="pradio_31" style="min-width:70px;">5</label>
                           <input name="price" type="radio" id="pradio_35" value="4" class="with-gap radio-col-blue" />
                           <label for="pradio_35" style="min-width:70px;">4</label>
                           <input name="price" type="radio" id="pradio_39" value="3" class="with-gap radio-col-green"  />
                           <label for="pradio_39" style="min-width:70px;">3</label>
                           <input name="price" type="radio" id="pradio_46" value="2" class="with-gap radio-col-brown" />
                           <label for="pradio_46" style="min-width:70px;">2</label>
                           <input name="price" type="radio" id="pradio_47" value="1" class="with-gap radio-col-red" />
                           <label for="pradio_47" style="min-width:70px;">1</label>
                        </div>
                        {!! $errors->first('price', '
                        <p class="help-block">:message</p>
                        ') !!}
                        <!-- </div> -->
                     </div>
                     <div class=" form-group {{ $errors->has('accompany') ? 'has-error' : ''}} form-float ">
                        <!-- <div class="form-line"> -->
                        <label class="form-label">
                        Accompany:
                        </label>
                        <div class="demo-radio-button " style="min-width:70px;">
                           <input name="accompany" type="radio" id="aradio_31" value="5" class="with-gap radio-col-pink"  required />
                           <label for="aradio_31" style="min-width:70px;">5</label>
                           <input name="accompany" type="radio" id="aradio_35" value="4" class="with-gap radio-col-blue" />
                           <label for="aradio_35" style="min-width:70px;">4</label>
                           <input name="accompany" type="radio" id="aradio_39" value="3" class="with-gap radio-col-green"  />
                           <label for="aradio_39" style="min-width:70px;">3</label>
                           <input name="accompany" type="radio" id="aradio_46" value="2" class="with-gap radio-col-brown" />
                           <label for="aradio_46" style="min-width:70px;">2</label>
                           <input name="accompany" type="radio" id="aradio_47" value="1" class="with-gap radio-col-red" />
                           <label for="aradio_47" style="min-width:70px;">1</label>
                        </div>
                        {!! $errors->first('accompany', '
                        <p class="help-block">:message</p>
                        ') !!}
                        <!-- </div> -->
                     </div>
                     <div class=" form-group form-float {{ $errors->has('furniture') ? 'has-error' : ''}}  ">
                        <!-- <div class="form-line"> -->
                        <label class="form-label">
                        Furniture:
                        </label>
                        <div class="demo-radio-button " style="min-width:70px;">
                           <input name="furniture" type="radio" id="fradio_31" value="5" class="with-gap radio-col-pink" required  />
                           <label for="fradio_31" style="min-width:70px;">5</label>
                           <input name="furniture" type="radio" id="fradio_35" value="4" class="with-gap radio-col-blue" />
                           <label for="fradio_35" style="min-width:70px;">4</label>
                           <input name="furniture" type="radio" id="fradio_39" value="3" class="with-gap radio-col-green"  />
                           <label for="fradio_39" style="min-width:70px;">3</label>
                           <input name="furniture" type="radio" id="fradio_46" value="2" class="with-gap radio-col-brown" />
                           <label for="fradio_46" style="min-width:70px;">2</label>
                           <input name="furniture" type="radio" id="fradio_47" value="1" class="with-gap radio-col-red" />
                           <label for="fradio_47" style="min-width:70px;">1</label>
                        </div>
                        {!! $errors->first('furniture', '
                        <p class="help-block">:message</p>
                        ') !!}
                        <!-- </div> -->
                     </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Rating</button>
               </div>
            </form>
            <br>
            <br>
            <br>
         </div>
      </div>
   </div>
   <!-- //////////////////////////// -->
   <div class="col-md-12">
      <div class="panel panel-default">
         <div class="panel-heading">Comments </div>
         <div class="panel-body">
            <form method="POST" action="{{ url('/addComment') }}" accept-charset="UTF-8"
               enctype="multipart/form-data">
               {{ csrf_field() }}
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-md-offset-1">
                  <div class="form-group   form-float {{ $errors->has('comment') ? 'has-error' : ''}}">
                     <div class="form-line">
                        <input type="text" name="property_id" value="{{$property->id}}" hidden>
                        <textarea required  maxlength="500" rows="3" class="form-control no-resize   auto-growth" placeholder="Please type some Comment" name="comment" type="textarea" id="describstion" ></textarea>
                     </div>
                     {!! $errors->first('comment', '
                     <p class="help-block">:message</p>
                     ') !!}
                  </div>
               </div>
               <div class="flot-right col-lg-2 col-md-2 col-sm-2 col-xs-2   m-t-30">
                  <button class="btn btn-primary" type="submit">Commet</button>
               </div>
            </form>
            <br>
            <br>
            <br>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6 col-md-offset-1">
               @foreach($property->comments as $comment)
               <p>{{$comment->user->first_name}} {{$comment->user->last_name}}</p>
               <p>{{$comment->comment}}</p>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
