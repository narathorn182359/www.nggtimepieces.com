@extends('layouts.mainappth')

@section('content')
<div class="container">
    <br>
    <div class="agileits_heading_section">
        <h3 class="wthree_head">DUTY FREE</h3>
</div>
<br>

<p>VAT Refund for Tourists. Tourists who are eligable for a VAT refund</p>

<p>1. Those who are not of Thai nationality.</p>

<p>2. Those who are not a permanent resident of Thailand.</p>

<p>3. Those who are not a crew member of an airline departing from Thailand.</p>

<p>4. Those who are departing from Thailand from an international airport.</p>

<p>5. Those who purchased goods from stores displaying&nbsp;sign.</p>

<p>6. Those who purchased goods of at least 2,000 baht (VAT included) from each store per day.</p>
 
<p>How to claim your VAT refund.</p>
   
<br>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">EN</a></li>
    <li><a data-toggle="tab" href="#menu1">TH</a></li>
 
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <img src="{{url('img/duty_1.jpg')}}" alt="" width="100%">
    </div>
    <div id="menu1" class="tab-pane fade">
        <img src="{{url('img/duty_2.jpg')}}" alt="" width="100%">
    </div>
  </div>




</div>
@endsection