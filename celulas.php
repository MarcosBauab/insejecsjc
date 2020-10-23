
<!-- Para o mapa funcionar -->
<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


  <style>
    #hero .container { min-height: 60vh;} 
    #services .services {	padding: 70px 0; }

    .search-table-item-A1, .search-table-item-A2, .search-table-item-A3, .search-table-item-A4, .search-table-item-A5, .search-table-item-A6, .search-table-item-A7, .search-table-item-A8, .search-table-item-B1, .search-table-item-B2, .search-table-item-B3, .search-table-item-B4, .search-table-item-B5, .search-table-item-B6, .search-table-item-B7, .search-table-item-B8 {
      background-size: cover;
      width: 200px;
      height: 200px;
      background-position: right;
      margin-left: 0px;
      border-radius: 15px;
    }
    .search-table-item-A1 { background-image: url(./img/celulas/cell-A1.png); }
    .search-table-item-A2 { background-image: url(./img/celulas/cell-A2.png); }
    .search-table-item-A3 { background-image: url(./img/celulas/cell-A3.png); }
    .search-table-item-A4 { background-image: url(./img/celulas/cell-A4.png); }
    .search-table-item-A5 { background-image: url(./img/celulas/cell-A5.png); }
    .search-table-item-A6 { background-image: url(./img/celulas/cell-A6.png); }
    .search-table-item-A7 { background-image: url(./img/celulas/cell-A7.png); }
    .search-table-item-A8 { background-image: url(./img/celulas/cell-A8.png); }
    .search-table-item-B1 { background-image: url(./img/celulas/cell-B1.png); }
    .search-table-item-B2 { background-image: url(./img/celulas/cell-B2.png); }
    .search-table-item-B3 { background-image: url(./img/celulas/cell-B3.png); }
    .search-table-item-B4 { background-image: url(./img/celulas/cell-B4.png); }
    .search-table-item-B5 { background-image: url(./img/celulas/cell-B5.png); }
    .search-table-item-B6 { background-image: url(./img/celulas/cell-B6.png); }
    .search-table-item-B7 { background-image: url(./img/celulas/cell-B7.png); }
    .search-table-item-B8 { background-image: url(./img/celulas/cell-B8.png); }
    @media only screen and (min-width: 768px) {
      .search-table-item-A1, .search-table-item-A2, .search-table-item-A3, .search-table-item-A4, .search-table-item-A5, .search-table-item-A6, .search-table-item-A7, .search-table-item-A8, .search-table-item-B1, .search-table-item-B2, .search-table-item-B3, .search-table-item-B4, .search-table-item-B5, .search-table-item-B6, .search-table-item-B7, .search-table-item-B8 { width: 250px; height: 250px; }
    }

    .service-bottom {
      border: 5px solid #0172bd;
      border-radius: 4px;
      filter:opacity(.8);
    }
  </style>

 
  <!-- Welcome Section -->
  <section id="apresentacao">
  <section id="welcome">
    <div class="welcome container">
      <div class="welcome-top">
        <h1 class="section-title">Visão <span>Celular</span></h1>
      </div>
      <div class="welcome-bottom">
        <p>
          Muitas Igrejas em Células no mundo usam a célula com dois propósitos: evangelismo e edificação, enquanto o modelo G12 usa a célula aberta para evangelismo e o grupo de doze só para discipulado. Portanto, o propósito principal de nossas células é alcançar os perdidos com quem os discípulos possam ter contato, como família, parentes, amigos, vizinhos, colegas na escola, no trabalho, e toda oportunidade de contato, natural ou criada.<br>

          Cada Célula tem a meta de multiplicar-se em doze outras células. Aqui está outra diferença entre o modelo G12 e outros modelos. A meta é dar à luz, a partir da célula evangelística, a doze outras células. Para cumprir esta meta, doze líderes na célula mãe devem ser formados. Isto significa que um número maior tem que ser alcançado, uma vez que nem todos se tornam líderes.<br><br>
          <!--<br><br><a href="visao_celular.html">saiba mais - visao celular</a>-->
        </p>
      </div>
      <a href="<?php echo INCLUDE_PATH ?>visao_celular#inicio" type="button" class="cta" style="font-size: 15px;">Saiba Mais</a>
    </div>
  </section>
  </section>
  <!-- End Welcome Section -->


  <!-- Search Table Section -->
  <section id="search-table">
    <div class="search-table container">
      <div class="search-table-top">
        <h1 class="section-title"><span>Nossas</span> Células</h1>

      <button id="btnCollapse" type="button" class="collapsible" style="padding-left:35px">FILTRAR</button>
        <div class="content">
          <form action="" id="Details">
          <fieldset>
            <div class="rowB">

              <div class="columnB">
                <h1>Horário</h1>
                <p>
                <label><input type="radio" name="Option0" value="All" checked="checked"> Todos </label>  <br>
                <label><input type="radio" name="Option0" value="Manha" > Manhã </label>  <br>
                <label><input type="radio" name="Option0" value="Tarde" > Tarde </label>  <br>
                <label><input type="radio" name="Option0" value="Noite" > Noite </label> 
                </p>
              </div>

              <div class="columnB">
                <h1>Tipo</h1>
                <p>
                <label><input type="radio" name="Option1" value="All" checked="checked"> Todos </label>  <br>
                <label><input type="radio" name="Option1" value="Homens" > Homens </label>  <br>
                <label><input type="radio" name="Option1" value="Mulheres" > Mulheres </label>  <br>
                <label><input type="radio" name="Option1" value="Mista" > Mista </label>  <br>
                <label><input type="radio" name="Option1" value="Jovens" > Jovens </label>
                </p>
              </div>

              <div class="columnB">
                <h1>Região</h1>
                <p>
                <label><input type="radio" name="Option2" value="All" checked="checked"> Todos </label>  <br>
                <label><input type="radio" name="Option2" value="Centro" > Centro </label>  <br>
                <label><input type="radio" name="Option2" value="Norte" > Norte </label>  <br>
                <label><input type="radio" name="Option2" value="Leste" > Leste </label>  <br>
                <label><input type="radio" name="Option2" value="Sudeste" > Sudeste </label>  <br>
                <label><input type="radio" name="Option2" value="Sul" > Sul </label>  <br>
                <label><input type="radio" name="Option2" value="Oeste" > Oeste </label>
                </p>
              </div>
            </div>
            <!--<a href="celulas.html#welcome" type="button" class="cta">Pesquisar</a>-->
          </fieldset>
          </form>
        </div>
      </div>
      <div class="search-table-bottom"> 

        <div class="row">
          <div class="column">
            <table id="DataTable"><!--border="1px"-->

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mista</p></td>
              <td class="Type2"><p>Mista</p></td>
              <td class="Local"><p>Sul</p></td>
              <td>
              <div class="search-table-item-A1">
                <div class="search-table-item">
                  <h1>Abba Pai</h1>
                  <p>Célula Mista<br>Quintas-feiras às 19:00<br>Bairro Jardim Satélite</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mista</p></td>
              <td class="Type2"><p>Mista</p></td>
              <td class="Local"><p>Leste</p></td>
              <td>
              <div class="search-table-item-A2">
                <div class="search-table-item">
                  <h1>Amor do Pai</h1>
                  <p>Célula Mista<br>Quartas-feiras às 19:30<br>Bairro Cidade Vista Verde</p>
                  </div>
                </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Oeste</p></td>
              <td>
              <div class="search-table-item-A3">
                <div class="search-table-item">
                  <h1>Ester</h1>
                  <p>Célula de Mulheres<br>Quartas-feiras às 20:00<br>Bairro Jardim das Indústrias</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Homens</p></td>
              <td class="Type2"><p>Homens</p></td>
              <td class="Local"><p>Leste</p></td>
              <td>
              <div class="search-table-item-A4">
                <div class="search-table-item">
                  <h1>Manancial</h1>
                  <p>Célula de Homens<br>Quartas-feiras às 20:00<br>Bairro Cidade Vista Verde</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Sul</p></td>
              <td>
              <div class="search-table-item-A5">
                <div class="search-table-item">
                  <h1>Odres Novos (♀)</h1>
                  <p>Célula de Mulheres<br>Quartas-feiras às 18:30<br>Bairro Floradas de São José</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Leste</p></td>
              <td>
              <div class="search-table-item-A6">
                <div class="search-table-item">
                  <h1>Rosa de Saron</h1>
                  <p>Célula de Mulheres<br>Quartas-feiras às 20:00<br>Bairro Parque Novo Horizonte</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Sul</p></td>
              <td>
              <div class="search-table-item-A7">
                <div class="search-table-item">
                  <h1>Talita Cumi</h1>
                  <p>Célula de Mulheres<br>Quartas-feiras às 20:00<br>Bairro Cidade Morumbi</p>
                </div>
              </div>
              </td>
              </tr>

              <tr>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Jovens</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Sul</p></td>
              <td>
              <div class="search-table-item-A8">
                <div class="search-table-item">
                  <h1>Vem Ser 2</h1>
                  <p>Célula de Jovens - Mulheres<br>Quintas-feiras às 19:30<br>Bairro Jardim Satélite</p>
                </div>
              </div>
              </td>
              </tr>

            </table>
          </div>
          <div class="column">
            <table id="DataTable">

              <tr>
              <td>
              <div class="search-table-item-B1">
                <div class="search-table-item">
                  <h1>Águas Vivas</h1>
                  <p>Célula de Homens<br>Quartas-feiras às 20:00<br>Bairro Jardim Santa Hermínia</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Homens</p></td>
              <td class="Type2"><p>Homens</p></td>
              <td class="Local"><p>Leste</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B2">
                <div class="search-table-item">
                  <h1>Âncora</h1>
                  <p>Célula de Homens<br>Quartas-feiras às 19:30<br>Bairro Floradas De São José</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Homens</p></td>
              <td class="Type2"><p>Homens</p></td>
              <td class="Local"><p>Sul</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B3">
                <div class="search-table-item">
                  <h1>Filhas do Leão</h1>
                  <p>Célula de Mulheres<br>Segundas-feiras às 20:00<br>Bairro Vila Ema</p>
                  </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Centro</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B4">
                <div class="search-table-item">
                  <h1>Metamorfose</h1>
                  <p>Célula de Mulheres<br>Quartas-feiras às 15:00<br>Bairro Floradas de São José</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Tarde</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Sul</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B5">
                <div class="search-table-item">
                  <h1>Odres Novos (♂)</h1>
                  <p>Célula de Homens<br>Segundas-feiras às 19:30<br>Bairro Parque Residencial Aquarius</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Homens</p></td>
              <td class="Type2"><p>Homens</p></td>
              <td class="Local"><p>Oeste</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B6">
                <div class="search-table-item">
                  <h1>Sementes</h1>
                  <p>Célula de Mulheres<br>Segundas-feiras às 19:30<br>Bairro Parque Residencial Aquarius</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Mulheres</p></td>
              <td class="Type2"><p>Mulheres</p></td>
              <td class="Local"><p>Oeste</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B7">
                <div class="search-table-item">
                  <h1>Vem Ser</h1>
                  <p>Célula de Jovens - Mista<br>Sábados às 16:30<br>Bairro Parque Residencial Aquarius</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Tarde</p></td>
              <td class="Type"><p>Jovens</p></td>
              <td class="Type2"><p>Mista</p></td>
              <td class="Local"><p>Oeste</p></td>
              </tr>

              <tr>
              <td>
              <div class="search-table-item-B8">
                <div class="search-table-item">
                  <h1>Vem Ser Mais</h1>
                  <p>Célula de Jovens - Homens<br>Terças-feiras às 19:30<br>Bairro Bosque dos Eucaliptos</p>
                </div>
              </div>
              </td>
              <td class="Time"><p>Noite</p></td>
              <td class="Type"><p>Jovens</p></td>
              <td class="Type2"><p>Homens</p></td>
              <td class="Local"><p>Sul</p></td>
              </tr>

            </table>
          </div>
        </div>

        
      </div>

      <div class="search-table-top"> 
        <a href="<?php echo INCLUDE_PATH ?>contato#mensagem" type="button" class="cta">Quero participar</a>
      </div>
    </div>
  </section>
