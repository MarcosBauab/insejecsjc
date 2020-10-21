<?php include('config.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="./img/icon-site.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>style.css">
  <?php
      $url = isset($_GET['url']) ? $_GET['url'] : 'home' ;

  ?>


  <?php if($url == 'igreja'){
      echo '<title>'.TITULO.'</title>';
    } else{
      echo '<title>INSEJEC SJC - Igreja Nacional do Senhor Jesus Cristo em São José dos Campos</title>';
    } 

  ?>
</head>
<body>
    <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <!--<a href="index.html"><h1><span>insejec</span> sjc</h1></a>-->
          <div class="header-img"><a href="<?php echo INCLUDE_PATH ?>">
            <img src="<?php echo INCLUDE_PATH ?>img/logo-header.svg" alt="img" style="width: 120px;"></a></div>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>">
              <button class="dropbtn">Início 
              </button></a>
            </div>
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>igreja">
                <button class="dropbtn">Igreja 
                
              </button></a>
              <div class="dropdown-content">
                <a href="como_chegar.html#local">Como chegar</a>
                <a href="igreja.html#historia">Nossa História</a>
                <a href="igreja.html#pastores">Pastores</a>
              </div>
            </div> 
            <div class="dropdown">
              <a href="redes.html">
                <button class="dropbtn">Redes 
                
              </button></a>
              <div class="dropdown-content">
                <a href="redes.html#grupos">Nossas redes</a>
                <a href="eventos.html#redes">Atividades</a>
              </div>
            </div> 
            <div class="dropdown">
              <a href="celulas.html">
                <button class="dropbtn">Células 
                
              </button></a>
              <div class="dropdown-content">
                <a href="celulas.html#apresentacao">Visão Celular</a>
                <a href="celulas.html#search-table">Nossas Células</a>
                <a href="celulas.html#mapa">Mapa</a>
              </div>
            </div> 
            <div class="dropdown">
              <!--<a href="escolas.html">--><a href="universidade_da_vida.html#uv">
                <button class="dropbtn">Escolas 
                
              </button></a>
              <div class="dropdown-content">
                <a href="universidade_da_vida.html#uv">Universidade da Vida</a>
                <!--<a href="capacitacao_destino.html#cd">--><a>Capacitação Destino</a>
              </div>
            </div> 
            <div class="dropdown">
              <a href="eventos.html">
                <button class="dropbtn">Eventos
                
              </button></a>
              <div class="dropdown-content">
                <a href="eventos.html#geral">Igreja</a>
                <a href="eventos.html#redes">Redes</a>
              </div>
            </div> 
            <div class="dropdown">
              <a href="contato.html">
              <button class="dropbtn">Contato 
              </button></a>
            </div>
            <div class="dropdown">
              <!--<a href="doar.html">--><a>
              <button class="dropbtn">Doações
              </button></a>
            </div>
            <li><a href="<?php echo INCLUDE_PATH ?>" data-after="Início">Início</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>igreja#historia" data-after="Igreja">Igreja</a></li>
            <li><a href="redes.html#grupos" data-after="Redes">Redes</a></li>
            <li><a href="celulas.html#apresentacao" data-after="Células">Células</a></li>
            <li><a href="universidade_da_vida.html#uv" data-after="Escolas">Escolas</a></li>
            <li><a href="eventos.html#geral" data-after="Eventos">Eventos</a></li>
            <li><a href="contato.html#welcome" data-after="Contato">Contato</a></li>
            <li><!--<a href="doar.html#welcome" data-after="Doações">--><a data-after="Doações">Doações</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Igreja Nacional <span></span></h1> <!-- [span] é o efeito da animação -->
        <h1>do Senhor Jesus Cristo <span></span></h1>
        <h1>em São José dos Campos <span></span></h1>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <?php
        
        

        if(file_exists($url.'.php')){
            include($url.'.php');
        } else {
            include('home.php');
        }

  ?>
  <!-- Footer -->
  
  
  <section id="footer">
    <div class="footer container">
      <div class="row">
        <div class="column">
          <br><br><br>
          <a href="index.html"><img src="./img/logo-footer.svg" class="f-img"></a>
        </div>
        <div class="column">
          <h2>Sobre nós</h2>
          <a href="igreja.html#welcome"><p>Nossa Igreja</p></a>
          <a href="visao_missao.html#welcome_txt"><p>Visão e Missão</p></a>
          <a href="nossos_valores.html#welcome_txt"><p>Nossos Valores</p></a>
          <!--<a href="visao_celular.html#welcome_txt">--><a><p>Visão Celular</p></a>
          <a href="que_cremos.html#welcome_txt"><p>Em que cremos</p></a>
        </div>
        <div class="column">
          <h2>Nossos pastores</h2>
          <a href="igreja.html#pr0"><p>Rosivaldo Merloto</p></a>
          <a href="igreja.html#pr1"><p>Priscila Merloto</a>
          <a href="igreja.html#pr2"><p>Mikio Furuzawa</p></a>
          <a href="igreja.html#pr3"><p>Gisele Furuzawa</p></a>
        </div>
        <div class="column">
          <h2>Links</h2>
          <a target="_blank" rel="noopener noreferrer" href="https://www.insejec.com.br/"><p>Portal INSEJEC</p></a>
          <a target="_blank" rel="noopener noreferrer" href="http://palavradafe.com.br/"><p>Palavra da Fé</p></a>
          <a target="_blank" rel="noopener noreferrer" href="https://mci12.com/"><p>Igreja MCI</p></a>
          <a target="_blank" rel="noopener noreferrer" href="http://g12brasil.com/"><p>G12 Brasil</p></a>
          <a target="_blank" rel="noopener noreferrer" href="http://visiong12.com/"><p>G12 Internacional</p></a>
        </div>
        <div class="column">
          <h2>Mídia</h2>
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pg/insejecsjcampos/photos/?ref=page_internal"><p>Fotos</p></a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/c/INSEJECSJCampos/videos"><p>Vídeos</p></a>
          <h2><br><br>Siga-nos!</h2>
          <div class="social-icon">
            <div class="social-item">
              <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/insejecsjcampos"><img src="<?php echo INCLUDE_PATH ?>img/icon_fac_xs.svg"/></a>
            </div>
            <div class="social-item">
              <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/insejec_sjc/"><img src="<?php echo INCLUDE_PATH ?>img/icon_ins_xs.svg"/></a>
            </div>
            <div class="social-item">
              <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCbEzKNxd0pdJdkao0hO9sTw"><img src="<?php echo INCLUDE_PATH ?>img/icon_ytb_xs.svg"/></a>
            </div>
          </div>

        </div>
      </div>

      
      <p>© 2020 INSEJEC SJC. Todos os direitos reservados. | <a href="politica_privacidade.html#welcome_txt">Política de Privacidade</a></p>
    </div>
  </section>
  <!-- End Footer -->
  
  <button id="scroll"><i class="material-icons">arrow_upward</i></button>


  <script src="<?php echo INCLUDE_PATH ?>js/app.js"></script>
    

</body>
</html>