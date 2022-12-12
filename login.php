<?php
$insert = false;
if(isset($_POST['email'])){
    $server="localhost";
    $username="root";
    $password="";
    $con = mysqli_connect($server,$username,$password);
    if(!$con){
        die("connection to database is failed due to".mysqli_connect_error());
    }
    //echo "Success";

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `cwr`.`rlogin` (`email`, `password`, `date`) VALUES ('$email', '$password', current_timestamp());";
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
    <title>Sign in</title>
    <style>
         *{
            margin:0;
            padding:0;
            box-sizing: border-box;
        }
    
html { 
    /* background: url(https://img.freepik.com/free-photo/top-view-food-frame-with-copy-space_23-2148723447.jpg?size=626&ext=jpg) no-repeat center center fixed #000;  */
    background-image: linear-gradient(rgba(6,10,15,0.6),rgba(6,10,15,0.6)), url(https://img.freepik.com/free-photo/top-view-food-frame-with-copy-space_23-2148723447.jpg?size=626&ext=jpg);
   opacity: 0.8;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.container{
    width:40%;
    margin:30px auto;
    background-color: aliceblue;
    box-shadow:
    inset 0 -3em 3em rgba(104, 102, 102, 0.1),
          0 0  0 0.5px rgb(32, 24, 24),
          0.3em 0.3em 1em rgba(43, 42, 42, 0.3);
          border-radius: 5px;
    
}
.heading{
            width:100%;
            background-color: rgb(0, 174, 255);
            color: white;
            box-sizing: border-box;   
            padding: 2%;}
        .main{
            padding:0 5%;
            padding-bottom: -5%;
           font-family: 'Times New Roman', Times, serif;
           font-size: 1em;
           font-weight: 800;
        }
      
        input[type=email], input[type=password],input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }
        button{
            margin:20px 20px 10px 0;
            padding:10px 20px;
            color: white;
            font-size: 17px;
            font-weight: 600;
            background-color: #4CAF50;
            border: 1px solid white;
            border:3px solid white ;
            border-radius: 10px;
            cursor: pointer;
            
        }
        button:hover{
            opacity: 0.5;
        }
        span{
            
            margin:20px 10px 5px 0;
            padding:5px 5px 0px 0;
            font-family: bold;
            display: flex;
        }
        a{
            text-decoration: none;
            background-color: #4CAF50;
            color: rgb(243, 236, 236);
            padding:5px 10px;
            margin: 10px;
            border:1px solid white;
            border-radius: 10px;

        }
        a:hover{
            opacity: 0.5;
        }
        p{
            font-size: 20px;
        }
        .account{
            display: flex;
        }
        .main-footer {
            width:100%;
    background-color: rgb(0, 174, 255);
    color: white;
    padding: .25em 0;
    position: sticky;
    bottom: 0px;
}

.main-footer-container {
    display: flex;
    align-items: center;
}

.main-footer-container ul {
    flex-grow: 1;
    text-align: end;
}

.footer-nav li {
    padding: 0 .5em;
}

.footer-nav img {
    width: 30px;
    height: 30px;
}
.nav ul {
    margin: 0;
}

.nav li {
    display: inline;
}

.nav a {
    display: inline-block;
    padding: .5em;
    color: white;
    text-decoration: none;
}
      
            
        

        
        
    </style>
</head>
<body>
    <form action="login.php" method="post">
        <div class="container">
            <div class="heading">
                <h1>Sign in with your DoorDelight account</h1>
                <small>(If you already have an account)</small>
                <p class="submitmsg">Thanks for submitting</p>
            </div>
            <br>
            <div class="main"><label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required><br>
            <input type="checkbox" onclick="myFunction()">Show Password <br><br>
            <button type="submit" onclick="alert('Thanks for Signing in. Your data is submitted')">Submit</button>
            <br>
            <label for="save">
                <input type="checkbox" name="save" id="save" checked="checked"> Remember me
            </label>
            <br>
            
            <h2>Don't have an account?</h2>
            <span class="account">
                <h2>Create an account</h2>
                <a href="signup.html">Sign up</a>
            </span>
        </div></div>
            
    </form>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    </form>

    
</body>
</html>