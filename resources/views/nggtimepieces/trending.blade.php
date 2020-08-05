@extends('layouts.mainnewtime')

@section('content')
<br>
<div class="agileits_heading_section">
    <h3 class="wthree_head">WHAT'S TRENDING</h3>
  
    <br>
</div>
    @foreach ($trending as $item)
        
<img src="{{url('img/'.$item->img)}}" alt="" width="100%">
<br> <br>
<div class="container">
<?php   echo htmlspecialchars_decode($item->detail)  ?> 
</div>
    @endforeach


@endsection