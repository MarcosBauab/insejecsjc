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

</head>

<body>
    <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <!-- Imagem Logo -->
        <div class="brand">
          <!--<a href="index.html"><h1><span>insejec</span> sjc</h1></a>-->
          <div class="header-img"><a href="<?php echo INCLUDE_PATH ?>">
            <img src="<?php echo INCLUDE_PATH ?>img/logo-header.svg" alt="img" style="width: 120px;"></a></div>
        </div>

        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <!-- Início -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>">
              <button class="dropbtn">Início 
              </button></a>
            </div>

            <!-- Igreja -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>igreja">
                <button class="dropbtn">Igreja 
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>como_chegar#local">Como chegar</a>
                <a href="<?php echo INCLUDE_PATH ?>igreja#historia">Nossa História</a>
                <a href="<?php echo INCLUDE_PATH ?>igreja#pastores">Pastores</a>
              </div>
            </div>

            <!-- Sobre -->
            <div class="dropdown">
            <a href="<?php echo INCLUDE_PATH ?>sobre#inicio">
                <button class="dropbtn">Sobre 
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>decretos#inicio">Decretos</a>
                <a href="<?php echo INCLUDE_PATH ?>quem_somos#inicio">Quem Somos</a>
                <a href="<?php echo INCLUDE_PATH ?>visao_missao#inicio">Visão e Missão</a>
                <a href="<?php echo INCLUDE_PATH ?>nossa_historia#inicio">Nossa História</a>
                <a href="<?php echo INCLUDE_PATH ?>que_cremos#inicio">Em Que Cremos</a>
                <a href="<?php echo INCLUDE_PATH ?>nossos_valores#inicio">Nossos Valores</a>
                <a href="<?php echo INCLUDE_PATH ?>visao_compromisso#inicio">Visão e Compromisso</a>
                <a href="<?php echo INCLUDE_PATH ?>valnice#inicio">Valnice Milhomens</a>
              </div>
            </div> 

            <!-- Redes -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>redes">
                <button class="dropbtn">Redes 
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>redes#grupos">Nossas redes</a>
                <a href="<?php echo INCLUDE_PATH ?>eventos#redes">Atividades</a>
              </div>
            </div>

            <!-- Células -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>celulas">
                <button class="dropbtn">Células 
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>celulas#visao_celular">Visão Celular</a>
                <a href="<?php echo INCLUDE_PATH ?>celulas#search-table">Nossas Células</a>
                <a href="<?php echo INCLUDE_PATH ?>celulas#mapa">Mapa</a>
              </div>
            </div> 

            <!-- Escolas -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>escolas">
                <button class="dropbtn">Escolas 
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>universidade_da_vida#uv">Universidade da Vida</a>
                <!--<a href="capacitacao_destino.html#cd">--><a>Capacitação Destino</a>
              </div>
            </div> 

            <!-- Eventos -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>eventos">
                <button class="dropbtn">Eventos
              </button></a>
              <div class="dropdown-content">
                <a href="<?php echo INCLUDE_PATH ?>eventos#geral">Igreja</a>
                <a href="<?php echo INCLUDE_PATH ?>eventos#redes">Redes</a>
              </div>
            </div>

            <!-- Contato -->
            <div class="dropdown">
              <a href="<?php echo INCLUDE_PATH ?>contato">
              <button class="dropbtn">Contato 
              </button></a>
            </div>

            <!-- Doações -->
            <div class="dropdown">
              <!--<a href="doar.html">--><a>
              <button class="dropbtn">Doações
              </button></a>
            </div>
            

            <li><a href="<?php echo INCLUDE_PATH ?>" data-after="Início">Início</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>igreja#historia" data-after="Igreja">Igreja</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>sobre#inicio" data-after="Sobre">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>redes#grupos" data-after="Redes">Redes</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>celulas#apresentacao" data-after="Células">Células</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>escolas#geral" data-after="Escolas">Escolas</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>eventos#geral" data-after="Eventos">Eventos</a></li>
            <li><a href="<?php echo INCLUDE_PATH ?>contato#welcome" data-after="Contato">Contato</a></li>
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
          <a href="<?php echo INCLUDE_PATH ?>igreja#historia"><p>Nossa Igreja</p></a>
          <a href="<?php echo INCLUDE_PATH ?>visao_missao#inicio"><p>Visão e Missão</p></a>
          <a href="<?php echo INCLUDE_PATH ?>nossos_valores#inicio"><p>Nossos Valores</p></a>
          <a href="<?php echo INCLUDE_PATH ?>visao_celular#inicio"><p>Visão Celular</p></a>
          <a href="<?php echo INCLUDE_PATH ?>que_cremos#inicio"><p>Em que cremos</p></a>
        </div>
        <div class="column">
          <h2>Nossos pastores</h2>
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr0"><p>Rosivaldo Merloto</p></a>
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr1"><p>Priscila Merloto</a>
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr2"><p>Mikio Furuzawa</p></a>
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr3"><p>Gisele Furuzawa</p></a>
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

      
      <p>© 2020 INSEJEC SJC. Todos os direitos reservados. | <a href="<?php echo INCLUDE_PATH ?>politica_privacidade#termos">Política de Privacidade</a></p>
    </div>
  </section>
  <!-- End Footer -->
  
  <button id="scroll"><i class="material-icons">arrow_upward</i></button>

  <script src="<?php echo INCLUDE_PATH ?>js/app.js"></script>
    
</body>
</html>