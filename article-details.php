<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        body{
            background-image:none;
            background-color:blanchedalmond;
        }
table{
border: 0;
text-align:left;
}
table img{
    width:40%;
}
        </style>
</head>
<body>
<?php
include("dbconnect.php");
if(isset($_GET['pid'])){
  $result = mysqli_query($db,"SELECT * FROM products WHERE id=".$_GET['pid']);
}
?>
<table id="content" border ="0" cellpadding = "5" cellspacing="0">
<?php
while($row = mysqli_fetch_assoc($result)){
    $pid = $row['id'];
    $ptitle = $row['title'];
    $pcontent=$row['content'];
   
        echo"<tr>
        <th>".$ptitle."</th>
        </tr>
        <tr>
        <td>
        <img src=".$row['images']."></td>
        </tr>
        <tr>
        <td>".$pcontent."</td>
        </tr>
        ";
    }   

?>
 </table>
 <footer>
        <p>&copy; Mohammed Joukhadar - Jad Abou Najem</p>
        <p>Contact Us <a href="mailto:jadabonajem5@gmail.com">On This Email</a></p>
        <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @twitter</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </footer>
</body>
</html>
