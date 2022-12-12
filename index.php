<?php
$insert = false;
if(isset($_POST['fname'])){
    $server="localhost";
    $username="root";
    $password="";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to database is failed due to".mysqli_connect_error());
    }
    //echo "Success";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email=$_POST['email'];
    $message = $_POST['message'];
    
    
    $sql="INSERT INTO `cwr`.`contact` (`finame`, `lname`, `email`, `message`, `dt`) VALUES ('$fname', '$lname', '$email', '$message', current_timestamp());";

    //echo $sql;

    if($con->query($sql) == true){
        //echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="Contact.css">
    <link rel="icon" href="Logo.jpeg" type="image/x-icon">
</head>

<body>
    <form action="index.php" method="post">
        <fieldset>
            <legend>Contact Us</legend>
            <label for="fname">First Name</label>
            <input type="text" required id="fname" name="fname" placeholder="Enter your First name here" minlength="6"><br><br>
            <label for="lname">Last Name</label>
            <input type="text" required id="lname" name="lname" placeholder="Enter your last name here"><br><br>
            <label for="email">Email</label>
            <input type="email" required id="email" name="email" placeholder="Enter your email here"><br><br>
            <label for="message">Message</label><br>
            <textarea id="message" name="message" cols="30" rows="10" placeholder="Enter your message here"></textarea><br><br>
            <button type="button">Submit</button><br>
            <a href="tel:+9527920445">Call us</a>
        </fieldset>
    </form>
    <section class="footer">
        <div class="share">
            <a href="#" class="btn">Facebook</a>
            <a href="#" class="btn">Twitter</a>
            <a href="#" class="btn">Instagram</a>
            <a href="#" class="btn">Pinterest</a>
            <a href="#" class="btn">LinkedIn</a>
        </div>
    </section>
</body>

</html>