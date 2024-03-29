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
          <div class="card-header py-1" id="heading1">
          <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
            Resident Support Group
          </button>
          </div>
          <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
            <div class="card-body">
            Resident Support Group is a community formed by residents of IIT Delhi to support each other and aid with Emotional support, Grocery delivery, meal delivery, medicine delivery, booking tests, booking Doctor Consultations, arranging ambulance/ transport, facilitate searching for bed and oxygen support.
            The residents may connect to any of the volunteers in case of any support required.
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>Swapna Mishra</strong> (Email ID: <a href="mailto:swapnamishra@yahoo.com">swapnamishra@yahoo.com</a> Contact No.: <a href="tel:9958007453">9958007453</a>)
                <br>Offered to assist with Emotional support, Grocery delivery, meal delivery, medicine delivery, booking tests & booking doctor consultation.
              </li>
              <li class="list-group-item">
                <strong>Paras Gupta</strong> (Email ID: <a href="mailto:Paras.Gupta@mech.iitd.ac.in">Paras.Gupta@mech.iitd.ac.in</a> Contact No.: <a href="tel:9540246784">9540246784</a>)
                <br>Offered to assist with Grocery delivery, meal delivery, medicine delivery, booking tests, booking doctor consultation, arranging ambulance/transport support, facilitate searching for bed in hospital & facilitate arranging oxygen support
              </li>
              <li class="list-group-item">
                <strong>Shraddha Marathe</strong> (Email ID: <a href="mailto:maratheshraddha@gmail.com">maratheshraddha@gmail.com</a> Contact No.: <a href="tel:9999061085">9999061085</a>)
                <br>Offered to assist with Emotional support, Grocery delivery, meal delivery, medicine delivery, booking tests, booking doctor consultation, arranging ambulance/transport support, facilitate searching for bed in hospital & facilitate arranging oxygen support
              </li>
              <li class="list-group-item">
                <strong>Prabha Shahu</strong> (Email ID: <a href="mailto:prabhashahu64@gmail.com">prabhashahu64@gmail.com</a> Contact No.: <a href="tel:8745027483">8745027483</a>)
                <br>Offered to assist with Emotional support ,medicine delivery, booking tests, booking doctor consultation, arranging ambulance/transport support & facilitate searching for bed in hospital.
              </li>
              <li class="list-group-item">
                <strong>Amita Deshmukh</strong> (Email ID: <a href="mailto:amitasgd67@gmail.com">amitasgd67@gmail.com</a> Contact No.: <a href="tel:9891520845">9891520845</a>)
                <br>Offered to assist with meal delivery.
              </li>
            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-1" id="headingNew">
            <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseNew" aria-expanded="true" aria-controls="collapseNew">
              IIT Hospital Tele-Medicine Consultation
            </button>
          </div>
          <div id="collapseNew" class="collapse" aria-labelledby="headingNew" data-parent="#accordionExample">
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
          <div class="card-header py-1" id="heading0">
            <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="true" aria-controls="collapse0">
              Live Doctor Tele-Consultation
            </button>
          </div>
          <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordionExample">
            <div class="card-body">
              List of doctors who have volunteered to offer their consultation services to IIT Delhi community.
              <ul>
                <li>Dr. Shobhit Saxena (Critical care intensivist) - 
                  <a href="https://api.whatsapp.com/send/?phone=917985137933">
                  7985137933
                  </a> 
                </li>
                <li>Dr. Shruti Desai - 
                  <a href="tel:9825613425">
                  9825613425
                  </a> 
                </li>
                <li>Dr. Pranjali Gupta - 
                  <a href="tel:9953830791">
                  9953830791
                  </a> 
                </li>
                <li>Dr. Satyam Singh  - 
                  <a href="tel:9792172469">
                  9792172469
                  </a> 
                </li>
                <li>Dr. J Aarthi - 
                  <a href="tel:8447606358">
                  8447606358
                  </a> 
                </li>
                <li>Dr. Shagun Sood - 
                  <a href="tel:9650449943">
                  9650449943
                  </a> - 
                  <a href="mailto:drshagunsood@gmail.com">
                  drshagunsood@gmail.com     
                  </a>
                </li>
                <li>Dr. Shruti - 
                  <a href="tel:8168304718">
                  8168304718
                  </a> 
                </li>
                <li>Dr. Richa Sharma - 
                  <a href="tel:9425615516">
                  9425615516
                  </a> 
                </li>
                <li>Dr. Anupama Rao - 
                  <a href="tel:9322108991">
                  9322108991
                  </a> 
                </li>
                <li>Dr. Anirudh Munjal - 
                  <a href="tel:7982639008">
                  7982639008
                  </a> - 
                  <a href="mailto:anirudhmunjal52@gmail.com">
                  anirudhmunjal52@gmail.com
                  </a>
                </li>
                <li>Dr. Ashirwaad Sharma  - 
                  <a href="tel:9717925605">
                  9717925605
                  </a> 
                </li>
                <li>Dr. Sukanya Thakur - 
                  <a href="tel:8586886817">
                  8586886817
                  </a> 
                </li>
                <li>Dr. R. C. Verma - 
                  <a href="tel:9839039896">
                  9839039896
                  </a> 
                </li>
                <li>Dr. Shrey Chandrakar - 
                  <a href="tel:7224821219">
                  7224821219
                  </a> - 
                  <a href="mailto:shreychandrakar@gmail.com">
                  shreychandrakar@gmail.com
                  </a>
                </li>
                <li>Dr. Krithika (AIIMS) - 
                  <a href="tel:9810488850">
                  9810488850
                  </a> 
                </li>
                <li>Dr. Anjul Kumar - 
                  <a href="tel:9170773344">
                  9170773344
                  </a> 
                </li>
                <li>Dr. Muhammad Azhar Masoodi - 
                  <a href="tel:7006912534">
                  7006912534</a>,   
                  <a href="tel:9797204498">
                  9797204498
                  </a> 
                </li>
                <li>Dr. Anup Agarwal - 
                  <a href="tel:9891190111">
                  9891190111
                  </a> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-1" id="headingOne">
            <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Covid Patient Assistance Supply
            </button>
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
            <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Medical Aid
            </button>
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
            <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Groceries
            </button>
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
