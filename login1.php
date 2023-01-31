<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARAMAT</title>


    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- navbar -->
    <!-- footer including code  -->
  <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/hakathon/forntend/"; include($IPATH."header.html"); ?>


<section class="vh-100 gradient-custom">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body px-5 text-center">
                            
                            <div class="btn-group " role="group" aria-label="Basic radio toggle button group"> 
                            
                              <input type="radio" class="btn-check" name="btnradio1" id="btnradio1"  checked/>
                              <label class="btn btn-outline-light" htmlFor="btnradio1">Login
                              </label>
                            
                              <input type="radio" class="btn-check" name="radio3" id="btnradio3" />
                              <label class="btn btn-outline-light" htmlFor="btnradio3"><a href="signup1.php" class="text-light">Signup</a>
                              </label>
                            </div>
          
                      <div class="mb-md-5  pb-5">
          
                        <p class="text-white-50 my-3">Please enter your login and password!</p>
          
                          <form action="login.php" method="post" enctype="multipart/form-data">

                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                            <label class="form-label" for="email">Email</label>
                            
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="password">Password</label>
                            
                            
                            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                            
                            <!-- <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit">Login</button> -->
                            <input type="submit" name="submit" value="log in" class="btn btn-outline-light btn-lg px-5" >
                          </form>
          
                      </div>
          
                      <div>
                        <p class="mb-0">Don't have an account? <a href="signup.html" class="text-white-50 fw-bold">Sign Up</a>
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>









    <div class="footer">
      <div class="box">
        <div class="rowm">

          <div class="colm">
            <p class="heading">About-Us</p>
            <a class="footerLink">service</a>
            <a class="footerLink">developer</a>
          </div>

          <div class="colm">
            <p class="heading">Service</p>
            <a class="footerLink">developer</a>
            <a class="footerLink">developer</a>
            
          </div>
          <div class="colm">
            <p class="heading">social media</p>
            <a class="footerLink">developer</a>
            <a class="footerLink">developer</a>
            
          </div>
          
        </div>
      </div>
    </div>
    
  </body>
</html>