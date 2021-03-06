@extends('layouts.mainnewtime')

@section('content')

    <div class="banner-phone" id="banner-phone">
        <a href="https://nggtimepieces.com/rolex/"  >
            @isset($bannermobile)
            <img src="{{url('img/'.$bannermobile->img)}}" alt="">
            @endisset
    
        </a>

     <div class="row justify-content-center ">
        <label class="text-head" style="font-size: 25px; margin-top:8px" >NEW WATCHES 2021 </label>
        <a href="https://nggtimepieces.com/rolex/new-watches-2021/"  >
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
                            <label class="text-head" >NEW WATCHES 2021  </label>
                           
                        </div> 
                        <div class="img-num_2">
                            <a href="https://nggtimepieces.com/rolex/new-watches-2021/"  >
                                <button class="cta_rolex btn-size"> EXPLORE THE COLLECTION </button>
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
    <br>
    <hr class="phone-hr"> 
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h3>WELCOME TO NGG TIMEPIECES CO. LTD.</h3>
                <p>Discover only the best luxury watches and never worry about time. The watches are
                    synonym of the technical perfection and timeless aesthetics.
                    NGG Timepieces's relationship with the brand has flourished across generations and continues to grow in
                    building the network in Thailand and across the region.</p>
            </div>

        </div>
        <br>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ url('ngg/images/g2.jpg') }}" alt="" width="95%" class="img-info" />
            </div>


            <div class="col-md-6">
                <br><br>
       
<label  class="texts">
    A luxury wristwatch is something much more than a simple timepiece. It is a piece of art, a true
    exclusiveness and extreme reliability and accuracy.

</label>
                  
           
            </div>


        </div>

        <div class="row align-items-center">
            <div class="col-md-6">
                <br>
                <label class="texts">
                    A luxury wristwatch is a great way to show your status, your taste, your style. Even in spite of
                    constantly developing technologies, exclusive watches will always be in demand.
                </label>
            </div>


            <div class="col-md-6">
                <img src="{{ url('ngg/images/g1.jpg') }}" alt="" width="95%" class="img-info" />
            </div>


        </div>
    </div>

  

          
      
  
 
    <div class="container">
        <div class="row justify-content-center py-md-3">
            <div class="form-group">
                <span  style="font-size:25px; margin-top:12px">SERVICE CENTER</span>
            </div>
      
        </div>
     
        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('/contact') }}" style="color: black">
                    <img src="{{ url('ngg/images/008.jpg') }}" alt=" " class="img-info" />
                    <h4 class="text-center">WATCHES CARE</h4>
                </a>
            </div>


            <div class="col-md-6">

                <br class="br"><br class="br">
                <a href="{{ url('/faq') }}" style="color: black">

                <img src="{{ url('ngg/images/007.jpg') }}" alt=" " class="img-info" />
                <h4 class="text-center">FAQ</h4>
                </a>
            </div>


        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6">
              <a href="{{ url('/contact') }}" style="color: black">
                <img src="{{ url('ngg/images/003.jpg') }}" alt=" " class="img-info" />
                <h4 class="text-center">CONTACT US</h4>
              </a>
            </div>


            <div class="col-md-6">

                <br class="br"><br class="br">
                <a href="{{ url('i/duty') }}" style="color: black">
                <img src="{{ url('ngg/images/006.jpg') }}" alt=" " class="img-info" />
                <h4 class="text-center">DUTY FREE</h4>
                </a>
            </div>


        </div>

    </div>
  @isset($pop_show->status)
  @if (  $pop_show->status == 1)
  <a id="popupclose" href="{{url('/img/'.$pop_show->img)}}" style="display:none;"></a>
  @endif 
  @endisset
 
   
@endsection

