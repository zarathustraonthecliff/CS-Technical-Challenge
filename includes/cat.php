
<section>

  <div class="container">
    <div class="row mt-5" >
        
        <?php
            $q= "SELECT * FROM category";
            $run=mysqli_query($link,$q);
            while($row=mysqli_fetch_array($run))
            {
            $id=$row['id'];
            $category=$row['category'];
            $img=$row['img'];
        ?>
         
        <div class="col-md-4 mt-5">
            <div class="card card-profile card-plain">
                <div class="card-body text-center bg-white shadow border-radius-lg p-3">
                    <a href="d.php?id=<?php echo $id; ?>">
                    <?php echo "<img src='admin/category/c/$img' class='w-100 border-radius-md'  > "; ?>
                    </a>
                    <h6 class="mt-3 mb-1 d-md-block d-none text-gradient text-info"><?php echo $category ;?></h6>
                </div>
            </div>
        </div>

        <?php } ?>

   </div>
  <div>    
</section>