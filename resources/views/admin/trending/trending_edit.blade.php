@extends('layouts.mainadmin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        trending
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">trending</a></li>
    
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="fprm-group">
            <a href="{{url('trending_admin')}}"  class="btn btn-info">ย้อนกลับ</a>
      </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">trending</h3>
              <form role="form"  action="{{url('edit_trending',$trending->id)}}" enctype="multipart/form-data"   method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                
       <div class="form-group">
    <label for="exampleInputFile" >รูปเดิม</label>
         <img src="{{url('/img/'.$trending->img)}}" alt=""   width="350" height="150">

  </div> 
                  <div class="form-group">
                    <label for="exampleInputFile" >File input</label>
                    <input type="file" id="img"    name="img"  >

                  </div>


                  <textarea id="editor1" name="editor1" rows="10" cols="80">
                    {{$trending->detail}}
                </textarea>





                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            



            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  @endsection








