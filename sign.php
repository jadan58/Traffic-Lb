<?php
if(isset($_POST["user"]) && isset($_POST["pass"])) {
    include("dbconnect.php");
    $name = mysqli_real_escape_string($db, $_POST["name"]);
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $user = mysqli_real_escape_string($db, $_POST["user"]); 
    $pass = md5(mysqli_real_escape_string($db, $_POST["pass"]));
    if($_POST['pass']==$_POST['cpass']){
    $query = "INSERT INTO users (name, email, username, password) VALUES ('$name', '$email', '$user', '$pass')";
    mysqli_query($db, $query) or die(mysqli_error($db));
    echo "Registration for $user was successful <br><br>";
    $query = "SELECT max(id) FROM users";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $uid = $row['max(id)'];
    header("location: firstpage.php");
    }
    else{
        echo "Passwords don't match!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>project</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        body{
background-size:cover;
        }
       #email11 , #name{
   padding: 10px;
   margin: 5px;  
   border: 2px;
   border-radius: 10px;
   font-family: 'Courier New', Courier, monospace;
}
        </style>
</head>
<body>
    
<div class = "signup-c">
    <div class = " signup-container"> <h2> Sign Up </h2>
    <form name ="register" method ="post" action ="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
        <div class = "usersign-in">
        <input size="25" name ="name" id = "name" type = "name" placeholder = "name" required/><br>
            <input size="25" name ="user" id = "usersign" type = "username" placeholder = "username" required/><br>
            <input size="25" name = "email" id="email11" type = "email" placeholder ="email-example@example.com" required/>
            <input size="25" name = "pass" id = "passsign" type = "password" placeholder = "password" required/><br>
            <input size="25" name = "cpass" id= "confirm" type = "password" placeholder ="retype password" required/>
    </div>
    <div class="subsign">
<input id ="submitsign" type ="submit"> 
    </div>
    </form>
</div>
</div>
</body>
</html>