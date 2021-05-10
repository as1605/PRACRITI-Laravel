@extends('layouts.app')
@section('title')
About
@endsection
@section('nav')
        <div class="container btn-group">      
            <a class="btn btn-danger" href="{{url('/resources')}}">Resources</a>
            <a class="btn btn-danger" href="{{url('/prediction')}}">Predictions</a>
            <a class="btn btn-danger" href="{{url('/resources/helplines')}}">Helplines</a>          
            <a class="btn btn-danger active" href="{{url('/about')}}">About</a>
        </div>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    About Us
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
