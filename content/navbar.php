<nav
  class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-2">
  <div class="container">

    <a class="navbar-brand" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="" style="margin-left:6px">
	 <img src="logo.png" width="60px" height="40px"/>
     
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">


      <ul class="navbar-nav ms-auto">
      <div class="">
      <div class="avatar-group dropdown">
        <a href="javascript:;" id="navbarDropdownMenuLink2"  data-bs-toggle="dropdown" class="avatar avatar-lg rounded-circle dropdown-toggle"  data-bs-placement="bottom" title="Ryan Tompson">
          <img width="60px" height="50px" alt="Image placeholder" src="user.png">
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
      <li>
          <a class="dropdown-item" href="#">
            Profil
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="settings.php">
         Settings
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="index.php">
          disconnection
          </a>
      </li>


  </ul>
        

      </div>
      </ul>






</div>



<!-- initialization script for tooltips -->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>



    </div>
  </div>
</nav>