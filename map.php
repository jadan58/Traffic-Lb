<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azure Map with Traffic in Beirut</title>
    <link rel="stylesheet" href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/3/atlas.min.css" type="text/css">
    <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/3/atlas.min.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        #myMap {
            height: 50vh; /* Full height of the viewport */
            width: 100vw; /* 50% of the viewport width */
        }
        #mapb{
          background-image: url(repeat2.jpg);

        }
        h1{
          background-color: #062b5f;
          color: aliceblue;
          text-align: center;
        }
        p{
          background-color: #062b5f;
          color: aliceblue;
          text-align: center;
          font-size: large;
        }
        footer{
          background-color:#062b5f ;
  text-align: center;
  color: white;
}
footer a{
   color: white;
   font-family: fantasy;

        }
    </style>
</head>
<body id ="mapb">
  <h1>Always Updated With Live Traffic Using Azure Maps and TMC Lebanon!</h1>
  <p><span><strong>Careful!</strong></span> highlited tracks indicate traffic </p>
    <div id="myMap"></div>
    <script>
        var map;

        function GetMap() {
            map = new atlas.Map('myMap', {
                center: [35.5131, 33.8869], 
                zoom: 12,
                view: 'Auto',

                authOptions: {
                    authType: 'subscriptionKey',
                    subscriptionKey: ""
                }
            });


            map.events.add('ready', function () {
                
                map.setTraffic({
                    incidents: true,
                    flow: 'relative'
                });
            });
        }

        
        window.onload = GetMap;
    </script>
    
    <a class="twitter-timeline" href="https://twitter.com/tmclebanon?ref_src=twsrc%5Etfw">Tweets by tmclebanon</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <footer><P>&COPY; BAU</P>
      <P>Contact Us <a href="mailto:jadabonajem5@gmail.com"> On This Email</a></P> <a href="https://twitter.com/twitter?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></footer>  
  
  
</body>
</html>
