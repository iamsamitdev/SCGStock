<?php
include "includes/connectdb.php";

// ดึงข้อมูลเก่ามาแสดงในฟอร์ม
$sqldata = "SELECT * FROM carstock WHERE id='$_GET[id]'";
$querydata = mysqli_query($connect, $sqldata);
$data = mysqli_fetch_assoc($querydata);

// อัพเดทข้อมูลในตาราง carstock
if(@$_POST['submit']){

  // แปลงรูปวันที่เป็น yyyy-mm-dd
  $date_normal = $_POST['dateadd'];
  $date_explode = explode("/", $date_normal);
  $date_final = $date_explode[2]."-".$date_explode[1]."-".$date_explode[0];

    $sql = "UPDATE carstock SET 
                serial='$_POST[serial]',
                category='$_POST[category]',
                name='$_POST[carname]',
                dateadd='$date_final',
                owner='$_POST[owner]'
                WHERE id='$_GET[id]'";
    $query = mysqli_query($connect, $sql);
   header('location:carstock.php');
}   

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>แก้ไขข้อมูลรถ</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="assets/vendors/chosen/chosen.min.css">
    <link rel="stylesheet" href="assets/vendors/gijgo/css/gijgo.min.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->

      <?php
        // link ไฟล์จากภายนอก
        include "includes/header.php";
      ?>

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->

        <?php
            // link ไฟล์จากภายนอก
             include "includes/sidemenu.php";
        ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"> 
            
          <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title w-50">แก้ไขข้อมูลรถ</h4>
                  <div class="quick-link-wrapper w-50 d-md-flex flex-md-wrap">
                    <div class="ml-auto"><a href="carstock.php" class="btn btn-lg btn-warning">กลับหน้ารายการรถ</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class='card'>
              <div class='card-body'>
                <div class="container">
                    <form action="editcar.php?id=<?php echo $_GET['id'];?>" method="post">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Serial</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="serial" id="serial" value="<?php echo $data['serial'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                 <select class="form-control" name="category" id="category">
                                   <option value="รถตัก" <?php if($data['category']=="รถตัก"){ echo "selected"; }?>>รถตัก</option>
                                   <option value="รถบรรทุก" <?php if($data['category']=="รถบรรทุก"){ echo "selected"; }?>>รถบรรทุก</option>
                                   <option value="รถเจาะ" <?php if($data['category']=="รถเจาะ"){ echo "selected"; }?>>รถเจาะ</option>
                                   <option value="รถล้อยาง" <?php if($data['category']=="รถล้อยาง"){ echo "selected"; }?>>รถล้อยาง</option>
                                   <option value="รถตีนตาขาบ" <?php if($data['category']=="รถตีนตาขาบ"){ echo "selected"; }?>>รถตีนตาขาบ</option>
                                 </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Car name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="carname" id="carname" value="<?php echo $data['name'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Date add</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="dateadd" id="dateadd" value="<?php echo date("d/m/Y",strtotime($data['dateadd']));?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Owner</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="owner" id="owner">
                                   <option value="สามิตร" <?php if($data['owner']=="สามิตร"){ echo "selected"; }?>>สามิตร</option>
                                   <option value="วีรวรรณ" <?php if($data['owner']=="วีรวรรณ"){ echo "selected"; }?>>วีรวรรณ</option>
                                   <option value="ภาวินี" <?php if($data['owner']=="ภาวินี"){ echo "selected"; }?>>ภาวินี</option>
                                   <option value="อนุสรณ์" <?php if($data['owner']=="อนุสรณ์"){ echo "selected"; }?>>อนุสรณ์</option>
                                   <option value="สมชาย" <?php if($data['owner']=="สมชาย"){ echo "selected"; }?>>สมชาย</option>
                                 </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php
            // link ไฟล์จากภายนอก
            include "includes/footer.php";
          ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <script src="assets/vendors/chosen/chosen.jquery.min.js"></script>
    <script src="assets/vendors/gijgo/js/gijgo.min.js"></script>
    <script>
        $("#owner").chosen();
        $('#dateadd').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd/mm/yyyy'
        });
    </script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>