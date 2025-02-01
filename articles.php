<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: none;
            background-color: black;
        }
 table {
            border: 0;
           margin-left:20%;
        }
        td {
            position: relative;
        }
        a {
            text-decoration: none;
            display: block;
        }
        img {
            
            width: 80%;
        }
        .category-name {
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 275, 0.7);
            padding: 5px;
        }
        </style>
</head>
<body>
<?php
include("dbconnect.php");
if (isset($_GET['cid'])){
$stmt = mysqli_prepare($db, "SELECT * FROM products WHERE catid=?");
mysqli_stmt_bind_param($stmt, "i", $_GET['cid']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
<table id="titles" border ="0" cellpadding="5" cellspacing="0">
<?php
    while($row = mysqli_fetch_assoc($result)){
        $pid = $row['id'];
        $ptitle = $row['title'];
     
        echo"<tr><td><a href ='article-details.php?pid=$pid' style='text-decoration: none;'> <img src=".$row['images']." alt='$ptitle'>
                        <span class='category-name'>$ptitle</span></a></td></tr>";
       
}
?>
</table>
<?php
}else{
    header("location: news.php");
}
?>
</body>
</html>
