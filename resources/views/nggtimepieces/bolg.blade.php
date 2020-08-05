@extends('layouts.mainapp')

@section('content')
<div class="container">

<br>
    <div class="agileits_heading_section">
        <h3 class="wthree_head">Blog</h3>
</div>
<br>
    <div class="row">

        @foreach ($bolg as $item)
        <div class="col-md-4">
            <a href="{{url('/detailblog/'.Crypt::encrypt($item->id_blog))}}">
                    <div class="card_blog">
                    <img src="{{url('/img/'.$item->img)}}" class="ra"  alt="Avatar" style="width:100%">
                        <div class="container_blog">
                        <label><h4><b>{{$item->name_blog}}</b></h4> 
                          <p>{{$item->titel_blog}}</p> 
                        </label>
                        </div>
                      </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
<br><br><br>
@endsection