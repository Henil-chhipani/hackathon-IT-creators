<?php 
// Include the database configuration file  
$conn = mysqli_connect("localhost","root","","hackathon");
 
// Get image data from database 
$result = $conn->query("SELECT shopimage FROM singup ORDER BY email DESC"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:shopimage/jpg;charset=utf8;base64,<?php echo base64_encode($row['shopimage']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>