<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EMS-Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
        
      </div>
      
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Admin</p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admincreate')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Create </span></a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('edithospital')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Edit</span></a></li> 
          <li class="nav-item"><a class="nav-link" href="{{route('admincreatedoctor')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editdoctor')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Edit </span></a></li>
          
          <li class="nav-item"><a class="nav-link" href="{{route('admincreateambulance')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editambulance')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Edit</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('adib1')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">logout</span></a></li>
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('adib')}}" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Home Page</span><i class="menu-arrow"></i></a>

  

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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <a href="{{route('adib')}}" class="btn btn-primary btn-lg" target="_blank">Visit Main Site</a>

        <div class="col-md-12">
                            <div class="card" id='map' style='width:100%; height:600px;float:center;
                            margin-right:0px;margin-left:0px;margin-top:10px;margin-bottom: 10px;'>
                                    <!--<div >-->
                                        
                                    <!--</div>-->
                            </div>
            </div>
          
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> <a href="http://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
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


<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibXVzaGZpbWFxdmVyaWNrIiwiYSI6ImNqcGw3NXlqbTBiNXo0Mm9iZGc5MzN4Zm0ifQ.vizYESiSkgQLffbqo-k51w';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [90.474590 ,  23.717851], // starting position [lng, lat] 

    zoom: 14 // starting zoom
    });

          latitude =23.717851;
          longitude =90.474590;
            new mapboxgl.Marker()
                .setLngLat([longitude,latitude]).setPopup(new mapboxgl.Popup().setText(hospital.hospital_name))
                .addTo(map); 
    
</script>

<!-- pop over -->

</html>