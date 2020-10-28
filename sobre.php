<title>Sobre - Insejec São José dos Campos</title>
<style>
    .container { min-height: 60vh;} 
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
      filter: grayscale(.1);
      opacity: .9;
      transition: .3s ease;

      width: 400px;
      height: 80px;
    }
    #welcome .cta:hover {
      color: #fff;
      filter: grayscale(0);
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
        <h1 class="section-title">Sobre</h1>
          <p>Somos uma igreja que busca cumprir a grande comissão de Jesus: ganhar almas e fazer discípulos. Nosso desejo é que as pessoas se sintam como uma família sempre que comparecerem a uma de nossas reuniões ou a uma de nossas células.</p>
      </div>
      <div class="welcome-bottom">

        <a href="<?php echo INCLUDE_PATH ?>decretos#inicio" type="button" class="cta" style="background-image: url(./img/btn-uv.svg);">decretos</a>

        <a href="<?php echo INCLUDE_PATH ?>quem_somos#inicio" type="button" class="cta" style="background-image: url(./img/btn-cd.svg);">quem somos</a>

        <a href="<?php echo INCLUDE_PATH ?>visao_missao#inicio" type="button" class="cta" style="background-image: url(./img/btn-cell.svg);">visao e missao</a>

        <a href="<?php echo INCLUDE_PATH ?>nossa_historia#inicio" type="button" class="cta" style="background-image: url(./img/btn-doar.svg);">nossa historia</a>

        <a href="<?php echo INCLUDE_PATH ?>que_cremos#inicio" type="button" class="cta" style="background-image: url(./img/btn-doar.svg);">em que cremos</a>

        <a href="<?php echo INCLUDE_PATH ?>nossos_valores#inicio" type="button" class="cta" style="background-image: url(./img/btn-doar.svg);">nossos valores</a>

        <a href="<?php echo INCLUDE_PATH ?>visao_compromisso#inicio" type="button" class="cta" style="background-image: url(./img/btn-doar.svg);">visao e compromisso</a>

        <a href="<?php echo INCLUDE_PATH ?>valnice#inicio" type="button" class="cta" style="background-image: url(./img/btn-doar.svg);">valnice milhomens</a>

      </div>
    </div>
  </section>
  </section>
  <!-- End Welcome Section -->

