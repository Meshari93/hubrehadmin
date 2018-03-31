@extends('layouts.app')

@section('content')
<!-- Inline Layout | With Floating Label -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> -->
                <h2  class="pull-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    Create New Property
                    <!-- <small>Create New Property</small> -->
                </h2>
                <!-- </div> -->
                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> -->
                  <a href="{{ url('/property') }}" title="Back"><button class=" btn btn-warning btn-xs "><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <!-- </div> -->
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
              <!-- <br />
              <br /> -->
              @if ($errors->any())
                  <ul class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              @endif

              <form method="POST" action="{{ url('/property') }}" accept-charset="UTF-8" id="form_advanced_validation"
                enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @include ('property.property.form', ['submitButtonText' => 'Create'])
              </form>
            </div>

        </div>
    </div>
</div>
<!-- #END# Inline Layout | With Floating Label -->

  @endsection
