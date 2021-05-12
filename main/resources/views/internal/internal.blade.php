@extends('layouts.app')

@section('title')
Services | Internal
@endsection

@section('logged')
<a href="{{url('/')}}" class="container btn btn-dark justify-content-center">
    Visit External Site
  </a>
@endsection

@section('nav')
        <div class="container btn-group">
            <a class="btn btn-danger active" href="{{url('/internal')}}">Services</a>
            <a class="btn btn-danger" href="{{url('/internal/notices')}}">Notices</a>
            <a class="btn btn-danger" href="{{url('/internal/reporting')}}">Reporting</a>          
        </div>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="accordion py-2" id="accordionExample">
      <div class="card">
          <div class="card-header py-1" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                IIT Hospital Tele-Medicine Consultation
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Time: 3 PM to 6 PM (Monday to Friday)
                </li>
                <li class="list-group-item">
                  Intercom: <a href="tel:011-26596628">6628</a>
                </li>
                <li class="list-group-item">
                  Give Patient medical ID, Name of patient, Medical Booklet Number , Date of Birth, Mobile Number etc.
                  <br>Confirm the slot for booking then note down the OPD Number, Time slot, and Slot number in the booklet. 
                </li>
                <li class="list-group-item">
                  At the specified Time slot patient is requested to call the Doctor on the telephone number (Landline number) as provided on 
                  <a target="_blank" href="https://hospital.iitd.ac.in/people">Hospital Website</a> as well as the same is provided on 
                  <a target="_blank" href="https://home.iitd.ac.in/administration.php#hospital">IIT Delhi Main Website</a>. 
                </li>
                <li class="list-group-item">
                  Once connected through phone during the reserved slot the Doctor would interact with the patient and will provide the Medical advise and prescribe medicines.
                  <br>Once done the Patient will have to go to the IIT Delhi Pharmacy counter and collect the medicines.
                </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-1" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Covid Patient Assistance Supply
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <h5>Security Control Room</h5>Supply of basic needs, ie vegetable, milk, fruit, medicine, etc.
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Time: 8:00 AM to 8:00 PM
                </li>
                <li class="list-group-item">
                  Mobile Number: <a href="tel:9810100112">9810100112</a>, <a href="tel:8510958400">8510958400</a>
                </li>
                <li class="list-group-item">
                  Intercom: <a href="tel:1000">1000</a>, <a href="tel:6101">6101</a>
                </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-1" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Medical Aid
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Apollo Pharmacy: <a href="tel:011-26582066">011-26582066</a>
                </li>
                <li class="list-group-item">
                  IIT Hospital: <a href="tel:011-26591500">1500</a>, <a href="tel:011-26596666">6666</a>
                </li>
                <li class="list-group-item">
                  JITM Skills Pvt Ltd. (RTPCR Testing): <a href="tel:8920435660">8920435660</a>, <a href="tel:8800405624">8800405624</a>
                  <br>Near IITD Metro Gate
                </li>
                <li class="list-group-item">
                  Bhasin Path Labs: <a href="tel:9311193111">9311193111</a>, <a href="tel:01141634173">01141634173</a> <a href="https://www.bhasinpathlabs.com">https://www.bhasinpathlabs.com</a>
                  <br>S-13, Greater Kailash-1, Block S, Part – 1, Greater Kailash, New Delhi, Delhi 110048
                </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-1" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Groceries
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body pb-0">
              <h5>East Campus</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Mother Dairy : Payphone - <a href="tel:9813076159">9813076159</a>
                </li>
                <li class="list-group-item">
                  Safal : <a href="tel:9999531012">9999531012</a>
                </li>
                <li class="list-group-item">
                  Jagbir Gupta (Vegetable and Fruit) : <a href="tel:9999895805">9999895805</a>
                </li>
                <li class="list-group-item">
                  Amit (Vegetable and Fruit) : <a href="tel:9643459617">9643459617</a>
                </li>
                <li class="list-group-item">
                  Bittu (Morning Place) : <a href="tel:8178704509">8178704509</a>, <a href="tel:9711747166">9711747166</a>
                </li>
            </ul>
            <div class="card-body pb-0">
              <h5>West Campus</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                Atbir B Gupta Store - PayTM / Google Pay : <a href="tel:8506837186">8506837186</a>
              </li>
              <li class="list-group-item">
                Laxmi Store - PayTM : <a href="tel:9891206978">9891206978</a>
              </li>
              <li class="list-group-item">
                Safal - Deepak Yadav : <a href="tel:8588836379">8588836379</a>
              </li>
              <li class="list-group-item">
                Mother Dairy - Jaiveer (Booth - 15007) : <a href="tel:8745015007">8745015007</a>
              </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection