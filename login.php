<?php
session_start();
if(isset($_SESSION["username"])) {
    echo"You are already logged in";
}else{
if(isset($_POST["user"]) && isset($_POST["pass"])) {
    include("dbconnect.php");
    $user = mysqli_real_escape_string($db, $_POST["user"]);
    $pass = md5(mysqli_real_escape_string($db, $_POST["pass"]));
    $query = "SELECT password FROM users WHERE username ='$user'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    $row = mysqli_fetch_assoc($result);
    if($row && $pass == $row["password"]) {
        $_SESSION["username"] = $user;
        header("location: firstpage.php"); 
        exit;
    } else {
        echo "Invalid credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
background-size:cover;
        }
        </style>
</head>
<body>
    <div class="login-c">
        <div class="login-container">
            <h2>Login</h2>
            <form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="user-in">
                    <input size="25" name="user" id="user" type="text" placeholder="username" required/><br>
                    <input size="25" name="pass" id="pass" type="password" placeholder="password" required/>
                </div>
                <div class="sub">
                    <input id="submit" type="submit" value="Login"> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php } ?>