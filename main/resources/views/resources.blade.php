@extends('layouts.app')

@section('title')
Resources
@endsection

@section('logged')
<a href="{{url('/internal')}}" class="container btn btn-dark justify-content-center">
    Visit Internal Site (Only for IIT Delhi employees)</a>
@endsection

@section('nav')
        <div class="container btn-group">      
            <a class="btn btn-danger active " href="{{url('/resources')}}">Resources</a>
            <a class="btn btn-danger" href="{{url('/prediction')}}">Predictions</a>
            <a class="btn btn-danger" href="{{url('/resources/helplines')}}">Helplines</a>
            <a class="btn btn-danger" href="{{url('/about')}}">About</a>
        </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-2">
                <a target="_blank" href="https://www.cowin.gov.in/home">
                    <div class="card-header p-2 text-center">Govt CoWIN Vaccine Portal</div>
                </a>
                <div class="card-body py-2">View live vaccine availability status district-wise pincode-wise</div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/">
                    <div class="card-header p-2 text-center">Sprinklr Tweet Dashboard</div>
                </a>
                <div class="card-body py-2">Statewise Oxygen Supplies, Hospital Beds, Plasma, Food etc live Tweets</div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://www.covidindiaresources.com/">
                    <div class="card-header p-2 text-center">CovidResources</div>
                </a>
                <div class="card-body py-2">Crowdsourced city-wise Oxygen Supplies, Hospital Beds, Plasma, Food etc</div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://life.coronasafe.network/">
                    <div class="card-header p-2 text-center">CoronaSafe Life Network</div>
                </a>
                <div class="card-body py-2">District-wise verified phone numbers for Oxygen Supplies, Hospital Beds, Medicine, Food etc </div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://covidfightclub.org/">
                    <div class="card-header p-2 text-center">Covid Fight Club</div>
                </a>
                <div class="card-body py-2">City-wise crowdsourced phone numbers for Oxygen Supplies, Plasma, Hospital Beds, Medicine etc </div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://docs.google.com/spreadsheets/d/17TAJ9TNWNXUmDejPKWQanrMk2ltH4w6hjUijuuHn7NU/edit?usp=sharing">
                    <div class="card-header p-2 text-center">FightAgainstCovid Google Sheet</div>
                </a>
                <div class="card-body py-2">Volunteer verified phone numbers for Oxygen Supplies, Hospital Beds, Ambulance, Food etc </div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://coronabeds.jantasamvad.org/">
                    <div class="card-header p-2 text-center">Delhi Govt Corona Dashboard</div>
                </a>
                <div class="card-body py-2">Govt verified live data for Hospital Beds (Covid Beds, Oxygen Beds, ICU Beds) </div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://coviddelhi.com/">
                    <div class="card-header p-2 text-center">Covid Delhi Database</div>
                </a>
                <div class="card-body py-2">Oxygen, Plasma and Hospital Beds Live Data</div>
            </div>
            <div class="card my-2">
                <a target="_blank" href="https://covidggn.com/public/pages/gurugram-hospitals">
                    <div class="card-header p-2 text-center">Gurgaon Govt Covid Combat Companion</div>
                </a>
                <div class="card-body py-2">Govt Verified live Hospital bed availability data</div>
            </div>
        </div>
    </div>
</div>
@endsection
