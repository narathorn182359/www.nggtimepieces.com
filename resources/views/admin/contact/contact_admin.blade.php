@extends('layouts.mainadmin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      contact
    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">contact</a></li>
  
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
     
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">contact</h3>

          
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>สถานะ</th>
                <th>วันที่</th>
                <th>ชื่อ</th>
                <th>อีเมล์</th>
                <th>โทรศัพ</th>
                <th>เพิ่มเติม</th>
                
              </tr>
              @foreach ($contact as $item)
              <tr>
                <td>
                  @if($item->send_mail == '0')
                  <span class="label label-danger">ยังไม่ได้ตอบ</span>
                  @else
                  <span class="label label-success">ตอบแล้ว</span>
                  @endif
                  
                
                
                </td>
                <td>{{$item->created_at}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->phone}}</td>
            
                <td>
                  <a href="{{url('contact_detail/'.Crypt::encrypt($item->id))}}" class="btn btn-info">ดูลายละเอียด</a>
        
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
              <form action="{{url('delete_contact')}}"  method="POST">
              <div class="modal-body">
           
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  ยืนยันการลบข้อมูล  {{$item->name}}
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
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
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

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
@endsection