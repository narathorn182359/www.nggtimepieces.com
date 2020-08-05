@extends('layouts.mainadmin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        boutiuqes
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Boutiuqes</li>
      </ol>
    </section>

    <section class="content">
   
    <div class="col-md-6">
      <div class="form-group">
        <a  href="{{url('boutiuqes_admin')}}"   class="btn btn-primary ">ย้อนกลับ</a>
      </div>
    
      <!-- USERS LIST -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">boutiuqes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          
        <form role="form" action="{{url('save_boutiuqes')}}"   method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="box-body">
                  <div class="form-group">
                    <label for="name_boutiuqes">ชื่อ</label>
                    <input type="text" class="form-control" id="name_boutiuqes" name="name_boutiuqes">
                  </div>
                  <textarea id="boutiuqes_detail" name="boutiuqes_detail" rows="10" cols="80"  name="">
                    
           </textarea>
        
                </div>
                <!-- /.box-body -->
  
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