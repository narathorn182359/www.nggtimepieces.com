@extends('layouts.mainadmin')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      blog
    
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">blog</a></li>
  
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
        <a href="{{url('/add_blog')}}"  class="btn btn-success">เพิ่ม</a>

        </div>
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">blog</h3>
            <table class="table table-hover">
              <tr>
               
                <th>ชื่อ</th>
                <th>title</th>
                <th>เพิ่มเติม</th>
                
              </tr>
              @foreach ($blog as $item)
              <tr>
              <td>{{$item->name_blog}}</td>
              <td>{{$item->titel_blog}}</td>
                <td>
                 
                <a href="{{url('blog_edit/'.Crypt::encrypt($item->id_blog))}}" class="btn btn-warning">แก้ไข</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default{{$item->id_blog}}">
                  ลบ
                </button>


        <div class="modal fade" id="modal-default{{$item->id_blog}}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ลบข้อมูล</h4>
              </div>
              <form action="{{url('delete_blog')}}"  method="POST">
              <div class="modal-body">
           
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  ยืนยันการลบข้อมูล  {{$item->name_blog}}
                  <input type="hidden" name="id" value="{{Crypt::encrypt($item->id_blog)}}">
               
                
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