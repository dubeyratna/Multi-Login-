@extends('layouts.app')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
    <div class="container">
            <div class="col-md-9">               
             <div class="panel panel-default">
                    <div class="panel-heading">Add Images</div>
                    <div class="panel-body">
                        <a href="{{ url('/addimage') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/addimage', 'class' => 'form-horizontal', 'files' => true]) !!}
                        @include('add_image.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            
        </div>
    </div>
@endsection
