@extends('layouts.mainnewtime')

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

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{url('img/duty_1.jpg')}}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{url('img/duty_2.jpg')}}" alt="" width="100%">
      </div>
    </div>
    <div class="swiper-pagination">


    </div>
  </div>
</div>
@endsection


@section('javascript')
<script>
  var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
     autoplay: {
         delay: 5500,
     disableOnInteraction: false,
    },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
  });




</script>

@endsection