<?php
include "includes/connectdb.php";

// ทดสอบอ่านข้อมูลจากตาราง members ออกมาแสดง
$sql = "SELECT * FROM carstock ORDER BY id DESC";
$query = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ข้อมูลรถทั้งหมด</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
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
                  <h4 class="page-title w-50">ข้อมูลรถทั้งหมด</h4>
                  <div class="quick-link-wrapper w-50 d-md-flex flex-md-wrap">
                    <div class="ml-auto"><a href="addcar.php" class="btn btn-lg btn-success">เพิ่มข้อมูลใหม่</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class='card'>
              <div class='card-body'>
              <h4 class="card-title mb-3">Car stock list</h4>
            <?php 
                $row = 1;
                echo "<div class='table-responsive'>";
                echo "<table class='table table-bordered table-hover'>";
                echo "<thead>";
                echo "<tr class='bg-warning'>";
                echo "<th>Manage</th>";
                echo "<th>ID</th>";
                echo "<th>Serial</th>";
                echo "<th>Category</th>";
                echo "<th>Name</th>";
                echo "<th>Dateadd</th>";
                echo "<th>Owner</th>";
                echo "</tr>";
                echo "</thead>";
                while($data = mysqli_fetch_assoc($query))
                {
                  echo "<tr>";

                  echo "<td class='text-center'>";
                  echo "<a href='editcar.php?id=$data[id]' class='btn btn-warning'>Edit</a>&nbsp;&nbsp;";
                  echo "<a href='deletecar.php?id=$data[id]' class='btn btn-danger' onclick='return confirm(\"ยืนยันการลบข้อมูลนี้หรือไม่\")'>Delete</a>";
                  echo "</td>";

                  echo "<td>";
                  echo  $row;
                  echo "</td>";

                  echo "<td>";
                  echo $data['serial'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['category'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['name'];
                  echo "</td>";

                  echo "<td>";
                  echo date("d/m/Y",strtotime($data['dateadd']));
                  echo "</td>";

                  echo "<td>";
                  echo $data['owner'];
                  echo "</td>";

                  echo "</tr>";
                  $row++;
                }
                echo "</table>";
                echo "</div>";
            ?>
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
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>