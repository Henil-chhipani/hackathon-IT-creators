<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MARAMAT</title>

    <link rel="stylesheet" href="index.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>

    <!-- navbar -->
     <!-- navbar -->
      <!-- footer including code  -->
      <?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/hakathon/forntend/"; include($IPATH."header.html"); ?>
      
    <!-- profile photo  -->
    <div class="card">
      <div class="card-header">
        <b> Shopekeper Id</b>
      </div>

      <div class="card-body">
        <div class="col-md-4">
          <img
            src="download(1).jpeg"
            class="rounded-circle"
            alt="..."
            style="width: 300px"
          /><br />
          <br />
        </div>
        <input
          class="form-control"
          type="text"
          value="Shope name"
          aria-label="readonly input example"
          readonly
        /><br />
        <input
          class="form-control"
          type="text"
          value="Owner name"
          aria-label="readonly input example"
          readonly
        /><br />
        <input
          class="form-control"
          type="text"
          value="Phone no."
          aria-label="readonly input example"
          readonly
        /><br />
        <input
          class="form-control"
          type="text"
          value="Email id"
          aria-label="readonly input example"
          readonly
        />
        <br />
        <input
          class="form-control"
          type="text"
          value="address area city pincode"
          aria-label="readonly input example"
          readonly
        />
        <br />
        <input
          class="form-control"
          type="text"
          value="Type of services (ex. mobile, plumbing etc.)"
          aria-label="readonly input example"
          readonly
        />
        
        <cla class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <div style="width: ; height: 250px; background-color: gray;text-align: center;padding: 100px;">
                Add services photos
              <!-- <img src="..." class="card-img-top" alt="..."> -->
            </div>
              <div class="card-body">
                <h5 class="card-title">Name of service</h5>
                <p class="card-text">price range of the service</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div style="width: ; height: 250px; background-color: gray;text-align: center;padding: 100px;">
                Add services photos
              <!-- <img src="circuit.jpeg" class="card-img-top" alt="..."> -->
            </div>
              <div class="card-body">
                <h5 class="card-title">Name of service</h5>
                <p class="card-text">price range of the service</p>
              </div>
            </div>
          </div>
          
          
          
        </div>
        
       <br />

        Add your shopes photo:
        <br /><br />
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card">
              <img src="download(1).jpeg" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="download(1).jpeg" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="download(1).jpeg" class="card-img-top" alt="..." />
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="download(1).jpeg" class="card-img-top" alt="..." />
            </div>
          </div>

          <div class="col">
            <div class="card">
              <label for="files" class="btn btn-outline-success">
                select image</label
              >
              <input type="file" style="visibility: hidden" id="files" />

              <script>
                $("#files").change(function () {
                  filename = this.files[0].name;
                  console.log(filename);
                });
              </script>


              

              <!-- <form action="demo.php" method="post" enctype="multipart/form-data">
                <label for="image">Choose an image:</label>
                <input type="file" id="image" name="image">
                <input type="submit" value="Upload Image">
              </form> -->

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
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
