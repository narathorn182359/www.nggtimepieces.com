<?php
$name_key = $userdata->user_key; // show key md5 name
$fullname = @prefixConvertorUsername($name_key);
?>
<script type="text/javascript">
    $(document).ready(function() {
        var datatableAjax = $('#responsive-data-table-its').dataTable({
            "processing": false,
            "serverSide": true,
            "ajax": {
                "url" : "./erp/dataserver.php",
                "type" : "POST"
            },
            "searching": false
        });
 /*        setInterval(function() {
          $('#responsive-data-table-its').DataTable().ajax.reload();;
}, 3000 ); */
    });
 
</script>
<?php
if (isset($_POST['save_offcase'])) {
  if (addslashes($_POST['off_case_status']) != NULL && addslashes($_POST['date_off_case']) != NULL) {
    $getdata->my_sql_update(
      $connect,
      "problem_list",
      "card_status='" . addslashes($_POST['off_case_status']) . "',
      admin_update='" . $name_key . "',
      date_update='" . addslashes($_POST['date_off_case']) . "',
      time_update='" . date("H:i:s") . "'", //เพิ่ม เวลา
      "code_id='" . addslashes($_POST['card_key']) . "'"
    );

    $getdata->my_sql_insert(
      $connect,
      "problem_comment",
      "card_status='" . addslashes($_POST['off_case_status']) . "',
      admin_update='" . $name_key . "',
      comment='" . addslashes($_POST['comment']) . "',
      date ='" . date("Y-m-d H:i:s") . "',
      code_id='" . addslashes($_POST['card_key']) . "'"
    );


    // ส่งข้อมูลเข้าไลน์
    $code_id = $_POST['code_id'];
    $name_admin = $_POST['admin'];
    $status = $_POST['off_case_status'];
    $date_send = date('d/m/Y');
    $time_send = date("H:i");

    $line_token = "jts2xa8yfULEZQl9tC3NQeSK93vsEFjVWJKrGcMjztc"; // Token
    $line_text = "
         /*** ตอบรับการดำเนินการ ***/
         ------------------------
         code_id: {$code_id}
         ------------------------
         ผู้ดำเนินการ: คุณ {$name_admin}
         สถานะ: { " . @cardStatus_for_line($status) . " }
         ------------------------
         วันที่: {$date_send}
         เวลา: {$time_send}
         ";

    lineNotify($line_text, $line_token); // เรียกใช้ Functions line

    $alert = $success;
    echo "<META HTTP-EQUIV='Refresh' CONTENT = '1; URL='" . $SERVER_NAME . "'>";
  } else {
    $alert = $warning;
  }
}
?>
<?php echo $name_admin; ?>
<script>
   /* time in milliseconds (ie 2 seconds)*/
</script>
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fas mdi-database"></i> รายการแจ้งปัญหา <u>  </u></h3>
  </div>
</div>

<!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page"><a href="index.php">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">IT-Service</li>
  </ol>
</nav> -->

<nav aria-label="breadcrumb" class="mt-3 mb-3">
  <ol class="breadcrumb breadcrumb-inverse">
    <li class="breadcrumb-item">
      <a href="index.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">ERP - Service</li>
  </ol>
</nav>



<div class="modal fade" id="show_case"" tabindex=" -1" role="dialog" aria-labelledby="show_case" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="show_case">

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="off_case"" tabindex=" -1" role="dialog" aria-labelledby="off_case" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate id="waitsave">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">ดำเนินการ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="offcase">

        </div>
      </div>
    </form>
  </div>
</div>

<?php echo @$alert; ?>

