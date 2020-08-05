@extends('layouts.mainnewtime')

@section('content')

    <div class="container">
        <br>
        <div class="agileits_heading_section">
            <h3 class="wthree_head">BOUTIQUE</h3>
        </div>





        <div class="row ">
          @foreach ($boutiuqes as $item)
  
          <figure class="darkcard">
          <img src="{{url('img/photo-card.jpeg')}}" alt="sample87" />
            <figcaption>
              <h2>{{ $item->name_boutiuqes }}</h2>
      
      
              <?php echo htmlspecialchars_decode($item->boutiuqes_detail); ?>
      
            </figcaption>
          </figure>
      
      
      
        
          @endforeach




        </div>
    </div>
  

    <br><br>
@endsection



@section('javascript')
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 10,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

        });

    </script>

@endsection
