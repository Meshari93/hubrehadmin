@extends('layouts.app')

@section('content')
<!--    <div class="container">-->
<!--        <div class="row">-->
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-heading">Permission</div>
                     <div class="panel-body">
                      <!-- can('add-Permission') -->
                        <a href="{{ url('/admin/permission/create') }}" class="btn btn-success btn-sm" title="Add New Permission">
                          <i class="fa fa-plus" aria-hidden="true"></i> Add New
                      </a>
                      <!-- endcan -->

                         <div class="col-md-6 navbar-right">
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/permission', 'class' => 'navbar-form', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Name</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($permission as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="{{ url('/admin/permission/' . $item->id) }}" title="View Permission"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/permission/' . $item->id . '/edit') }}" title="Edit Permission"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/permission', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Permission',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $permission->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
<!--        </div>-->
<!--    </div>-->
@endsection
