@extends('layouts.app')
 @section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Imges</div>
                    <div class="panel-body">
                        <a href="{{ url('addimage/create') }}" class="btn btn-success btn-sm" title="Add New images">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => 's', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                    </div>
                            <table class="table table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th>Image Id</th><th>Image</th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($addimages as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>

                                        <td><img src='{{ asset("images/$item->picture") }}' height="100" class="img img-response" /> </td>
                                        {{-- <td width="300px">
                                             <div class="col-md-4">
                                            <a href="{{ url('addimages/' . $item->id) }}" title="View Image"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                             </div>
                                              <div class="col-md-4">
                                            <a href="{{ url('addimages/' . $item->id . '/edit') }}" title="Edit Image"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                             </div>
                                               <div class="col-md-4"> 
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['addimages', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete addimage',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="pagination-wrapper"> {!! $employees->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div> --}}

                    
                </div>
            </div>
        </div>
    </div>
@endsection