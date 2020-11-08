<?php
session_start();
if(!isset($_SESSION['securityname'])){
    header('Location: Login.php');
}

if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: Login.php');
}
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'thirdeye');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$result = mysqli_query($connection,"SELECT * FROM ownerstable");
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
  <link rel="icon" href="assets/img/brand/thirdeyefavro.png" type="image/png">
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
              <a class="nav-link" href="securitydashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="securityownerslist.php">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Owners List</span>
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
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
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
                    <span class="mb-0 text-sm  font-weight-bold">Security</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <!-- <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                <form method="POST"><input type="submit"class="dropdown-item" value="Logout" name="but_logout"></form>
                  
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              
              
            </div>
            <!-- <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
          
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Owner Details</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                  <th scope="col" class="sort" data-sort="name">NO</th>

                    <th scope="col" class="sort" data-sort="name">Owner Name</th>
                    <th scope="col" class="sort" data-sort="budget">House Number</th>
                    <th scope="col" class="sort" data-sort="budget">Vehicle Number</th>
                    <th scope="col" class="sort" data-sort="status">Type Of Vehicle</th>
                    <th scope="col" class="sort" data-sort="budget">Model</th>
                    <th scope="col" class="sort" data-sort="budget">Contact</th>
                    

                    
                    <!-- <th scope="col" class="sort" data-sort="completion">Completion</th> -->
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                        if (mysqli_num_rows($result) > 0) {
                          $count=1;
                          while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr><td ><?php echo $count; ?></td>
                            <td><?php echo $row["ownersname"]; ?></td>
                            <td ><?php echo $row["houseno"]; ?></td>
                            <td><?php echo $row["vehicleno"]; ?></td>
                            <td ><?php echo $row["type"]; ?></td>
                            <td ><?php echo $row["modelv"]; ?></td>
                            
                            <td><?php echo $row["contactno"]; ?></td>
                            <!-- <td>
                              <a href="Log.php?id=<?php echo $row["Id"];  ?>">Log</a>
                            </td>
                            <td>
                              <a href="Info.php?id=<?php echo $row["Id"];  ?>">Info</a>
                            </td>
                            <td >
                            <a href="Update.php?id=<?php echo $row["Id"];  ?>">Edit</a>
                            </td>-->
                            <!-- <td>
                            <a id="del" href="delete.php?contactno=<?php echo $row["contactno"]; ?>">Delete</a>
                            </td> -->
                            </tr>
                            <?php $count++; }
                          
                        } else {
                          echo "<td>0 results</td>";
                        }
                        ?>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
    
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