<?php
session_start();
if(!isset($_SESSION['adminname'])){
    header('Location: Login.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: Login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Third Eye</title>
  <!-- Favicon -->
  <link rel="icon" id="fav-icon" href="assets/img/brand/thirdeyefavro.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="assets/img/brand/thirdeye.jpeg" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Addowners.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Add Owners</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ownerslist.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Owners List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ownersdeleterecords.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Owners Old Records</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Addsecurity.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Add Security Guard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="securitieslist.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Security Guards List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="securitydeleterecords.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Security Guard Old Records</span>
              </a>
            </li>
           
          </ul>
          <!-- Divider -->
         
          <!-- Navigation -->
          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
             
              
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/profile.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Secretary</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                <form method="POST">
                <input type="submit"class="dropdown-item" value="Logout" name="but_logout">
                </form>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(assets/img/theme/profile.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello </h1>
            <p class="text-white mt-0 mb-5">The opposite of security is insecurity, and the only way to overcome insecurity is to take risks.</p>
            <!-- <a href="#!" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add Owners </h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">

                                <?php
                      $connection = mysqli_connect('localhost', 'root', '');
                      if (!$connection){
                          die("Database Connection Failed" . mysqli_error($connection));
                      }
                      $select_db = mysqli_select_db($connection, 'thirdeye');
                      if (!$select_db){
                          die("Database Selection Failed" . mysqli_error($connection));
                      }
                      if(isset($_POST['save']))
                      {	 
                        $ownersname = $_POST['ownersname'];
                        $houseno = $_POST['houseno'];
                          $vehicleno = $_POST['vehicleno'];
                          $type = $_POST['type'];
                          $modelv = $_POST['modelv'];
                          $contactno = $_POST['contactno'];

                      
                      
                        $sql = "INSERT INTO ownerstable (ownersname,houseno,vehicleno,type,modelv,contactno)
                        VALUES ('$ownersname','$houseno','$vehicleno','$type','$modelv','$contactno')";
                        if (mysqli_query($connection, $sql)) {
                          echo"Succesfully Added";
                        }
                        else {
                          echo "User Already exist";
                        }
                        mysqli_close($connection);
            
                    }?>

              <form method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Name</label>
                        <input type="text" id="input-username" name="ownersname" class="form-control"  placeholder="Name">
                      </div>
                    </div>
                    <!-- <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" >House Number</label>
                        <input type="text" name="houseno" class="form-control" placeholder="B2">
                      </div>
                    </div> -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">House Number</label>
                        <input type="text" id="input-username" name="houseno" class="form-control"  placeholder="4E">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Vehicle Number</label>
                        <input type="text" id="input-first-name" name="vehicleno" class="form-control"  placeholder=" TN 42 AA 5678">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Type Of Vehicle</label>
                        <input type="text" id="input-last-name" name="type" class="form-control"  placeholder="Two wheeler/Four Wheeler">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Model of Vehicle</label>
                        <input type="text" id="input-last-name" name="modelv" class="form-control"  placeholder="suszki brezza">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Contact Number</label>
                        <input type="text" id="input-last-name" name="contactno" class="form-control"  placeholder="74326*****">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name"></label>
                        
                        
                      </div>
                    </div>

                    <input type="submit" name="save" value="Add"class="addbutton">

                    

                  </div>
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>