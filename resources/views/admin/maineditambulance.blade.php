<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EMS-Admin-Ambulance Edit</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="/images/logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/images/logo" alt="logo"/></a>
      </div>
      
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="/images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Admin</p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
         <li class="nav-item"><a class="nav-link" href="{{route('admincreate')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Create </span></a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('edithospital')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Edit</span></a></li> 
          <li class="nav-item"><a class="nav-link" href="{{route('admincreatedoctor')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editdoctor')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Edit </span></a></li>
          
          <li class="nav-item"><a class="nav-link" href="{{route('admincreateambulance')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editambulance')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Edit</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('adib1')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">logout</span></a></li>
          
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('adib')}}" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Home Page</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html">Blank Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html">Login</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html">Register</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html">404</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html">500</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>

      <div class="main-panel">
        <div class="content-wrapper">
        <h3>Edit Ambulance</h3>
        <form action="{{ route('updateambulance',$ambulance->id) }}" method="post" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Ambulance Name</label>
    <input type="text" class="form-control" name="ambulance_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ambulance Location</label>
    <input type="text" class="form-control" name="ambulance_location" id="exampleInputPassword1" placeholder="location">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ambulance Type</label>
    <input type="text" class="form-control" name="ambulance_type" id="exampleInputPassword1" placeholder="Type">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ambulance Contact</label>
    <input type="text" class="form-control" name="ambulance_contact" id="exampleInputPassword1" placeholder="contact">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ambulance Fare</label>
    <input type="text" class="form-control" name="ambulance_Fare" id="exampleInputPassword1" placeholder="contact">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/maps.js"></script>
  <!-- End custom js for this page-->
</body>

</html>