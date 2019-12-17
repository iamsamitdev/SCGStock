<?php
@session_start();
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link bg-light">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="assets/images/imgprofile/<?php echo $_SESSION['login_imgprofile'];?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name text-dark"><?php echo $_SESSION['login_fullname'];?></p>
                  <p class="designation text-dark"><?php echo $_SESSION['login_member_type'];?></p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">เมนูหลัก</li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="menu-icon typcn tyDashboardpcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="carstock.php">
                <i class="menu-icon typcn tyDashboardpcn-document-text"></i>
                <span class="menu-title">ข้อมูลรถทั้งหมด</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="members.php">
                <i class="menu-icon typcn tyDashboardpcn-document-text"></i>
                <span class="menu-title">ข้อมูลผู้ใช้งาน</span>
              </a>
            </li> 
          </ul>
        </nav>