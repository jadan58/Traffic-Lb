<?php
include("dbconnect.php");
$result = mysqli_query($db, "SELECT * FROM category");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="style.css">
    <style>
      #logo{
        text-decoration: none;
        color: white;
        padding: 20px 30px;
        margin: 10px;
        font-size: 24px;
        cursor: pointer;
    }
    
    #logo:hover{
        transform: translateY(-5px);
        transition-duration: 0.5s;
    }
    
    header{
        background-color: #062b5f;
        overflow: hidden;
      
        top: 0;
        width: 100%;
        height: 100px;
        font-size: 24px;
        display: flex;
        justify-content: space-between;
    }
    
    ul{
        display: flex;
        list-style: none;
        margin: 0;
    }
    
    ul li{
        padding: 3px;
        margin: 10px;
        cursor: pointer;    
    }
    
    ul li a{
        text-decoration: none;
        color: white;
    }
    
    ul li:hover{
        transform: translateY(-5px);
        transition-duration: 0.5s;
    }
    
    #lnk{
        padding: 20px 30px; 
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 50px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-decoration: none;
        color:#004e8a;
    }
    
    #lnk:hover{
        color: white;
    }
    
    nav{
        padding: 20px 30px;
        margin-right:50px;
    }
   
        body{
            background-image:none;
            background-color:black;
        }
        table {
            margin-top:3px;
            border: 0;

        }
        td {
            font-size:x-large;
            position: relative;
        }
        a {
            text-decoration: none;
            display: block;
        }
        img {
            width: 90%;
            margin-left: 30px;
        }
        .category-name {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px;
        }
    </style>
</head>
<body>
    <header>
    <Label id="logo">Traffic Lb</Label>
<nav>
                <ul>
                    <li><a href="#1">Politics</a></li>
                    <li><a href="#2">Economics</a></li>
                    <li><a href="#3"> Sports</a></li>
                </ul>
            </nav>
    </header>
    <table>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $cid = $row['id'];
            $cname = $row['name'];

            echo "<tr id = '1'><td>
                    <a href='articles.php?cid=$cid'>
                        <img src='".$row['catimage']."' alt='$cname'>
                        <span class='category-name'>$cname</span>
                    </a>
                  </td></tr>";
        }
        ?>
    </table>
</body>
</html>
