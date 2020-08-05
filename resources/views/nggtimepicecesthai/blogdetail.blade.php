@extends('layouts.mainappth')

@section('content')
<div class="container">

<br>
    <div class="agileits_heading_section">
    <h3 class="wthree_head">{{$blog->name_blog}}</h3>
</div>
<br> <br>
<div class="container">
    <?php   echo htmlspecialchars_decode($blog->blog_detail)  ?> 
    </div>
</div>
<br><br><br>
@endsection