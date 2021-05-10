@extends('layouts.app')

@section('title')
Prediction
@endsection

@section('nav')
        <div class="container btn-group">      
            <a class="btn btn-danger" href="{{url('/resources')}}">Resources</a>
            <a class="btn btn-danger active" href="{{url('/prediction')}}">Predictions</a>
            <a class="btn btn-danger" href="{{url('/resources/helplines')}}">Helplines</a>          
            <a class="btn btn-danger" href="{{url('/about')}}">About</a>
        </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <button type="button" class="btn btn-primary">
                Confirmed <span class="badge badge-light">2,22,95,052</span>
            </button>
            <button type="button" class="btn btn-warning">
                Active <span class="badge badge-light">37,41,384</span>
            </button>
            <button type="button" class="btn btn-success">
                Recovered <span class="badge badge-light">1,83,11,266</span>
            </button>
            <button type="button" class="btn btn-danger">
                Deceased <span class="badge badge-light">2,42,402</span>
            </button>
        </div>
    </div>
    <div>Last Updated on DD/MM/YYYY</div>
</div>
@endsection
