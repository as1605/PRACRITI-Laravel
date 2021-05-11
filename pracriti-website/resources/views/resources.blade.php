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
    <div class="row">
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  ">
                    <div class="text-center">
                        <img src="{{URL::asset('Oxygen-cylinder.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Oxygen Cylinder">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Oxygen Cylinders</h2>
                        <p class="card-text text-center text-secondary">Oxygen Cylinders, Oxygen Concentrators, Oxygen Cans & Oxygen Refill</p>
                        
                    </div>
                </div>
            </a>
        </div>
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  "   >
                    <div class="text-center">
                        <img src="{{URL::asset('Hospital-beds.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Hospital Beds">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Hospital Beds</h2>
                        <p class="card-text text-center text-secondary">Normal Beds, Oxygen Beds, ICU Beds & Ventilator</p>
                    </div>
                </div>
            </a>
        </div>
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  "   >
                    <div class="text-center">
                        <img src="{{URL::asset('Testing.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Testing Centres">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Testing Centres</h2>
                        <p class="card-text text-center text-secondary">RT - PCR Testing & Home<br/> Testing Services</p>
                        
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  "   >
                    <div class="text-center">
                        <img src="{{URL::asset('Vaccine.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Vaccination Centres">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Vaccination</h2>
                        <p class="card-text text-center text-secondary">Get information about nearest vaccination centre and vaccine availability</p>
                        
                    </div>
                </div>
            </a>
        </div>
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  "   >
                    <div class="text-center">
                        <img src="{{URL::asset('Plasma-donor.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Plasma Donor">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Plasma Donor</h2>
                        <p class="card-text text-center text-secondary">Leads for Plasma Donors for different blood groups</p>
                        
                    </div>
                </div>
            </a>
        </div>
        <div class=" col-sm-4 mt-4">
            <a href="/resources" class="text-decoration-none">
                <div class="card h-100  ">
                    <div class="text-center">
                        <img src="{{URL::asset('Online-Consultation.png')}}" style="height: 200px; width: 200px;" class="card-img-top float-center" alt="Online Consultation">
                    </div> 
                    <div class="card-body">
                        <h2 class="card-title text-center text-dark">Online Consultation</h2>
                        <p class="card-text text-center text-secondary">Online consultation services & their details</p>
                        
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br/><br/>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-1">
                <a target="_blank" href="https://www.cowin.gov.in/home">
                    <div class="card-header">Govt CoWIN Vaccine Portal</div>
                </a>
                <div class="card-body">View live vaccine availability status district-wise pincode-wise</div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://external.sprinklr.com/insights/explorer/dashboard/601b9e214c7a6b689d76f493/">
                    <div class="card-header">Sprinklr Tweet Dashboard</div>
                </a>
                <div class="card-body">Statewise Oxygen Supplies, Hospital Beds, Plasma, Food etc live Tweets</div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://www.covidindiaresources.com/">
                    <div class="card-header">CovidResources</div>
                </a>
                <div class="card-body">Crowdsourced city-wise Oxygen Supplies, Hospital Beds, Plasma, Food etc</div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://life.coronasafe.network/">
                    <div class="card-header">CoronaSafe Life Network</div>
                </a>
                <div class="card-body">District-wise verified phone numbers for Oxygen Supplies, Hospital Beds, Medicine, Food etc </div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://covidfightclub.org/">
                    <div class="card-header">Covid Fight Club</div>
                </a>
                <div class="card-body">City-wise crowdsourced phone numbers for Oxygen Supplies, Plasma, Hospital Beds, Medicine etc </div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://docs.google.com/spreadsheets/d/17TAJ9TNWNXUmDejPKWQanrMk2ltH4w6hjUijuuHn7NU/edit?usp=sharing">
                    <div class="card-header">FightAgainstCovid Google Sheet</div>
                </a>
                <div class="card-body">Volunteer verified phone numbers for Oxygen Supplies, Hospital Beds, Ambulance, Food etc </div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://coronabeds.jantasamvad.org/">
                    <div class="card-header">Delhi Govt Corona Dashboard</div>
                </a>
                <div class="card-body">Govt verified live data for Hospital Beds (Covid Beds, Oxygen Beds, ICU Beds) </div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://coviddelhi.com/">
                    <div class="card-header">Covid Delhi Database</div>
                </a>
                <div class="card-body">Oxygen, Plasma and Hospital Beds Live Data</div>
            </div>
            <div class="card my-1">
                <a target="_blank" href="https://covidggn.com/public/pages/gurugram-hospitals">
                    <div class="card-header">Gurgaon Govt Covid Combat Companion</div>
                </a>
                <div class="card-body">Govt Verified live Hospital bed availability data</div>
            </div>
        </div>
    </div>
</div>
@endsection
