<section>
    <div class="container">
      <div class=" row">
        <div class="col-lg-7 d-flex justify-content-center flex-column"></div>
          <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 ">
            <div class="text-center">
              <h3 class="text-gradient text-primary">Contact</h3>
              <br>
              <p class="mb-0">
For any other questions, including partnership opportunities, please email ieeeenig@idaratn.org or contact us through our contact form.              </p>
            </div>
            <form id="contact-form" action="" method="post" autocomplete="off">
              <div class="card-body pb-2">
                <div class="row">
                  <div class="col-md-6">
                    <label> Your Name </label>
                    <div class="input-group mb-4">
                      <input class="form-control" name="Fullname" placeholder="Full Name" aria-label="Full Name" type="text">
                    </div>
                  </div>
                  <div class="col-md-6 ps-md-2">
                    <label>Email</label>
                    <div class="input-group">
                      <input type="email" class="form-control" name="Email" placeholder="hello@gmail.com">
                    </div>
                  </div>
                </div>
                <div class="form-group mb-0 mt-md-0 mt-4">
                  <label>How could we help you?</label>
                  <textarea name="message" class="form-control" name="Subject" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <button type="submit" name="sub" class="btn bg-gradient-primary mt-3 mb-0">Send the message</button>
                  </div>
                </div>
              </div>
            </form>
            <?php
    if(isset($_POST['sub']))
    {
    $Fullname=$_POST['Fullname'];
    $Email=$_POST['Email'];
    $message=$_POST['message'];
    if(mysqli_query($link,"INSERT INTO contact (Fullname,Email,Subject) VALUES('$Fullname','$Email','$message')"))
    {
        
    }
    }else
    {
      
    }

    ?>
          </div>
        </div>  
      </div>
    </div>  
  </section>