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
  <?php include("includes/navbar.php"); ?>
  <!-- /////////////////////End Navbar//////////////// -->



 <div class="container">
 <section>
  <div class="container py-4 mt-4">
    <div class="row">
      <div class="col-lg-12 card pt-5 pb-2 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center text-gradient text-primary">Création d'un Compte </h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <label>Nom</label>
                <div class="input-group mb-4">
                  <input class="form-control" placeholder="" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <label>Prénom</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label>Numéro de téléphone</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="" >
              </div>
            </div>
            <div class="mb-4">
              <label>Numéro de CIN</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="" >
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Ville</label>
                    <select class="form-control">
                      <option value="">Tunis</option>
                      <option value="">Sfax</option>
                      <option value="">Sousse</option>
                      <option value="">Kairouan</option>
                      <option value="">Bizerte</option>
                      <option value="">Gabès</option>
                      <option value="">Ariana</option>
                      <option value="">Gafsa</option>
                      <option value="">Monastir</option>
                      <option value="">Ben Arous</option>
                      <option value="">Kasserine</option>
                      <option value="">Médenine</option>
                      <option value="">Médenine</option>
                      <option value="">Tataouine</option>
                      <option value="">Nabeul</option>
                      <option value="">Béja</option>
                      <option value="">Béja</option>
                      <option value="">Mahdia</option>
                      <option value="">Sidi Bouzid</option>
                      <option value="">Jendouba</option>
                      <option value="">Tozeur</option>
                      <option value="">La Manouba</option>
                      <option value="">Siliana</option>
                      <option value="">Zaghouan</option>
                    </select>
              </div>
              <div class="col-md-6 ps-2">
                <label>Date de Naissance</label>
                <div class="input-group">
                  
                  <input class="form-control" type="date" value="2021-12-23" id="example-date-input">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label>Mot de passe</label>
                <div class="input-group mb-4">
                  <input class="form-control" placeholder="" aria-label="First Name..." type="password" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <label>Répéter Mot de passe</label>
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-switch mb-4">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                  <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                </div>
              </div>
              <div class="col-md-12">
                <a href="templates.php" type="submit" class="btn bg-gradient-primary w-100">Sign In </a>
              </div>
              <div class="col-md-12">
                <a href="login.php" type="submit" class="btn bg-gradient-dark w-100">Login</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 </div>



  
    <!-- /////////////////////Start Footer//////////////// -->
    <?php include("includes/footer.php"); ?>