@extends('layouts.mainadmin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      banner
    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">banner</a></li>
  
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
        <a href="{{url('/add_banner')}}"  class="btn btn-success">เพิ่ม</a>

        </div>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">จัดการแบบเบอร์</h3>
            <table class="table table-hover">
              <tr>
                <th>ชื่อ</th>
                <th>รูป</th>
                <th>สถานะ</th>
                <th>เพิ่มเติม</th>
              </tr>
              @foreach ($banner as $item)
              <tr>
              <td>{{$item->name_banner}}
              
              
              </td>
              <td>  <img src="{{url('img/'.$item->img)}}" class="img-thumbnail" alt="Cinque Terre" width="40%">
              <span class="text-danger">
                *ห้ามลบรูปนี้ แก้ไขเท่านั้น
              </span>
              
              </td>
              <td>{{$item->active}}</td>
                <td>
                <a href="{{url('banner_edit/'.Crypt::encrypt($item->id_banner))}}" class="btn btn-warning">แก้ไข</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id_banner}}">
                  ลบ
                </button>
        <div class="modal fade" id="modal-default{{$item->id_banner}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ลบข้อมูล</h4>
              </div>
              <form action="{{url('delete_banner')}}"  method="POST">
              <div class="modal-body">
           
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  ยืนยันการลบข้อมูล  {{$item->name_banner}}
                  <input type="hidden" name="id" value="{{Crypt::encrypt($item->id_banner)}}">
               
                
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
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
          
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
</section>
    </div>

@endsection




@section('script')







    
@endsection