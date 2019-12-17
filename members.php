<?php
include "includes/connectdb.php";

// ทดสอบอ่านข้อมูลจากตาราง members ออกมาแสดง
$sql = "SELECT * FROM members";
$query = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ข้อมูลผู้ใช้งาน</title>
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
            <div class='card'>
              <div class='card-body'>
            <?php 
                echo "<table class='table table-bordered table-hover'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th class='bg-primary text-light'>ลำดับ</th>";
                echo "<th class='bg-info text-light'>ชื่อสกุล</th>";
                echo "<th class='bg-danger text-light'>อีเมล์</th>";
                echo "<th class='bg-success text-light'>โทรศัพท์</th>";
                echo "<th class='bg-warning text-light'>รหัสผ่าน</th>";
                echo "<th class='bg-primary text-light'>จัดการ</th>";
                echo "</tr>";
                echo "</thead>";
                while($data = mysqli_fetch_assoc($query))
                {
                  echo "<tr>";

                  echo "<td>";
                  echo $data['id'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['fullname'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['email'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['tel'];
                  echo "</td>";

                  echo "<td>";
                  echo $data['password'];
                  echo "</td>";

                  echo "<td class='text-center'>";
                  echo "<a href='#' class='btn btn-warning'>Edit</a>&nbsp;&nbsp;";
                  echo "<a href='#' class='btn btn-danger'>Delete</a>";
                  echo "</td>";

                  echo "</tr>";
                }
                echo "</table>";
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