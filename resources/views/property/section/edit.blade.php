@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Section #{{ $section->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/property/'.$section->property_id) }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ url('/section/' . $section->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                              <input  name="property_id" type="number" hidden value="{{$property_id}}" >
                            @include ('property.section.form', ['submitButtonText' => 'Update'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
