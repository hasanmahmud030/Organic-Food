<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Customer Dashboard</title>
  
    <link rel="stylesheet" href="admin.css">
   
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">

      <span style="margin-left:30px;" class="logo_name">Foody</span>
    </div>
      <ul class="nav-links">
        <li  style="margin-right:50px; width:100%; position:relative;" >
          <a href="profile.php" class="active">
            <i class='bx bx-user' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li>
          <a href="product_customer.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="setting.php">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div> 
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Customer</span>
      </div>
      <div style="margin-bottom:18px;" class="search-box">
        <input  style="height:48px; margin-top:25px"  type="text" placeholder="Search...">
        <i style=" height:38px; margin-top:9px;" class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="img/testimonial-1.jpg" alt="">
        <span class="admin_name">Swarna Akter</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav> <br><br> <br><br>
  <!----->
  


  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
 
 
</body>
</html>