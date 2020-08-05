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
        <li><a href="#">trending
    
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
        <div class="foem-group">
            <a href="{{url('add_trending')}}" class="btn btn-success">เพิ่ม</a>
            </div>
      <div class="row">
        <div class="col-xs-12">
      
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">trending</h3>
  
            
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                      <th>รูป</th>
                 
                      <th>เพิ่มเติม</th>
                      
                    </tr>
                    @foreach ($trending as $item)
                    <tr>
                        <td>
                        <img src="{{url('/img/'.$item->img)}}" alt=""   width="350"    height="250">
                        </td>
                        <td>
                            <a href="{{url('trending_detail/'.Crypt::encrypt($item->id))}}" class="btn btn-info">ดูลายละเอียด</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id}}">
                                ลบ
                              </button>
              
              
                      <div class="modal fade" id="modal-default{{$item->id}}">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">ลบข้อมูล</h4>
                            </div>
                            <form action="{{url('delete_trending')}}"  method="POST">
                            <div class="modal-body">
                         
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                ยืนยันการลบข้อมูล  
                                <input type="hidden" name="id" value="{{Crypt::encrypt($item->id)}}">
                             
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">ตกลง</button>
              
                            </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        </td>
                    </tr>
                    @endforeach
                   


                </table>
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







