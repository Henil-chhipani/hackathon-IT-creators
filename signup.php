<?php
$conn = mysqli_connect("localhost","root","","hackathon");
   if(isset($_POST["name"]))
   {
       $name =$_POST["name"];
   }
   if(isset($_POST["email"]))
   {
       $email =$_POST["email"];
   }
   if(isset($_POST["password"]))
   {
       $password =$_POST["password"];
   }
   if(isset($_POST["cpassword"]))
   {
        $cpassword =$_POST["cpassword"];
   }
   if(isset($_POST["phone"]))
   {
       $phone =$_POST["phone"];
   }
   if(isset($_POST["street"]))
   {
       $street =$_POST["street"];
   }
   if(isset($_POST["area"]))
   {
       $area =$_POST["area"];
   }
   if(isset($_POST["city"]))
   {
       $city =$_POST["city"];
   }
   if(isset($_POST["state"]))
   {
       $state =$_POST["state"];
   }
   if(isset($_POST["zip"]))
   {
       $zip =$_POST["zip"];
   }
   if(isset($_POST["country"]))
   {
       $country =$_POST["country"];
   }
   if(isset($_POST["shopName"]))
   {
       $shopName = $_POST["shopName"];
   }
   if(isset($_POST["repairItem"]))
   {
       $repairItem = $_POST["repairItem"];
   }
   if(empty($_FILES["image"]["name"])==false)
   {
       if(!empty($_FILES["image"]["name"])){
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));

            // $insert = $conn->query("INSERT into `singup` (`shopimage`) VALUES ('$imgContent')");
        }
        
    }
   }
   else{
    $statusMsg = "File upload failed, please try again."; 
   }
   $query="INSERT INTO `singup`(`name`,`email`,`password`,`phone`,`street`,`area`,`city`,`state`,`zip`,`country`,`shopeName`,`repairItem`,`shopimage`)
           VALUES ('$name','$email','$password','$phone','$street','$area','$city','$state','$zip','$country','$shopName','$repairItem' ,'$imgContent')";
   $insert=mysqli_query($conn,$query);
   if($insert)
   {
    
    header("location: login.html");
   }
   else
   {
    echo"not done";
   }
?>