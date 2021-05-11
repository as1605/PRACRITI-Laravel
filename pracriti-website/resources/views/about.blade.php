@extends('layouts.app')

@section('title')
About
@endsection

@section('logged')
<a href="{{url('/internal')}}" class="container btn btn-dark justify-content-center">
    Visit Internal Site (Only for IIT Delhi employees)</a>
@endsection

@section('nav')
        <div class="container btn-group">      
            <a class="btn btn-danger" href="{{url('/resources')}}">Resources</a>
            <a class="btn btn-danger" href="{{url('/prediction')}}">Predictions</a>
            <a class="btn btn-danger " href="{{url('/resources/helplines')}}">Helplines</a>          
            <a class="btn btn-danger active" href="{{url('/about')}}">About</a>
        </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
        <div class="card text-center my-2">
            <div class="card-header">
                <h2>PRACRITI 2.0</h2>
            </div>
            <div class="card-body">
                <p class="card-text">PRACRITI, the acronym for Prediction, Response and Assessment of CoRona Infections and Transmission in India, is a mobile-friendly web portal that is freely accessible to everyone. It gives detailed state-wise predictions of COVID-19 and aims to provide details of verified resources for COVID-19 patients, including Oxygen cylinders, Hospital beds, Plasma donors, Online consultation, Vaccine availability and Helpline numbers across India. PRACRITI is developed and maintained by a group of volunteers from IIT Delhi. </p>
            </div>
        </div>
        <br/>
        <div class="card text-center my-2">
            <div class="card-header">
                <h2>FAQs</h2>
            </div>
            <div class="card-body p-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/68IOMBMeaoY" allowfullscreen></iframe>
                </div>
            </div>

            <div class="accordion" id="accordionExample" >
        <div class="card">
          <div class="card-header py-0" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How are the predictions made in PRACRITI?
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              The COVID-19 predictions are based on a recent mathematical model, namely, Adaptive, Interacting, Cluster-based, Susceptible, Exposed, Infected, Removed (AICSEIR) model. This is a modified form of the traditional SEIR model and it caters to the interactions between sub-populations such as districts or states. It represents a more realistic approach towards the prediction of the COVID-19 trajectory than the traditional SEIR models. 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What details are used for developing the PRACRITI predictions?
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              PRACRITI requires the population of each state, the distance between the capital cities of the states, the number of tourists visiting a state, and the initial infected population in a district (this could be zero as well).
          </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              When was PRACRITI launched?
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            PRACRITI was launched in April 2020 and has been continuously maintained eversince. 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingFour">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              How frequently is the data and predictions updated?
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
            The predictions in PRACRITI are updated every week. It was last updated on May 06, 2021                
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingFive">
            <h2 class="mb-0" >
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              What is the meaning of R0?
              </button>
            </h2>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
            In epidemiology, R0 is known as the basic reproduction number. R0 of infection refers to the number of people who are newly infected from a currently infected person. Reducing the R0 is the key to reducing the transmission of infections.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingSix">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              What is the uniqueness of the PRACRITI?
              </button>
            </h2>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
            PRACRITI is the only model, to the best of our knowledge, which provides the state-wise R0 values on a continuous basis. This enables the identification of the rate of spread of the COVID19 in each of the states in India. 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingSeven">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              How is PRACRITI useful?
              </button>
            </h2>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
            The predictions provided by PRACRITI can potentially guide governmental authorities, healthcare professionals, NGOs, and the general public on devising effective strategies for control and mitigation of COVID19. Using the Resources section, people can directly find resources like oxygen cylinders, hospital beds, plasma donors, vaccine centers and their availability and much more
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingEight">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              How accurate are these predictions?
              </button>
            </h2>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div class="card-body">
            The accuracy of the predictions will depend on the variations in the parameters, including different lockdown strategies implemented, weather variations, testing kits availability, and the development of any remedial measures. To account for these variabilities, the predictions are updated every week. 
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingNine">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              Can PRACRITI be applied to other countries also?
              </button>
            </h2>
          </div>
          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
            Yes, this model is flexible and can be applied to other regions/countries with suitable straightforward adaptations.  
          </div>
        </div>
        <div class="card">
          <div class="card-header py-0" id="headingTen">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              What is the relevance of PRACRITI to other countries?
              </button>
            </h2>
          </div>
          <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
            <div class="card-body">
            PRACRITI is a tool that will enable governments, healthcare authorities, and other agencies to develop efficient resource allocation strategies and control the spread of infection.
          </div>
        </div>
  </div>
</div>
</div>
        </div>
        <br/>
        <div class="card text-center my-2">
            <div class="card-header">
                <h2>Team</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h4 class="m-0">Faculty Mentors</h4>
                    Prof. N. M. Anoop Krishnan, Indian Institute of Technology Delhi
                    <br>Prof. Amit Sharma, International Centre for Genetic Engineering and Biotechnology 
                </li>
                <li class="list-group-item">
                    <h4 class="m-0">Technical Support</h4>
                    Dr. Manish Agarwal, Computer Services Center, Indian Institute of Technology Delhi
                </li>
                <li class="list-group-item">
                    <h4 class="m-0">Contributers</h4>
                    Ravinder, PhD Research Scholar, Multiphysics & Multiscale Mechanics Research Group, IIT Delhi
                    <br>Yashwant Lodhi, Project Staff, Multiphysics & Multiscale Mechanics Research Group, IIT Delhi
                    <br>Aditya Singh, Undergraduate Student, IIT Delhi
                    <br>Anurag Gupta, Undergraduate Student, IIT Delhi
                    <br>Asmita Mehta, Undergraduate Student, IIT Delhi
                    <br>Aviral Gupta, Undergraduate Student, IIT Delhi
                    <br>Deepit Patil, Undergraduate Student, IIT Delhi
                    <br>Sanat Vohra, Undergraduate Student, IIT Delhi
                    <br>Shashwat Gokhe, Undergraduate Student, IIT Delhi
                    <br>Radhika Agwan, Undergraduate Student, IIT Delhi
                </li>
            </ul>
        </div>
        <br/>
        <div class="card text-center my-2">
            <div class="card-header">
                <h2>References</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                Ravinder, R. et al. An Adaptive, Interacting, Cluster-based Model Accurately Predicts the Transmission Dynamics of COVID-19, 2020. <a target="_blank" href="https://www.sciencedirect.com/science/article/pii/S2405844020325652">(link)</a>
                </li>
                <li class="list-group-item">
                Keeling, M. J. & Rohani, P. Modeling Infectious Diseases in Humans and Animals. (Princeton University Press, 2011).
                </li>
                <li class="list-group-item">
                Adam, D. Special report: The simulations driving the world’s response to COVID-19. Nature 580, 316–318 (2020).
                </li>
            </ul>
        </div>
        <br/>
       
</div>
@endsection