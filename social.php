<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Road Reports</title>
    <style>
        #sb{
           
            background-image: url(social1.jpg);
            background-size: cover;
        }
        #reportForm {
            margin-bottom: 20px;
            background-color: rgba(0, 0, 0, 0.2);
            margin-right:41%;
            padding: 10px;
            border: 3px solid #062b5f;
            border-radius: 5px;
        }
        #reportForm label{
            background-color: #062b5f;
            color: antiquewhite;
            padding: 2px;
            
        }
        #reportForm input {
            border-radius: 5%;
            padding: 10px;
        }
        #reportForm textarea {
            border-radius: 8%;
            padding: 40px;
        }
    </style>
</head>
<body id ="sb">

    <form id="reportForm" method ="get">
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location" required><br>
        <br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        
        <button type="submit">Submit Report</button>
    </form>


    <div id="reportList">
<div id ="ff">
<?php
include("dbconnect.php");
if(isset($_GET["location"]) && isset($_GET["description"])){
    $loc = mysqli_real_escape_string($db, $_GET["location"]);
    $des = mysqli_real_escape_string($db, $_GET["description"]);
    $check_query = "SELECT * FROM social WHERE location = '$loc' AND description = '$des'";
    $check_result = mysqli_query($db, $check_query);
    if(mysqli_num_rows($check_result) == 0) {
        $insert_query = "INSERT INTO social (location, description) VALUES ('$loc', '$des')";
        mysqli_query($db, $insert_query) or die(mysqli_error($db));
    }
}

$select_query = "SELECT * FROM social";
$result = mysqli_query($db, $select_query) or die(mysqli_error($db));
while ($row = mysqli_fetch_assoc($result)) {
    echo "Location: " . $row["location"] . "<br>";
    echo "Description: " . $row["description"] . "<br>";
    echo "<hr>"; 
}
?>




    </div>
</div>
    <footer><P>&COPY; BAU</P>
        <P>Contact Us <a href="mailto:jadabonajem5@gmail.com"> On This Email</a></P> <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></footer>  
    
    
</body>
</html>