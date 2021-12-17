<section class="py-6">
  <div class="container">
    <div class="row justify-space-between py-2">
    <?php
            $q= "SELECT * FROM blog ";
            $run=mysqli_query($link,$q);
            while($row=mysqli_fetch_array($run))
            {
            $id=$row['id'];
            $titre=$row['titre'];
            $img=$row['img'];
            $content=$row['content'];
            
        ?>
      <div class="col-6 mx-auto mt-5">
        <div class="card">

          <?php echo "<img src='admin/c/$img' class='card-img-top'  > "; ?>
          <div class="position-relative overflow-hidden" style="height:50px;margin-top:-50px;">
            <div class="position-absolute w-100 top-0 z-index-1">
                <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                  <defs>
                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                  </defs>
                  <g class="moving-waves">
                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                  </g>
                </svg>
              </div>
          </div>
          <div class="card-body">
            <h4><?php echo $titre ;?></h4>
            <p>
            <?php echo $content ;?>
            </p>
            <a href="b.php?id=<?php echo $id; ?>"  class="text-primary icon-move-right text-gradient text-info">Plus d'informations
              <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <?php } ?>



      
    </div>
  </div>
</section>