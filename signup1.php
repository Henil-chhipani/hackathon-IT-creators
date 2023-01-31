<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARAMAT</title>


    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Hide all fieldsets except the first one
            $("fieldset:not(:first)").hide();

            // Add a click event to the Next button
            $(".next").click(function(){
                // Show the next fieldset
                $("fieldset:visible").next().show().prev().hide();
                // Disable the Next button if there are no more fieldsets
                if (!$("fieldset:visible").next().length) {
                    $("#.ext").attr("disabled", true);
                }
                // Enable the Previous button
                $(".prev").attr("disabled", false);
            });

            // Add a click event to the Previous button
            $(".prev").click(function(){
                // Show the previous fieldset
                $("fieldset:visible").prev().show().next().hide();
                // Disable the Previous button if there are no more fieldsets
                if (!$("fieldset:visible").prev().length) {
                    $(".prev").attr("disabled", true);
                }
                // Enable the Next button
                $(".next").attr("disabled", false);
            });
        });
        </script>
        <script>
          function previewImage() {
             var preview = document.getElementById("image-preview");
             var file    = document.querySelector('input[type=file]').files[0];
             var reader  = new FileReader();         

             reader.onloadend = function () {
               preview.src = reader.result;
             }         

             if (file) {
               reader.readAsDataURL(file);
             } else {
               preview.src = "";
             }
           }
        </script>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <!-- navbar -->
      <!-- footer including code  -->
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/hakathon/forntend/"; include($IPATH."header.html"); ?>



        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body px-5 text-center">
                            
                            <div class="btn-group " role="group" aria-label="Basic radio toggle button group"> 
                            
                              <input type="radio" class="btn-check" name="btnradio1" id="btnradio1" />
                              <label class="btn btn-outline-light" htmlFor="btnradio1"><a href="login1.php" class="text-light">Login</a>
                              </label>
                            
                              <input type="radio" class="btn-check" name="radio3" id="btnradio3" checked/>
                              <label class="btn btn-outline-light" htmlFor="btnradio3">Signup
                              </label>
                            </div>
                            <form  action="signup.php" method="post"enctype="multipart/form-data">
                              <fieldset>
                                  <legend>Step 1: Personal Information</legend>
                                  <label for="name">Name:</label>
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="email">Email:</label>
                                  <input type="email" id="email" name="email" class="form-control">
                                  <label for="password">Password:</label>
                                  <input type="text" id="password" name="password" class="form-control">
                                  <label for="cpassword">Confirm Password:</label>
                                  <input type="text" id="cpassword" name="cpassword"  class="form-control">
                                  <label for="phone">Phone</label>
                                  <input type="number" id="phone" name="phone"  class="form-control"><br>
                                  <input type="button" class="next btn btn-outline-primary m-3" value="Next ->">
                              </fieldset>
                              <fieldset>
                                  <legend>Step 2: Address Information</legend>
                                  <input type="text" 
                                         class="form-control my-3" 
                                         id="autocomplete" 
                                         name="street"
                                         placeholder="Street">
                                         
                                  <input type="text" 
                                         class="form-control my-3" 
                                         id="inputArea" 
                                         name="area"
                                         placeholder="Area">

                                  <input type="text" 
                                         class="form-control my-3" 
                                         id="inputCity" 
                                         name="city"
                                         placeholder="City">

                                  <input type="text"
                                         class="form-control my-3" 
                                         id="inputState" 
                                         name="state"
                                         placeholder="State">

                                  <input type="text"
                                         class="form-control my-3" 
                                         id="inputZip"
                                         name="zip" 
                                         placeholder="Zip">

                                  <input type="text"
                                         class="form-control my-3" 
                                         id="inputCounty" 
                                         name="country"
                                         placeholder="Country">

                                         <input type="button" class="prev btn btn-outline-primary m-3" value="<- Previous" >
                                         <input type="button" class="next btn btn-outline-primary m-3" value="Next ->" >
                              </fieldset>
                              <fieldset>
                                  <legend>Step 3: Shop Information</legend>
                                  <label for="shopName">Shop Name</label>
                                  <input type="text" id="shopName" name="shopName" class="form-control">
                                  <label for="repairItem">which item do you repair</label>
                                  <input type="text" id="repairItem" name="repairItem" class="form-control">
                                  <!-- <label >Upload Image</label>
                                  <input type="file" id="image" name="image" >
                                  <img id="image-preview" width="400" height="250">
                                  <input type="button" class="prev btn btn-outline-primary m-3" value="- Previous" >
                                <input type="submit" class="btn btn-outline-light" value="Upload" name="submit"> -->
                                <label>Select Image File:</label>
                                 <input type="file" name="image" " accept="image/*" onchange="previewImage()">
                                 <img id="image-preview" width="400" height="250">
                                 <input type="button" class="prev btn btn-outline-primary m-3" value="- Previous" >
                                 <input type="submit" name="submit" value="Upload" class="btn btn-outline-light" >
                              </form>
                            
          
                    </div>
                  </div>
                </div>
              </div>
            </div>









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