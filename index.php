

        <script type="text/javascript" src="https://api.longdo.com/map/?key=05431d206b12178770f382c7a50f50a1 "></script>
        <script>

          function init() {
            map = new longdo.Map({
              placeholder: document.getElementById('map')
            });
          }
         function ghk(){
          map.location(longdo.LocationMode.Geolocation);
          var result = map.location();
          console.log(result);
            document.getElementById('gps1').value=result['lat']+","+result['lon'];
          
          }
        </script>
    </head>
    <body onload="init();">
      <input type="text" name="gps1" id="gps1" value="">
      <button onclick="ghk()">test</button>
    </body>

