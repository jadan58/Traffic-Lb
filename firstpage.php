<?php
session_start();
if(isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset(); 
    session_destroy();
}
?>
<!Doctype html>
<html>
    <head>

        <title>Traffic Lb</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        position: fixed;
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
    
    #lnk {
        padding: 20px 30px; 
        margin-top: 20px;
        margin-bottom: 20px;
        margin-right: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px black;
        text-decoration: none;
        color:#004e8a;
    }
    
    #lnk:hover {
        color: white;
    }
    #logout{
        text-decoration: none;
    }
    nav{
        padding: 20px 30px;
    }
   
    #bll h2{
color: white;
font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    .slider-container p{
margin-top: -150px;
margin-left: 20px;
font-family: fantasy;
font-size: x-large;
color:white;
    }
        </style>
    
    </head>
    <body id ="f">
    </head>
    <body>
        <header id="myheader">
            <Label id="logo">Traffic Lb</Label>
            <nav>
                <ul>
                    <li><a href="#ssl">Home</a></li>
                    <li><a href="#ab">About</a></li>
                    <li><a href="#j">Join Us</a></li>
                    <li><a href="#bll">News</a></li>
                  
                </ul>
            </nav>
            <a href="mailto:jadabonajem5@gmail.com" id="lnk">Contact Us</a>
        </header>
        
<div class = "slider-container" id="ssl">
    <div class = "slider">
       <div class ="image">
        <a href="map.php" id="link1"><img src="mapback.jpg" alt="Image 1" id="image1"></a>
<button id = "slider-button"><img src="slider.png"></button>
<p id ="r" style="color:white; font-family: fantasy;" >We offer up road updates across the day to make your trips saffer. Click on the Image!</p>
</div>
</div>
</div>
<div class = "login-c1" id="j">
    <div class = " login-container1"> 
        <p id ="quote"> Think and Drive Stay Alive!</p>
        <img src = "red1.jpg"/>
        <div class = "fisrtpageformbutton">
            <p>Returning User?</p>
    <button class = "firs-b"><a href="login.php">Log in</a></button>
    <p>New to our website?</p>
    <button class="firs-b"><a href="sign.php">Sign up</a></button><br><br>
    <button id="logout-first"><a href="?logout=1" style="text-decoration:none;">Logout</a></button>
        </div>
</div>
</div>
<Br>
    <br>
    <div id ="ab"></div>
<div class ="about" >
<p>About Us</p>
<p>We are thrilled to introduce a dedicated team of computer science students who have embarked on an innovative journey to develop a cutting-edge website focused on real-time traffic conditions. Harnessing their technical expertise and passion for problem-solving, these bright minds are crafting a platform that aims to streamline daily commutes by providing up-to-the-minute traffic updates, congestion reports, and route optimization. Their project not only reflects their commitment to enhancing road safety and efficiency but also showcases the practical application of their academic knowledge in making a tangible difference in the community.
</p>
</div>
<div class = "aim" id ="am">
<P>Our Aim</P>
<P>Our aim with this project is to revolutionize the way commuters navigate through daily traffic by providing a dynamic and interactive traffic conditions website. Leveraging advanced algorithms and real-time data, our goal is to offer users a comprehensive view of traffic patterns, helping them to avoid congested routes and reduce travel time. This platform is designed not only to enhance the driving experience but also to contribute to reducing the environmental impact of road traffic. By empowering drivers with knowledge and choice, we aspire to create a more connected and efficient world on the move.</P>
</div>
<script>
    var count = 1;
    function toggleImage() {
        var link = document.getElementById("link1");
        var image = document.getElementById("image1");
        count++;

        if (count % 2 == 0) {
            link.href = "social.php";
            document.getElementById("r").innerHTML = "Share and receive live road reports with others inside your country!";
            image.src = "tr.jpg";
        } else {
            document.getElementById("r").innerHTML = "We offer up road updates across the day to make your trips saffer. Click on the Image!!";
            link.href = "map.php";
            image.src = "mapback.jpg";
        }
    }

    var sl = document.getElementById("slider-button");
    sl.addEventListener('click', toggleImage); 
</script>

<br>
<br>
<div id ="bll">
    <h2>News</h2>
<a href="news.php"><img width="40%"src="newsfirst.jpg"/></a>
<p style="margin-top: -60px; color: white; font-family: fantasy; font-size: large;  padding: 5px;">Never miss out on Politics, Econmics, Sport <br>
Click here!
</p>
</div>
<footer><P>&COPY; Mohammed Joukhadar - Jad Abou Najem</P>
    <P>Contact Us <a href="mailto:jadabonajem5@gmail.com"> On This Email</a></P> <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</P></footer>  


    </body>
</html>