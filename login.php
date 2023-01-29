
<?php
    //connect to the database
    $conn = mysqli_connect("localhost","root","","hackathon");
    //check if the login form has been submitted
    if(isset($_POST["email"]) && isset($_POST["password"]) )
    {
        //get the form data
        $email = $_POST["email"];
        $password = $_POST["password"];
        //create the select query
        $query =mysqli_query($conn,
         "SELECT * FROM singup WHERE email='"
        . $_POST["email"] . "' AND password='" . $_POST["password"]. "'  ");
        //run the query
        $result = mysqli_num_rows($query);
        //check if a row was returned
        if($result > 0)
        {
            //login was successful
            //redirect to the homepage
            header("location: index.php");
        }
        else
        {
            //login was not successful
            //display an error message
            echo "<script>alert('Invalid email or password');</script>";
        }
    }
?>