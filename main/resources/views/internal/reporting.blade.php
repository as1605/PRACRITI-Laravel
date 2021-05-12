@extends('layouts.app')

@section('title')
Reporting | Internal
@endsection

@section('logged')
<a href="{{url('/')}}" class="container btn btn-dark justify-content-center">
    Visit External Site</a>
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
      <div class="card py-1 my-3">
        <div class="card-header">
        <h4>REPORTING AND MONITORING OF COVID POSITIVE CASES</h4>
        </div>
        <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h5 class="m-0">Reporting of Covid Positive Cases</h5>
                    <a href="mailto:covidreporting@admin.iitd.ac.in?cc=nodaloffcovd@admin.iitd.ac.in&subject=Covid%20Positive%20case%20reporting.&body=1%20Name%20of%20Patient%20along%20with%20(entryno/emp%20medical%20id/employeeied):%0A2%20Mobile%20Number:%0A3%20Email%20ID:%0A4%20Date%20of%20reporting%20Positive%0A5%20Blood%20Group%0A6%20Gender%0A7%20In%20or%20Out%20Campus%0A8%20Age%0A9%20Address%0A10%20Emergency%20Contact%20No%0A11%20Emergency%20Address%0A12%20Comorbidities%20if%20any%0A13%20Hostel%20Detail%20in%20case%20student%0APFA%20RTPCR%20RapidAntigen%20Report">
                      Direct email link with format
                    </a>
                    <br>
                    All covid positive cases henceforth (from 29 Apr 2021) have to be reported by all employees and students to the Email ID only - covidreporting@admin.iitd.ac.in with a copy to email : nodaloffcovd@admin.iitd.ac.in  .  The subject
                    of the email may please be mentioned as : "Covid Positive case reporting."
                    The data has to be reported in the following sequence :
                    <ol>
                      <li> Name of Patient along with (entryno/emp medical id/employeeied)
                      <li> Mobile Number
                      <li> Email id
                      <li> Date of reporting Positive
                      <li> Blood Grp
                      <li> Gender
                      <li> IN/Out Campus
                      <li> Age
                      <li> Address
                      <li> Emergency contact No
                      <li> Emergency address
                      <li> Comorbidity (if any)
                      <li> Hostel detail (in case of student)
                    </ol>
                    The RTPCR or Rapid Antigen report in PDF must be uploaded in the email for self family members as applicable. 
                    The information so received by the IIT Nodal Office, will be entered in the system and a record will be generated which will be visible
                    to the concerned Employee/student who reported the case and the same will be visible to the Doctors also.
                </li>
                <li class="list-group-item">
                    <h4 class="m-0">Instruction for Patients (Employees/Dependents/Students)</h4>
                    <h5>Reporting on ERP</h5>
                    The patient is now supposed to enter the Vital stats from this stage onwards like 
                    <ul>
                      <li>Oximeter reading
                      <li>Temprature, pulse reading
                      <li>Blood pressure reading (if any)
                      <li>Sugar level (if any)
                      <li>other related information
                    </ul>
                    on a free text field and Date and time of reading in the ERP
                    module (Under the name Quarantineservices-> Patient Registration Desk->List of Corona Patients) .
                    <br>
                    The patient has to be very careful while furnishing this information on ERP portal as this is a very vital information based on which Doctors
                    will be making advice/guidance for covid recovery. Readings need to be entered twice in a day by the concerned patient(s).
                    <br>
                    Links for entering the readings:<br>
                    For Employee/Dependent : <a target="_blank" href="https://eadmin.iitd.ac.in">https://eadmin.iitd.ac.in</a> (Then click the eadmin services)
                    <br>For Students : <a target="_blank" href="https://ecademics.iitd.ac.in/sportal">https://ecademics.iitd.ac.in/sportal</a>
                    <h5>Reporting Via Email</h5>
                    <a href="mailto:covidreporting@admin.iitd.ac.in?cc=nodaloffcovd@admin.iitd.ac.in&subject=Covid%20Vital%20stats%20reporting%20(employee%20medical%20id%2FStudent%20ID%2C%20Name%20of%20patient)%20Employee%20Id%20or%20student%20ID%3A&body=Date%20and%20Time%20of%20reading%20%3A%0AOxymeter%20reading%3A%0ATemprature%20%3A%0APulse%20reading%20%3A%0ABlood%20Pressure%20(reading%20if%20any)%20%3A%0ABlood%20sugar%20(reading%20if%20any)%0AOther%20Information%20%3A">
                      Direct email link with format
                    </a>
                    <br>
                    Any employee one who stays outside campus and wants to avail this facility he/she must
                    have a VPN access through which he/she can access ERP portal of IIT Delhi.
                    In case the employee or dependent or students are unable to access ERP system through
                    VPN or any other due to any reason, they can send an  email to covidreporting@admin.iitd.ac.in
                    with the subject tagline as "Subject : Covid Vital stats reporting (employee medical id/Student ID, Name of patient) Employee Id or student ID:"

                    Then in the email please provide all the vital stats like -
                    <ol>
                      <li>Date and Time of reading :
                      <li>Oxymeter reading:
                      <li>Temprature :
                      <li>Pulse reading :
                      <li>Blood Pressure (reading if any) :
                      <li>Blood sugar (reading if any)
                      <li>Other Information :
                    </ol>
                </li>
                <li class="list-group-item">
                    <h4 class="m-0">OTHER IMPORTANT INFORMATION FOR FACULTY/STAFF/STUDENTS</h4>
                    All the Covid positive reported cases shall be monitored by the IIT Doctors on a daily basis for 17 days and Doctors shall be
                    providing their observations which the patient will be able to read by logging in to ERP system. If required, Doctors may
                    even talk to the patients in case if the Doctor needs more information.
                    <br>
                    Incomplete Information will not be processed. Only in case of any specific issues, not covered above, should be reported to
                    nodaloffcovd@admin.iitd.ac.in
                </li>
            </ul>
      </div>
    </div>
  </div>
</div>
@endsection