<div class="row">
  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">จำนวนรายการแจ้งปัญหาเดือน <u><?php echo @month(); ?></u></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php @$getall = $getdata->my_sql_show_rows($connect, "erp_case", "id_case <> 'hidden' AND (date LIKE '%" . date("Y-m") . "%' )");
                                                                echo @number_format($getall); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-md font-weight-bold text-info text-uppercase mb-1">จำนวนรายการแจ้งปัญหาวันนี้</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php @$getall = $getdata->my_sql_show_rows($connect, "erp_case", "id_case <> 'hidden' AND (date LIKE '%" . date("Y-m-d") . "%' )");
                                                                echo @number_format($getall); ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar-check fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php if ($_SESSION['uclass'] == 2 || $_SESSION['uclass'] == 3) { ?>
  <div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-success text-uppercase mb-1">จำนวนรายการแจ้งปัญหาที่เสร็จแล้ว</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php @$getall = $getdata->my_sql_show_rows($connect, "erp_case", "status_case = '1' AND (date LIKE '%" . date("Y-m") . "%' )");
                                                                  echo @number_format($getall); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-check fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-warning text-uppercase mb-1">จำนวนรายการแจ้งปัญหารอการแก้ไข</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php @$getwait = $getdata->my_sql_show_rows($connect, "erp_case", "status_case ='0'");
                                                                  echo @number_format($getwait); ?></div>
            </div>
            <div class="col-auto">
              <?php
              if ($getwait == 0) {
                echo '<i class="fas fa-tools fa-2x text-gray-300"></i>';
              } else {
                echo '<div class="spinner-grow text-warning" role="status"></div>';
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-uppercase mb-1"><a href="?p=show_cancel" class="text-danger">จำนวนปัญหาที่ยกเลิก</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php @$getall = $getdata->my_sql_show_rows($connect, "problem_list", "ID <> 'hidden' AND card_status = '57995055c28df9e82476a54f852bd214' AND (date LIKE '%" . date("Y-m") . "%' )");;
                                                                  echo @number_format($getall); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-trash fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->



  </div>

  <div class="card showdow md-4">
    <div class="card-header py-4">
      <h6 class="m-0 font-weight-bold text-center text-primary">รายการแจ้งปัญหาเข้ามา ERP Support รายการแจ้งปัญหา ปิด real time data โปรด กด F5 เพื่อดึงข้อมูล</h6>
    </div>
    <div class="card-body">
      <div class="responsive-data-table">
        <table id="responsive-data-table-its" class="table dt-responsive nowrap hover" style="width:100%">
          <thead class="font-weight-bold text-center">
            <tr>
           
              <td>รหัส</td>
              <td>ชื่อผู้แจ้ง</td>
              <td>ปัญหา</td>
              <td>วันที่แจ้ง เวลา</td>
              <td>สถานะ</td>
              <td>ตรวจสอบ</td>
              <td>ผู้ดำเนินการ</td>
              <td>วันที่แล้วเสร็จ</td>
        
            </tr>
          </thead>
          <tbody>
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php } elseif ($_SESSION['uclass'] == 1) { ?>

  <div class=" row">
    <div class="col-12">
      <div class="card card-default">
        <div class="card-header card-header-border-bottom d-flex justify-content-between">
          <h2><span class="mdi mdi-format-list-checks"></span>
            รายการแจ้งปัญหาของคุณทั้งหมด</h2>
        </div>

        <div class="card-body">
          <div class="basic-data-table">
            <table id="data-home-it" class="table hover nowrap text-center" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>code_id</th>
                  <th>วันที่</th>
                  <th>ผู้ดำเนินการ</th>
                  <th>สถานะ</th>
                  <th>วันที่อัพเดต</th>
                  <th>ดำเนินการ</th>

                </tr>
              </thead>

              <tbody>
                <?php
                $i = 0;
                $get_total = $getdata->my_sql_select($connect, NULL, "problem_list", "user_key = '" . $_SESSION['ukey'] . "'ORDER BY code_id DESC");
                while ($show_total = mysqli_fetch_object($get_total)) {
                  $i++;
                ?>
                  <tr>
                    <td><?php echo @$i; ?></td>
                    <td><?php echo @$show_total->code_id; ?></td>
                    <td><?php echo @dateConvertor($show_total->date); ?></td>
                    <td>
                      <?php
                      if (@$show_total->admin_update == NULL) {
                        echo '<span class="badge badge-warning">รอดำเนินการแก้ไข</span>';
                      } else {
                        echo 'คุณ ' . @prefixConvertorUsername($show_total->admin_update);
                      }
                      ?>
                    </td>
                    <td>
                      <?php
                      if (@$show_total->card_status == NULL) {
                        echo '<span class="badge badge-warning">รอดำเนินการแก้ไข</span>';
                      } else {
                        echo @cardStatus($show_total->card_status);
                      }

                      ?>
                    </td>
                    <td>
                      <?php
                      if (@$show_total->date_update == '0000-00-00') {
                        echo '<span class="badge badge-warning">รอดำเนินการแก้ไข</span>';
                      } else {
                        echo @dateConvertor($show_total->date_update);
                      }  ?>
                    </td>
                    <td>
                      <a href="?p=case_all_service&key=<?php echo @$show_total->code_id; ?>" class="btn btn-sm btn-success" data-top="toptitle" data-placement="top" title="ตรวจสอบ"><span class="mdi mdi-timeline-text-outline"></span></a>
                    </td>

                  </tr>


                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>


<?php } ?>






<div class="modal fade" id="ModalProblemErp" tabindex="-1" role="dialog" aria-labelledby="ModalProblemErp" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle2">แจ้งปัญหา ERP</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
                                    <form  id="form-saveerp" >

                                    <input type="hidden" name="id" id="id"  >
									<div class="modal-body">
                                    <div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="fname">หมวดหมู่</label>
                                                            <select onchange="fetch_select(this.value);"  class="form-control" name="category_id"  id="category_id"   readonly>
                                                                  <option value="">Select state</option>
                                                                  <?php
                                                                 $getprefix = $getdata->my_sql_select($connect, null, "erp_category", null);
                                                                    while ($showservice = mysqli_fetch_object($getprefix)) {
                                                                    echo '<option value="'. $showservice->id_cat .'">' . $showservice->name . '</option>';
                                                                      }
                                                                      ?>
                                                            </select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="lname">ปัญหา</label>
                             <select id="new_select"  class="form-control" name="problem_id"   id="problem_id" readonly>
                              </select>
														</div>
													</div>
													<div class="col-sm-12">
														<div class="form-group">
															<label for="city">รายละเอียดเพิ่มเติม</label>
                                                           
															<textarea name="problem_text" id="problem_text" cols="20" rows="9" class="form-control" readonly></textarea>
														</div>
													</div>
                          <div class="col-sm-12">
                          <div class="form-group">
															<label for="city">ติดต่อกลับ</label>
															<input  type="text" name="contact_case" id="contact_case" class="form-control" class="form-control" readonly >
														</div>
													</div>
                          <div class="col-sm-12">
														<div class="form-group">
															<label for="city">แสดงความคิดเห็น</label>
                                                           
                              <input  type="text" name="remark" id="remark" class="form-control" class="form-control"  required >
														</div>
													</div>
												</div>
                     
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">ปิด</button>
										<button type="submit" class="btn btn-primary btn-pill">บันทึก</button>
									</div>
                                   </form>
								</div>
							</div>
						</div>