<!-- End Seach Table Section -->

<div style="min-height: 200px;
  background-color: #12151a;"></div>

<!-- Quote Section -->
  <section id="quote">
    <div class="quote container">
    <p><img src="https://image.flaticon.com/icons/svg/25/25672.svg" class="q-img">Sonha com uma igreja muito grande, porque os sonhos são a linguagem do meu Espírito.<img src="https://image.flaticon.com/icons/svg/56/56826.svg" class="q-img"></p>
    <h1>César Castellanos</h1>
    </div>
  </section>
  <!-- End Quote Section -->

  <div style="min-height: 200px;
  background-color: #12151a;"></div>

  <!-- Service Section -->
  <section id="mapa">
  <section id="services">
    <div class="services container">
      <!--<div class="service-top">-->
        <h1 class="section-title"><span>Mapa</span> celular</h1>
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
    </div>
  </section>
  </section>
  <!-- End Service Section -->


  <script type="text/javascript" src="jquery-3.5.1.js"></script> 

  <script>
    var mymap = L.map('mapid').setView([-23.196247, -45.905346], 13);
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
  
    var marker = L.marker([-23.196247, -45.905346]).addTo(mymap).bindPopup("INSEJEC").openPopup();

    L.circle([-23.221865, -45.895028], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Abba Pai");

    L.circle([-23.206812, -45.777430], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Águas Vivas'");

    L.circle([-23.180096, -45.825919], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Amor do Pai");

    L.circle([-23.219453, -45.890495], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Âncora");

    L.circle([-23.225577, -45.925313], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Ester");

    L.circle([-23.207579, -45.901943], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Filhas do Leão");

    L.circle([-23.179986, -45.831584], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Manancial");

    L.circle([-23.220311, -45.886828], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Odres Novos (♀)");

    L.circle([-23.220575, -45.889216], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Metamorfose");

    L.circle([-23.218246, -45.907578], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Odres Novos (♂)");

    L.circle([-23.192734, -45.785286], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Rosa de Saron");

    L.circle([-23.217571, -45.906940], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Sementes");

    L.circle([-23.246176, -45.903254], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Talita Cumi");

    L.circle([-23.221717, -45.908617], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Vem Ser");

    L.circle([-23.231786, -45.878320], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Vem Ser 2");

    L.circle([-23.244979, -45.887301], 200, {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(mymap).bindPopup("Vem Ser Mais");
  /*
    var popup = L.popup();
  
    function onMapClick(e) {
      popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
    }
  
    mymap.on('click', onMapClick);*/
  </script>
