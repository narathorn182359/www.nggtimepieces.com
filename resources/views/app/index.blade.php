@extends('layouts.app')
@section('content')

<div class="banner-phone" id="banner-phone">
    <a href="https://nggtimepieces.com/rolex/"  >
        @isset($bannermobile)
        <img src="{{url('img/'.$bannermobile->img)}}" alt="" width="100%">
        @endisset

    </a>

 <div class=" justify-content-center  text-center ">
    <label class="text-head" style="font-size: 25px; margin-top:8px" > ROLEX WATCHES </label> <br>
   
 </div>
 <div class=" row justify-content-center ">
   
    <a href="https://nggtimepieces.com/rolex"  >
        <button class="cta_rolex btn-size"> EXPLORE THE COLLECTION </button>
    </a>
 </div>
  
</div>

<div class="swiper-container "  id="foo_label">
    <div class="swiper-wrapper">
        @foreach ($banner as $item)
            @if ($loop->first)
                <div class="swiper-slide">
                     <div class="img-num">
                        <label class="text-head" >ROLEX WATCHES</label>
                       
                    </div> 
                    <div class="img-num_2">
                        <a href="https://nggtimepieces.com/rolex"  class="cta_rolex btn-size"  style="color:white" >
                           EXPLORE THE COLLECTION 
                        </a>
                    </div>
                     <img src="{{ url('img/' . $item->img) }}" alt="Los Angeles" style="width:100%;">

                </div>

            @else

                <div class="swiper-slide"> <img src="{{ url('img/' . $item->img) }}" alt="Los Angeles"
                        style="width:100%;"></div>

            @endif

        @endforeach


    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination">


    </div>
    <!-- Add Arrows -->

</div>

<section class="mt-5">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="text-black site-section-heading text-center">WELCOME TO NGG TIMEPIECES CO. LTD.</h2>
                <div class="new-center">  Discover only the best luxury watches and never worry about time. The watches are synonym of the technical perfection and timeless aesthetics. NGG Timepieces's relationship with the brand has flourished across generations and continues to grow in building 
                    the network in Thailand and across the region. </div>
            </div>
        </div>
    </div>
    <div class="container">
       

    </div>


</section>


<hr class="hr">

<section class="mt-5">
  
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="new-title">
                    <img src="{{ url('ngg/images/g2.jpg') }}" width="100%" alt="">
                 
                    <div class="new-center">
                        A luxury wristwatch is something much more than a simple timepiece. It is a piece of art, a true exclusiveness and extreme reliability and accuracy.
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="new-title">
                    <div class="new-title">
                        <img src="{{ url('ngg/images/g1.jpg') }}" width="100%" alt="">
                      
                        <div class="new-center">
                            A luxury wristwatch is a great way to show your status, your taste, your style. Even in spite of
                            constantly developing technologies, exclusive watches will always be in demand.
                        </div>
          
                    </div>
                </div>
            </div>
         
        </div>

</section>

<hr class="hr">


@isset($pop_show->status)
@if (  $pop_show->status == 1)
<a id="popupclose" href="{{url('/img/'.$pop_show->img)}}" style="display:none;"></a>
@endif 
@endisset

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







    
@endsection