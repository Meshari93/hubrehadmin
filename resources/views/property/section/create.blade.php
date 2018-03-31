@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Section </div>
                    <div class="panel-body">
                        <a href="{{ url('/section') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ url('/section') }}"   accept-charset="UTF-8" class="form-horizontal  " enctype="multipart/form-data" style="background-color:#fff;">
                            {{ csrf_field() }}
                            <input  name="property_id" type="number" hidden value="{{$property_id}}" >
                            @include ('property.section.form', ['submitButtonText' => 'Create'])
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
