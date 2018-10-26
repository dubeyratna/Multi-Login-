@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Employee {{ $employee->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/manager/employees') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/manager/employees/' . $employee->id . '/edit') }}" title="Edit employee"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manager/employees', $employee->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete employee',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employee->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $employee->name }} </td></tr>
                                    <tr><th> Email </th><td> {{ $employee->email }} </td></tr>
                                    <tr><th> Phone </th><td> {{ $employee->phone_no }} </td></tr>
                                    <tr><th> Address</th><td> {{ $employee->address }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection
