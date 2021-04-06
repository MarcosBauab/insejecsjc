<title>INSEJEC SJC - Igreja Nacional do Senhor Jesus Cristo em São José dos Campos</title>
<meta name="description" content="Somos uma igreja que busca cumprir a grande comissão de Jesus: ganhar almas e fazer discípulos. Nosso desejo é que as pessoas se sintam como uma família sempre que comparecerem a uma de nossas reuniões ou a uma de nossas células."/>
<style>
    .container { min-height: 80vh;} 
    #hero .container { min-height: 70vh;} 
    .cta {
      font-size: 18px;
    }

    @font-face {
      font-family: logoFont;
      src: url("./misc/OptimusPrinceps.ttf");
    }

/* Cell Section */
    #cell{
      background-color: #12151a;
      background-image: radial-gradient(#1f242c 0%, #12151a 70%); /*tipo B2*/
    }
    #cell .cell {
      flex-direction: column;
      text-align: center;
      max-width: 1500px;
      margin: 0 auto;
      padding: 100px 0px;
    }
    #cell .cell-top {
      max-width: 1000px;
      margin: 0 auto;
      padding: 0px 30px;
    }
    #cell .cell-top p {
      padding-top: 30px;
      color: #fff;
      text-align: justify;
    }
    #cell .cell-bottom {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 10px;
    }
    #cell .cell-bottom .icon {
      height: 80px;
      width: 80px;
      margin-bottom: 20px;
    }
    #cell .cell-item h2 {
      font-size: 2rem;
      color: #fff;
      margin-bottom: 10px;
      text-transform: uppercase;
    }
    #cell .cell-item p {
      color: #fff;
      text-align: left;
    }
/* End Cell Section */

    .ytb-container {
      position: relative;
      width: 100%;
      overflow: hidden;
      padding-top: 56.25%; /* 16:9 Aspect Ratio */
      border: 3px solid #055a7c38; /*borda exterior*/
      border-radius: 3px;
    }
    .video-ytb {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    @media only screen and (min-width: 1070px) {
      .ytb-container {
        width: 1024px;
        height: 576px;
        padding-top: 0;
      }
      .video-ytb {
        width: 1024px;
        height: 576px;
      }
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
      filter: grayscale(.3);
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
    #zoom img{
      /*background-image:
           url('./img/redes/redes_datas.png'); 
            width: 50%;
            height: 500px;
            background-position:center;
            background-size: 90%;
            background-repeat: no-repeat;
            border-radius: 20px;

            align-items: center;
            justify-content: center;
            transition: .3s ease;*/
      max-width: 1000px;
      border-radius: 20px;
    }
    @media only screen and (max-width: 850px) {
      #welcome .cta {
        width: 300px;
        height: 70px;
        font-size: 1.5rem;
      }
    }
    @media only screen and (min-width: 850px){
      @media only screen and (max-width: 1040px){
        #welcome .cta {
          width: 350px;
          height: 75px;
          font-size: 1.7rem;
        }
      }
    }
    
    
    .title-full {
      width: 300px;
      object-fit: contain;
      height: auto;
      transition: .3s ease
    }
    @media only screen and (min-width: 560px){
      .title-full {
        width: 450px;
      }
    }

    #about .col-right a{
      transition: .3s ease;
      color: #fff;
    }
    #about .col-right a:hover {
      transition: .3s ease;
    }
    b{
      transition: .3s ease;
      color: #0099ff;
    }
    b:hover {
      color: white;
      transition: .3s ease;
    }

    @media only screen and (max-width: 768px){
      @media only screen and (min-width: 500px){
        #about .col-left{
          width: 350px;
          height: 350px;
        }
      }
    }
    @media (max-width: 340px){
      #welcome .cta {
        width: 80%;
        height: auto;
        font-size: 1.5rem;
      }
      .title-full {
      width: 230px;
      object-fit: contain;
      height: auto;
      transition: .3s ease
      }
    }
</style>

  <!-- Welcome Section -->
  <section id="welcome">
    <div class="welcome container">
      <div class="welcome-top">
        <img class="title-full" src="./img/title-full.svg" class="q-img">
        <!--<h1 class="section-title" style="font-family: logoFont; font-size: 22px; color: #ccc;">em São Jose dos Campos</h1>-->
        <p><br><b style="font-size: 2rem; font-weight: 500; font-variant: small-caps;">Bem vindos à INSEJEC!</b><br>
          Somos uma igreja que busca cumprir a grande comissão de Jesus: ganhar almas e fazer discípulos. Nosso desejo é que as pessoas se sintam como uma família sempre que comparecerem a uma de nossas reuniões ou a uma de nossas células.</p>
      </div>
      <div class="welcome-bottom">
        <!--
        <div class="welcome-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed architecto placeat beatae tenetur officia quod</p>
        </div>
        -->
        <!--<a href="igreja.html#welcome" type="button" class="cta">Conheça nossa igreja</a>-->
        <a href="<?php echo INCLUDE_PATH ?>universidade_da_vida#uv" type="button" class="cta" style="background-image: url(./img/btn-uv.svg);"></a>
        <!--<a type="button" class="cta" style="background-image: url(./img/btn-cd.svg);"></a>-->
        <a href="<?php echo INCLUDE_PATH ?>celulas#apresentacao" type="button" class="cta" style="background-image: url(./img/btn-cell.svg);"></a>
        <!--<a type="button" class="cta" style="background-image: url(./img/btn-doar.svg);"></a>-->
      </div>
    </div>
  </section>
  <!-- End Welcome Section -->


  <!-- Worship Section-->
  <section id="worship">
    <div class="worship-top">
      <h1 class="section-title">Cult<span>o</span>s</h1>
    </div>
    <div class="worship-bottom">
    <div class="ytb-container"> 
      <iframe class="video-ytb" src="https://www.youtube.com/embed/videoseries?list=PLYx1iz9ieFWRpLBPkg2c2ZFHfP4xEq-5v" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
    <div class="worship-bottom">

      <p>A Celebração da Família é o ajuntamento em massa de todos os membros das células da Igreja a fim de demostrar sua vida em adoração a Deus. Essa reunião, que envolve todos da cidade, é usada para louvou e adoração, sólido ensino bíblico e Evangelismo. É uma parte vital do testemunho público do povo de Deus. 
      <br><br> 
      Na celebração a grandeza e a força da igreja são manifestos. Apesar da célula ser a igreja. A Igreja é mais que a célula. Nessa celebração, portanto, todos sentem o impacto da adoração coletiva de um corpo grande e forte que vive a igreja dentro da sociedade em todas as suas esferas, salgando a massa. Não há limite para o seu tamanho. Quanto mais pessoas, melhor. O alvo é atingir a cidade inteira.
      <br><br> 
      Junte-se a nós em nossa Celebração da Família, aos domingos, 10h. Você também pode participar de nossa programação de forma on-line, pelo nosso canal do <a href="https://www.youtube.com/channel/UCbEzKNxd0pdJdkao0hO9sTw" style="color: #00A8E8;"><b>YouTube</b></a>, ou de forma <a href="<?php echo INCLUDE_PATH ?>como_chegar#local" style="color: #00A8E8;"><b>presencial</b></a>.
      <br><span>.</span></p>
      
    </div>
    <div class="worship-bottom" id="zoom">
        <img src="./img/redes/redes_datas.png" alt="img">
    </div>
    <!--<div class="worship-bottom">
      <a href="<?php echo INCLUDE_PATH ?>redes#familia">
        <div loading=lazy class="worship-item" style="background-image: url(./img/index-culto-domingo.png);">
            <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
            <h2>Celebração da Família</h2>
            <p>Todos os domingos - 10h00</p>
          </div>
      </a>
      <div class="worship-item-null"></div>
      <a href="<?php echo INCLUDE_PATH ?>redes#homens">
        <div loading=lazy class="worship-item" style="background-image: url(./img/index-culto-homens.png);">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Culto de Homens</h2>
          <p>2ª sexta do mês - 20h00</p>
        </div>
      </a>
      <div class="worship-item-null"></div>
      <a href="<?php echo INCLUDE_PATH ?>redes#mulheres">
        <div loading=lazy class="worship-item" style="background-image: url(./img/index-culto-mulheres.png);">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Culto de Mulheres</h2>
          <p>3ª sexta do mês - 20h00</p>
        </div>
      </a>
      <div class="worship-item-null"></div>
      <a href="<?php echo INCLUDE_PATH ?>redes#casais">
        <div loading=lazy class="worship-item" style="background-image: url(./img/index-culto-casais.png);">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Culto de Casais</h2>
          <p>4ª sexta do mês - 20h00</p>
        </div>
      </a>
      <div class="worship-item-null"></div>
      <a href="<?php echo INCLUDE_PATH ?>redes#jovens">
        <div loading=lazy class="worship-item" style="background-image: url(./img/index-culto-jovens.png);">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png"/></div>
          <h2>Culto de Jovens</h2>
          <p>Último sábado do mês - 19h30</p>
        </div>
      </a>
    </div>-->
  </section>
  <!-- End Worship Section-->


  <!-- Services Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Em <span>q</span>ue cremos</h1>
        <p>A Igreja Nacional do Senhor Jesus Cristo – INSEJEC, é uma Igreja Cristã Evangélica Carismática, herdeira dos valores da Reforma Protestante e dos moveres de Deus na Igreja, restaurando verdades esquecidas nos últimos séculos, buscando firmemente viver os valores da Igreja em Jerusalém, revelados em Atos dos Apóstolos. </p>
      </div>
      <div class="service-bottom">
        <a href="<?php echo INCLUDE_PATH ?>que_cremos#inicio" type="button" class="cta">nossa declaração de crenças</a>
      </div>
    </div>
  </section>
  <!-- End Services Section -->


  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-top">
        <h1 class="section-title">Past<span>o</span>res</h1>
      </div>
      <div class="col-left">
        <div class="about-img">
          <img loading=lazy src="./img/pastores_0.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Past<span>o</span>res</h1>
        <h2 style="font-size: 2.5rem; font-weight: 500; font-variant: small-caps;"><a>Rosivaldo Merloto</a></h2>
        <p>O pastor Rosivaldo Merloto, nascido em 03 de maio de 1973, é considerado um homem de fé e perseverante nos sonhos que Deus tem agasalhado em seu coração. Aos 16 anos de idade teve uma experiência com o Senhor e Salvador Jesus Cristo, desde então O tem servido de todo seu coração.<br>
          Bacharel em Teologia pela Faculdade de Ciências, Educação e Teologia do Norte do Brasil (FACETEN); Curso Superior Tecnólogo em Gestão de Pequenas e Médias Empresas (Processos Gerencias), pela Universidade Paulista (UNIP); e Pós-graduado em Psicologia Pastoral/Aconselhamento Pastoral pela Faculdade de Ciências, Educação e Teologia do Norte do Brasil (FACETEN).
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr0" style="font-size: 1.5rem; font-weight: 500; font-variant: small-caps;"><b>Saiba Mais</b></a></p>
        <h2 style="font-size: 2.5rem; font-weight: 500; font-variant: small-caps;"><a>Priscila Merloto</a></h2>
        <p>A pastora Priscila Merloto, nascida em 27 de março de 1973, neta de pastor, é vista e reconhecida como uma mulher destemida, sempre buscando cumprir o seu propósito no Reino de Deus. Casada com Rosivaldo desde 1993; mãe de Gabrielle Merloto, nascida no dia 07 de março de 1999. Bacharel em Administração de Empresas, pela Faculdade de Americana (FAM); Pós-graduada em Psicologia Pastoral/Aconselhamento Pastoral pela Faculdade de Ciências, Educação e Teologia do Norte do Brasil (FACETEN).<br>
          Em 02 de julho de 2012, totalmente direcionada por Deus, deixou o cargo de Gerente Comercial em uma empresa multinacional, onde exerceu sua função por quase 16 anos, para também dedicar-se ao ministério tempo integral. 
          <a href="<?php echo INCLUDE_PATH ?>igreja#pr1" style="font-size: 1.5rem; font-weight: 500; font-variant: small-caps;"><b>Saiba Mais</b></a>
        </p>
      </div>
    </div>
  </section>
  <!-- End About Section -->


  <!-- Cell Section -->
  <section loading=lazy id="cell">
    <div class="cell container">
      <div class="cell-top">
        <h1 class="section-title">Cél<span>u</span>las</h1>
        <p>Como INSEJEC, abraçamos a visão de uma Igreja que celebra no templo e nas casas. Adotamos o termo "célula" para os grupos caseiros e um modelo dos doze como uma estratégia de discipulado. A definição de uma Igreja em células é muito simples: Trata-se da Igreja que se reúne não apenas aos domingos para a grande celebração, mas também em pequenos grupos nas casas durante a semana.</p>
      </div>

      <div id="slider">
      <input type="radio" name="slider" id="slide1" checked>
      <input type="radio" name="slider" id="slide2">
      <input type="radio" name="slider" id="slide3">
      <input type="radio" name="slider" id="slide4">
      <div id="slides">
          <div id="overflow">
            <div class="inner">
                <div class="slide slide_1">
                  <div class="slide-content">
                      <!--<h2>Slide 1</h2>
                      <p>Content for Slide 1</p>-->
                  </div>
                </div>
                <div class="slide slide_2">
                  <div class="slide-content">
                      
                  </div>
                </div>
                <div class="slide slide_3">
                  <div class="slide-content">
                      
                  </div>
                </div>
                <div class="slide slide_4">
                  <div class="slide-content">
                      
                  </div>
                </div>
            </div>
          </div>
      </div>
      <div id="controls">
          <label for="slide1"></label>
          <label for="slide2"></label>
          <label for="slide3"></label>
          <label for="slide4"></label>
      </div>
      <div id="bullets">
          <label for="slide1"></label>
          <label for="slide2"></label>
          <label for="slide3"></label>
          <label for="slide4"></label>
      </div>
    </div>
      
      <div class="cell-bottom">
        <div class="cell-link-1"><a href="<?php echo INCLUDE_PATH ?>celulas#apresentacao" type="button" class="cta">Saiba mais</a></div>
      </div>
    </div>
  </section>
  <!-- End Cell Section -->
  

  <!-- School Section -->
  <section loading=lazy id="school">
    <div class="school container">
      <div class="school-top">
        <h1 class="section-title">Esc<span>o</span>las</h1>
        <p>Em nossas escolas criamos um lugar seguro para você aprender sua identidade, crescer em seu relacionamento pessoal com Deus e ganhar confiança para andar em sinais e maravilhas. Nossos alunos saem transformados, nunca mais os mesmos.
        </p>
      </div>
      <div class="school-bottom" style="padding-top: 40px;">
        <div class="school-link-1" style="padding-bottom: 20px;"><a href="<?php echo INCLUDE_PATH ?>universidade_da_vida#uv" type="button" class="cta"></a></div>
        <div class="p1"><p><a href="<?php echo INCLUDE_PATH ?>universidade_da_vida#uv" type="button"><b>Universidade da Vida</b></a><br>
          A Universidade da vida foi projetada para explorar e fortalecer sua fé em Cristo, esclarecer suas dúvidas e trazer à tona todo o potencial com que Deus o criou.
          Nela você pode aprender sobre Deus, interagir com outras pessoas como você, fazer perguntas e encontrar alguém que as responda, mas acima de tudo, e você terá uma experiência que marcará completamente sua vida</p></div>
      </div>
      <div class="school-bottom" style="padding-top: 40px; margin-bottom: 100px;">
        <div class="p2"><p><a type="button"><b>Capacitação Destino</b></a><br>
          A Capacitação Destino é um curso modular de treinamento de liderança. Nela estão envolvidos tópicos como os fundamentos do Cristianismo, a Visão G12, liderança eficaz e o Espírito Santo. O curso é desenvolvido em torno de três etapas: Conectar, Conceber e Criar, projetado para envolver os alunos com o material e produzir resultados positivos e duradouros</p></div>
        <div class="school-link-2"><!--<a href="capacitacao_destino#cd" type="button" class="cta">--><a type="button" class="cta"></a></div>
      </div>
    </div>
  </section>
  <!-- End School Section -->
  

  <!-- Social Networks [School_type] Section -->
  <section id="school">
    <div class="school container">
      <div class="school-top">
        <h1 class="section-title">Nos siga nas <span>Redes Sociais</span></h1>
        <p>Você quer saber mais sobre a nossa programação ou receber um conteúdo que vai edificar e fortalecer a sua vida? 
<br>
        Então acompanhe os nossos conteúdos pelas redes sociais da INSEJEC São José dos Campos.</p>
        <br><br><br>
      </div>
      <div class="school-bottom">
        <div class="school-link-3"><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/insejecsjcampos" type="button" class="cta"></a></div>
        <div class="school-link-4"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/insejec_sjc/" type="button" class="cta"></a></div>
        <div class="school-link-5"><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UCbEzKNxd0pdJdkao0hO9sTw" type="button" class="cta"></a></div>
      </div>
    </div>
  </section>
  <!-- End Social Networks [School_type] Section -->
  <script src="<?php echo INCLUDE_PATH ?>js/home.js"></script>