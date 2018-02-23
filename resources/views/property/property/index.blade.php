@extends('layouts.app')
@section('content')
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Property</div>
                    <div class="panel-body">
                        <a href="{{ url('/property/create') }}" class="btn btn-success btn-sm" title="Add New Property">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                         <div class="col-md-6 navbar-right">
                       {!! Form::open(['method' => 'GET', 'url' => '/property', 'class' => 'navbar-form', 'role' => 'search'])  !!}
                        <div class="col-md-10">
                            <div class="input-group "  >
                               <div class="form-line"   >
                                   <input type="text" class="form-control date" name="search" placeholder="Search..." value="{{ request('search') }}">

                                 </div>
                                 </div>
                           </div>
                            <div class="col-md-1 flot-left">
                            <span class="input-group-btn ">
                               <button class="btn btn-default" type="submit">
                                   <i class="material-icons">search</i>
                               </button>
                           </span>
                           </div>

                           {!! Form::close() !!}
                            </div>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Name</th><th>Type</th><th>Phon Num One</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($property as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->type }} ---{{ $item->user_id }}</td><td>{{ $item->phon_num_one }}</td>
                                        <td>
                                            <a href="{{ url('/property/' . $item->id) }}" title="View Property"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/property/' . $item->id . '/edit') }}" title="Edit Property"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/property' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete Property" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $property->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
