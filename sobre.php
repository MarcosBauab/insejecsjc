<title>Sobre - INSEJEC SJC</title>
<style>
    .cta {
      font-size: 18px;
    }

    @font-face {
      font-family: logoFont;
      src: url("./misc/OptimusPrinceps.ttf");
    }

    #welcome .welcome-top {
      padding-top: 100px;
    }
    #welcome .cta {
      display: inline-block;
      padding: 20px 50px;
      font-size: 2rem;
      border: none;

      margin-left: 20px;
      margin-right: 20px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      opacity: .9;
      filter: brightness(110%);
      transition: .3s ease;

      width: 400px;
      height: 80px;
    }
    #welcome .cta:hover {
      color: #fff;
      filter: brightness(160%);
      transition: .3s ease;
      opacity: 1;
      transform: scale(1.01);
    }
    @media only screen and (max-width: 850px) {
      #welcome .cta {
        width: 300px;
        height: 60px;
        font-size: 1.5rem;
      }
    }
    @media only screen and (min-width: 850px){
      @media only screen and (max-width: 1040px){
        #welcome .cta {
          width: 350px;
          height: 70px;
          font-size: 1.7rem;
        }
      }
    }
  </style>

  <!-- Welcome Section -->
  <section id="inicio">
  <section id="welcome">
    <div class="welcome container">
      <div class="welcome-top">
        <h1 class="section-title">S<span>o</span>bre</h1>
          <p>Somos uma igreja que busca cumprir a grande comissão de Jesus: ganhar almas e fazer discípulos. Nosso desejo é que as pessoas se sintam como uma família sempre que comparecerem a uma de nossas reuniões ou a uma de nossas células.</p>
      </div>
      <div class="welcome-bottom">

        <a href="<?php echo INCLUDE_PATH ?>decretos#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-decretos.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>quem_somos#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-somos.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>visao_missao#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-missao.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>nossa_historia#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-historia.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>que_cremos#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-cremos.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>nossos_valores#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-valores.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>visao_compromisso#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-compromisso.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>valnice#inicio" type="button" class="cta" style="background-image: url(./img/sobre/sobre-valnice.jpg);"></a>

      </div>
    </div>
  </section>
  </section>
  <!-- End Welcome Section -->

  <button id="scroll"><i class="material-icons">arrow_upward</i></button>