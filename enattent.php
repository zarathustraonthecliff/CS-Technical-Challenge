<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="logo.png">
  <title>
  Idara
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/soft-design-system.css?v=1.0.5" rel="stylesheet" />
</head>
<body class="bg-gray-100">
<?php include("content/navbar.php"); ?>




  <!-- /////////////////////Start Header//////////////// -->
  <header>
   <div class="page-header min-vh-50" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/minimal-interior.jpg')">
      <span class="mask bg-gradient-primary"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-white text-center">
            <h2 class="text-white">Sahilha makes your life easier</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="position-relative overflow-hidden" style="height:36px;margin-top:-35px;">
      <div class="w-full absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: #f8f9fa;">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
      </div>
    </div>
    <div class="container">
      <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 position-relative w-75 mx-auto">
        <div class="col-lg-8 mt-lg-n2 mt-2">
          <label>Search</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input class="form-control" placeholder="Search for category" type="text">
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center mt-lg-auto mt-2">
          <button type="button" class="btn bg-gradient-primary w-100 mb-0">Search</button>
        </div>
      </div>
    </div>
  </header>
  <!-- /////////////////////End Header//////////////// -->
  <div class="container">
      <div class="row">
          <!--/////// Start COL-LG-3/////-->
          <?php include("content/lg3.php"); ?>
          <!--/////// End COL-LG-3/////-->  
          <!--/////// Start COL-LG-3/////-->  
          <div class="col-lg-9">
              <?php include("content/templates.php"); ?>
              <?php include("content/pagination.php"); ?>
          </div>
          <!--/////// End COL-LG-9/////-->  
          
      
    
          
    </div>
    
  </div>
  
  





    
<!-- /////////////////////Start Footer//////////////// -->
<?php include("includes/footer.php"); ?>