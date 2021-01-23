@extends('layouts.mainadmin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        จัดการแสดงวันสำคัญ
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">จัดการแสดงวันสำคัญ</a></li>
    
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group">
        
  
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">จัดการแสดงวันสำคัญ</h3>
              <table class="table table-hover">
                <tr>
               
                  <th>รูป</th>
                  <th>สถานะ</th>
                  <th>เพิ่มเติม</th>
                  @foreach ($pop_show as $item)
                      
                    <tr>
                      
                        <td>  <img src="{{url('img/'.$item->img)}}" class="img-thumbnail" alt="Cinque Terre" width="20%">
                            <span class="text-danger">
                              *ห้ามลบรูปนี้ แก้ไขเท่านั้น
                            </span>
                            
                            </td>
                        <td>
                            @if ($item->status == 1)
                            <span class="text-success">แสดง</span>
                            @else
                            <span class="text-danger">ไม่แสดง</span>
                            @endif
                        </td>
                        <td>
                          <a href="javascript:void(0)" class="btn btn-success enable" data-id="{{$item->id}}">ปิด / เปิด </a>
                          <a href="javascript:void(0)" class="btn btn-warning editppimg" data-id="{{$item->id}}"> แก้ไข</a>

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
  

      <div class="modal fade" id="modal-popimg">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">แก้ไขโชว์แสดงวันสำคัญ</h4>
            </div>
            <form id="form-save-pop">
            <div class="modal-body">
          
            <input type="hidden" name="id" id="id"  >
             
                
                    <input type="file" name="imgpop" id="imgpop"  accept="image/*"  onchange="encodeImageFileAsURL1(this)">

               
                <input type="hidden" name="imgpopimg" id="imgpopimg" required >
              
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection


@section('script')

<script>
     function encodeImageFileAsURL1(element) {
        var file = element.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {

            $('#imgpopimg').val(reader.result);
        }
        reader.readAsDataURL(file);
    }
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });


    

    $("body").on("click", ".enable", function () {
        var id = $(this).data("id");
        var url_enable = $('#url_enable').val();
        $.ajax({
            data: {
              id:id
            },
            url: url_enable,
            type: "POST",
            dataType: 'json',
            success: function (data) {
              alert('success');
               window.location.reload();
            },
            error: function (data) {
              alert('error');
            }
        });



    })

    $("body").on("click", ".editppimg", function () {
        var id = $(this).data("id");
        var  url_geteditimgpop = $('#url_geteditimgpop').val();
        $.get( url_geteditimgpop + "/" + id, function (data) {
            $('#modal-popimg').modal('show');
            $('#id').val(data.id);
         }); 
    })

    $("#form-save-pop").submit(function(e) {
        var url_saveimgpop = $('#url_saveimgpop').val();
        e.preventDefault();
          $.ajax({
            data: $('#form-save-pop').serialize(),
            url: url_saveimgpop,
            type: "POST",
            dataType: 'json',
            success: function (data) {
              alert('success');
               window.location.reload();
            },
            error: function (data) {
              alert('error');
            }
        });
    });




});
</script>

@endsection