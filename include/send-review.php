<?php 
    include_once('../database/connect.php');
    if (isset($_POST['review'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $review = $_POST['review'];

         $query = "INSERT INTO `reviews`(`STT`, `id`, `date`, `time`, `name`, `email`, `review`) VALUES ('','$id','$date','$time','$name','$email','$review ')";
        
         $insert = mysqli_query($con,$query);

    }
?>