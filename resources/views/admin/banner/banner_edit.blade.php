@extends('layouts.mainadmin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Banner</li>
      </ol>
    </section>

    <section class="content">
   
    <div class="col-md-12">
      <div class="form-group">
        <a  href="{{url('banner')}}"   class="btn btn-primary ">ย้อนกลับ</a>
      </div>
    
      <!-- USERS LIST -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Blog</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          
        <form role="form" action="{{route('edit_banner',$banner->id_banner)}}"   method="POST"  enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="name_boutiuqes">รูปเดิม</label>
                    <img src="{{url('img/'.$banner->img)}}" alt="" width="150"  height="100">
                      </div>
                  <div class="form-group">
                    <label for="name_boutiuqes">รูป</label>
                    <input type="file" class="form-control" id="img" name="img" >
                  </div>
                  <div class="form-group">
                    <label for="name_boutiuqes">ชื่อ</label>
                    <input type="text" class="form-control" id="name_banner" name="name_banner" required value="{{$banner->id_banner}}">
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-success">บันทึก</button>
                </div>
              </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
       
        </div>
        <!-- /.box-footer -->
      </div>
      <!--/.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>








    

</div>
@endsection