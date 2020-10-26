
<!-- Para o mapa funcionar -->
  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>



  <style>
    #hero .container { min-height: 60vh;} 
    #services .services {	padding: 70px 0; }

    .service-bottom {
      filter:opacity(.9);
    }
    #services .services{
      padding-top: 160px;
    }

    #services .service-bottom p {
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    transition: .3s ease;
    font-weight: 500;
    color: #fff;
    }
    @media only screen and (max-width: 850px) {
      #services .service-bottom p {
        font-size: 16px;
      }
    }
    /*map*/
    @media only screen and (min-width: 1200px) { /*a*/
      #services .service-bottom-b{
        visibility: hidden;
        height: 0px;
    		width: 0px;
      }
      #services .service-bottom-c{
        visibility: hidden;
        height: 0px;
    		width: 0px;
      }
    }
    @media only screen and (max-width: 1200px) { /*b*/
      @media only screen and (min-width: 768px) { 
        #services .service-bottom-a{
          visibility: hidden;
          height: 0px;
          width: 0px;
        }
        #services .service-bottom-c{
          visibility: hidden;
          height: 0px;
          width: 0px;
        }
      }
    }
    @media only screen and (min-width: 0px) { /*c*/
      @media only screen and (max-width: 768px) {
        #services .service-bottom-a{
          visibility: hidden;
          height: 0px;
          width: 0px;
        }
        #services .service-bottom-b{
          visibility: hidden;
          height: 0px;
          width: 0px;
        }
      }
    }
  </style>


  <!-- Service Section -->
  <section id="local">
  <section id="services">
    <div class="services container">
      <!--<div class="service-top">-->
        <h1 class="section-title">Como <span>Chegar</span></h1>
        
        <div class="service-bottom">
          <p>Rua Dr. Fernando Costa, 182<br>Jardim Esplanada II, São José dos Campos - SP<br>12242-570</p>
        </div>
      
        <div class="service-bottom">
        <div id="mapid" class="leaflet-container leaflet-fade-anim leaflet-grab leaflet-touch-drag" tabindex="0">
          <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(-143px, -30px, 0px);">
              <div class="leaflet-pane leaflet-shadow-pane"></div>
              <div class="leaflet-pane leaflet-overlay-pane"></div>
              <div class="leaflet-pane leaflet-marker-pane"></div>
              <div class="leaflet-pane leaflet-tooltip-pane"></div>
              <div class="leaflet-pane leaflet-popup-pane"></div>
              <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(1.0482e+06px, 697409px, 0px) scale(4096);"></div>
          </div>
          <div class="leaflet-control-container">
              <div class="leaflet-top leaflet-left">
                <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button" aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#" title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
              </div>
              <div class="leaflet-top leaflet-right"></div>
              <div class="leaflet-bottom leaflet-left"></div>
              <div class="leaflet-bottom leaflet-right">
                <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> | Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></div>
              </div>
          </div>
        </div>
      </div>

      <div class="service-bottom">
        <div class="service-bottom-a">
          <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              var ro = !!d.getElementById(id);
              js = d.createElement(s); js.id = id;
              js.src = "https://widgets.moovit.com/ws/AD50A1586952AD36E0530100007FD50A/3670640";
              fjs.parentNode.insertBefore(js, fjs);
          })(document, 'script', 'moovit-jsw');</script>
          <div class="mv-gd-widget-20" 
              data-width="1100" 
              data-height="210"
              data-id="3670640">
          </div>
        </div>
      </div>

      <div class="service-bottom">
        <div class="service-bottom-b">
          <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              var ro = !!d.getElementById(id);
              js = d.createElement(s); js.id = id;
              js.src = "https://widgets.moovit.com/ws/AD50A1586952AD36E0530100007FD50A/3670640";
              fjs.parentNode.insertBefore(js, fjs);
          })(document, 'script', 'moovit-jsw');</script>
          <div class="mv-gd-widget-20" 
              data-width="650" 
              data-height="210"
              data-id="3670640">
          </div>
        </div>
      </div>

      <div class="service-bottom">
        <div class="service-bottom-c">
          <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              var ro = !!d.getElementById(id);
              js = d.createElement(s); js.id = id;
              js.src = "https://widgets.moovit.com/ws/AD50A1586952AD36E0530100007FD50A/3670640";
              fjs.parentNode.insertBefore(js, fjs);
          })(document, 'script', 'moovit-jsw');</script>
          <div class="mv-gd-widget-20" 
              data-width="300" 
              data-height="210"
              data-id="3670640">
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>
  </section>
  <!-- End Service Section -->

  <script type="text/javascript" src="jquery-3.5.1.js"></script>
 
  <script>
    var mymap = L.map('mapid').setView([-23.196247, -45.905346], 15);
    //var mymap = L.map('mapid').setView([51.505, -0.09], 13);
  
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1
    }).addTo(mymap);
  
    var marker = L.marker([-23.196247, -45.905346]).addTo(mymap).bindPopup("INSEJEC SJC").openPopup();
  </script>

</body>
</html>