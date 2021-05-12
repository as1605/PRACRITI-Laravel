@extends('layouts.app')

@section('title')
Notices | Internal
@endsection

@section('logged')
<a href="{{url('/')}}" class="container btn btn-dark justify-content-center">
    Visit External Site</a>
@endsection

@section('nav')
        <div class="container btn-group">
            <a class="btn btn-danger" href="{{url('/internal')}}">Services</a>
            <a class="btn btn-danger active" href="{{url('/internal/notices')}}">Notices</a>
            <a class="btn btn-danger" href="{{url('/internal/reporting')}}">Reporting</a>          
        </div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card my-1">
            <a target="_blank" href="https://owncloud.iitd.ac.in/nextcloud/index.php/s/LQpYnFwACYwncPL">
                <div class="card-header">Reporting of Covid Positive Cases (Internal)</div>
            </a>
        </div>
        <div class="card my-1">
            <a target="_blank" href="https://owncloud.iitd.ac.in/nextcloud/index.php/s/ZE8BQX3xGpLaxJY">
                <div class="card-header">Clinical guidance for management of adult Covid-19 patient</div>
            </a>
        </div>
        <div class="card my-1">
            <a target="_blank" href="https://owncloud.iitd.ac.in/nextcloud/index.php/s/omQe7BmEzPXoW8z">
                <div class="card-header">Regarding help no for Covid'19 issue patient in IIT Campus</div>
            </a>
        </div>
        <div class="card my-1">
            
                <div class="card-header">UPDATED PROCEDURE/GUIDELINES - FOR ONLINE SUBMISSION OF MEDICAL REIMBURSEMENT CLAIMS FOR SERVING EMPLOYEES</div>

            <div class="card-body">
                Employee have access through eadmin portal using url:- <a target="_blank" href="https://eadmin.iitd.ac.in/IITD-0/login">https://eadmin.iitd.ac.in/IITD-0/login</a>
            <br>Click on the eadmin and logon with your kerberos credentials
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    After login In,  click on the Employee Self Service. Within "Employee Self Service" there will be the submenu of "Medical Reimbursement", within this submenu  click on "Apply Medical Reimbursement".
                </li>
                <li class="list-group-item">
                    The previously applied Medical Reimbursement (if any) will be displayed on the page. In order to apply for new claim click on "Apply Now" button.
                    The form has been categorized further based on treatment type " Allopathy/Homeopathy/ayurveda/Unani "
                    Depending on whatever kind of claim accordingly the type may be chosen.
                    <br>
                    In case where the employee just wants to claim for Investigations or Other Item claims, then also
                    the employee has to click on Allopathy and they can fill in the appropriate section.
                </li>
                <li class="list-group-item">
                    After this, the employee has to choose the claim for whom : Self or his/her dependent which will be shown
                    in the drop down (System will display the active names only)
                </li>
                <li class="list-group-item">
                    After completing the application and submission, a form number is generated
                    and status of form is also shown to user every time.  Form once submitted cant be edited **
                    <ol>
                        <li> After submission of the form Please take a Print out which will be available
                            under the View option of the Medical reimbursement submitted on the List page.
                        <li> Sign at the end of the form (at the space provided)
                        <li> Attach the  Photocopy of Doctor prescription and Photocopy of First Page of Medical Booklet having
                            photo of the patient
                        <li> Attach the Original Bill along with the above documents and send it to reimbursement cell.
                    </ol>
                    **  If there is any query raised by the Medical Reimbursement processing centre, then there will be a mail from Reimbusement cell
                    with the query to the user. In that case the form status will change to  "Query by Processing Center".  Then the user can edit the
                    form and resubmit the form to reimbursement cell.</li>
                <li class="list-group-item">
                    The system is LIVE now and henceforth no Manual medical reimbursement claim form will be
                    accepted by the Reimbursement cell (from Regular serving employees of the Institute). Any technical query regarding the system
                    please send mail to eadminhelp@iitd.ac.in
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection