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
  <section class="content">
      <div class="form-group">
      <a href="{{url('/contact_admin')}}"  class="btn btn-info" >ย้อนกลับ</a>
      </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">contact</h3>
          </div>
          <div class="box-body">
            <dl>
                <dt>วันที่</dt>
                <dd>{{$contact->created_at}}</dd>
                <dt>ชื่อ</dt>
            <dd>{{$contact->name}}</dd>
                <dt>อีเมล์</dt>
                <dd>{{$contact->email}}</dd>
             
                <dt>ความคิดเห็น</dt>
            <dd>{{$contact->message}}</dd>
            <dt>
สถานะ
            </dt>
            <dd>@if($contact->send_mail == '0')
                <span class="label label-danger">ยังไม่ได้ตอบ</span>
                @else
                <span class="label label-success">ตอบแล้ว</span>
                @endif</dd>
              </dl>
          </div>
        </div>
    </div>
  </section>
  
</div>
@endsection