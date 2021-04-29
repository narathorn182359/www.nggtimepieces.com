@extends('layouts.app')

@section('content')
<section>


    <div class="container">
        <br>
        <div class="agileits_heading_section">
            <h3 class="wthree_head">BOUTIQUE</h3>
        </div>





        <div class="row ">
          @foreach ($boutiuqes as $item)
          <div class="col-md-6 "> 
          <div class="darkcard">
          <img src="{{url('img/photo-card.jpeg')}}" alt="sample87" />
            <figcaption>
              <h2>{{ $item->name_boutiuqes }}</h2>
      
      
              <?php echo htmlspecialchars_decode($item->boutiuqes_detail); ?>
      
            </figcaption>
          </div>
        </div>
      
      
        
          @endforeach




        </div>
    </div>
</section>

    <br><br>
@endsection



