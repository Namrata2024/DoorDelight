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
    $psw=$_POST['psw'];
    $cpsw=$_POST['cpsw'];


    $sql="INSERT INTO `cwr`.`signup` (`fname`, `lname`, `email`, `psw`, `cpsw`, `date`) VALUES ('$fname', '$lname', '$email', '$psw', '$cpsw', current_timestamp());";
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
    <title>SIGN UP</title>
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <link rel="icon" href="Logo.jpeg" type="image/x-icon">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            min-height: 100vh;
            width:100%;
            background-image: linear-gradient(rgba(6,10,15,0.6),rgba(6,10,15,0.6)), url(https://img.freepik.com/free-photo/top-view-food-frame-with-copy-space_23-2148723447.jpg?size=626&ext=jpg);
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .container{
            width:40%;
            margin:5% 30% ;
            background-color: black;
        
        }
        .heading{
            font-family: cursive;
            font-size: 1em;
            font-weight: bolder;
            width:100%;
            height:17vh;
            padding: 10px;
            background-color: rgb(0, 174, 255);;
            color: white;
            box-sizing: border-box;
            border: 20px solid rgb(0, 174, 255);;
            border-radius: 4px; 
        }
        .main{
            width:100%;
            padding:15px;
            font-weight:bold;
            background-color: black;
            color: white;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 4px;
            
        }
        input[type=text], input[type=password],input[type=number],input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }
        button{
            margin:20px 20px 20px 0;
            padding:10px 20px;
            color: white;
            background-color: rgb(71, 199, 71);
            border: 1px solid white;
            border-radius: 4px;
            cursor: pointer;     
        }
        button:hover{
            opacity: 0.5;
        }
        .name{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>

<body>
    <form action="signup.php" method="post">
        <div class="container">
            <div class="heading">
                <h1>Sign up</h1>
                <p>Fill this form to create an account</p>
                <p class="submitmsg">Thanks for submitting</p>
            </div>
            <br>
            <div class="main">
                <div>
                    <label for="fname">First name</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter your first name here" required>
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" id="lname" placeholder="Enter your last name here" required">
                </div>
                <label for="email">Email id :</label>
                <input type="email" name="email" id="email" placeholder="Enter email id" required>
                <br>
                <label for="psw">Password: </label>
                <input type="password" name="psw" id="psw" placeholder="Enter password" required>

                <br>
                <label for="cpsw">Confirm password: </label>
                <input type="password" name="cpsw" id="cpsw" required>
                <br>
                <label for="check">
                    <input type="checkbox" checked="checked" name="check" id="check"> Remember me
                </label>

                <br><br>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                    <button type="submit" class="signupbtn" onclick="alert('Thanks for Signing up. Your data is submitted')">Sign Up</button>
                </div>
            </div>



        </div>

    </form>
</body>

</html>









