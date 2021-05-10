@extends('layouts.app')

@section('title')
Helplines
@endsection

@section('logged')
<a href="{{url('/internal')}}" class="container btn btn-dark justify-content-center">
    Visit Internal Site (Only for IIT Delhi employees)</a>
@endsection

@section('nav')
        <div class="container btn-group">      
            <a class="btn btn-danger" href="{{url('/resources')}}">Resources</a>
            <a class="btn btn-danger" href="{{url('/prediction')}}">Predictions</a>
            <a class="btn btn-danger active" href="{{url('/resources/helplines')}}">Helplines</a>          
            <a class="btn btn-danger" href="{{url('/about')}}">About</a>
        </div>
@endsection

@section('content')
<div class="container">
    <table class="table">
        <tr>
          <th><center>Sr. No.</center></th>
          <th><center>Name of the State</center></th>
          <th><center>Helpline Numbers</center></th>
        </tr>
        <tr>
          <td>1</td>
          <td>Andhra Pradesh</td>
          <td><a href="tel:0866-2410978">0866-2410978</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Arunachal Pradesh</td>
          <td><a href="tel:9436055743">9436055743</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Assam</td>
          <td><a href="tel:9436055743">6913347770</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Bihar</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Chattisgarh</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Goa</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Gujarat</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>8</td>
          <td>Haryana</td>
          <td><a href="tel:8558893911">8558893911</a></td>
        </tr>
        <tr>
          <td>9</td>
          <td>Himachal Pradesh</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>10</td>
          <td>Jharkhand</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>11</td>
          <td>Karnataka</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>12</td>
          <td>Kerala</td>
          <td><a href="tel:0471-2552056">0471-2552056</a></td>
        </tr>
        <tr>
          <td>13</td>
          <td>Madhya Pradesh</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>14</td>
          <td>Maharashtra</td>
          <td><a href="tel:020-26127394">020-26127394</a></td>
        </tr>
        <tr>
          <td>15</td>
          <td>Manipur</td>
          <td><a href="tel:3852411668">3852411668</a></td>
        </tr>
        <tr>
          <td>16</td>
          <td>Meghalaya</td>
          <td><a href="tel:108">108</a></td>
        </tr>
        <tr>
          <td>17</td>
          <td>Mizoram</td>
          <td><a href="tel:102">102</a></td>
        </tr>
        <tr>
          <td>18</td>
          <td>Nagaland</td>
          <td><a href="tel:7005539653">7005539653</a></td>
        </tr>
        <tr>
          <td>19</td>
          <td>Odisha</td>
          <td><a href="tel:9439994859">9439994859</a></td>
        </tr>
        <tr>
          <td>20</td>
          <td>Punjab</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>21</td>
          <td>Rajasthan</td>
          <td><a href="tel:0141-2225624">0141-2225624</a></td>
        </tr>
        <tr>
          <td>22</td>
          <td>Sikkim</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>23</td>
          <td>Tamil Nadu</td>
          <td><a href="tel:044-29510500">044-29510500</a></td>
        </tr>
        <tr>
          <td>24</td>
          <td>Telangana</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>25</td>
          <td>Tripura</td>
          <td><a href="tel:0381-2315879">0381-2315879</a></td>
        </tr>
        <tr>
          <td>26</td>
          <td>Uttarakhand</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>27</td>
          <td>Uttar Pradesh</td>
          <td><a href="tel:18001805145">18001805145</a></td>
        </tr>
        <tr>
          <td>28</td>
          <td>West Bengal</td>
          <td><a href="tel:1800313444222">1800313444222</a>, <a href="tel:03323412600">03323412600</a></td>
        </tr>
        <tr>
          <th><center>Sr. No.</center></th>
          <th><center>Name of the Union Territory(UT)</center></th>
          <th><center>Helpline Numbers</center></th>
        </tr>
        <tr>
          <td>1</td>
          <td>Andaman and Nicobar Islands</td>
          <td><a href="tel:03192-232102">03192-232102</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Chandigarh</td>
          <td><a href="tel:9779558282">9779558282</a></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dadra & Nagar Haveli and Daman & Diu</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>4</td>
          <td>Delhi</td>
          <td><a href="tel:011-22307145">011-22307145</a></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Jammu & Kashmir</td>
          <td><a href="tel:01912520982">01912520982</a>, <a href="tel:0194-2440283">0194-2440283</a></td>
        </tr>
        <tr>
          <td>6</td>
          <td>Ladakh</td>
          <td><a href="tel:01982256462">01982256462</a></td>
        </tr>
        <tr>
          <td>7</td>
          <td>Lakshadweep</td>
          <td><a href="tel:104">104</a></td>
        </tr>
        <tr>
          <td>8</td>
          <td>Puducherry</td>
          <td><a href="tel:104">104</a></td>
        </tr>
      </table>
</div>
@endsection
