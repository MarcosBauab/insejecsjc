  <title>Redes  - INSEJEC SJC</title>
  <style>
    @media only screen and (max-width: 550px) {
    #grupos .projects h1 {font-size: 25px;} }

    @media only screen and (max-width: 400px) {
    #grupos .projects h1 {font-size: 14px; font-weight: 700;} }


    #projects .project-item, .project-item-rev { width: 100% }

    @media only screen and (min-width: 0px) {
      #projects .cta { font-size: 11px; }
      #projects .project-item h1 { font-size: 22px; }
      #projects .project-item-rev h1 { font-size: 22px; }
    }
    @media only screen and (min-width: 768px) {
      #projects .project-item h1 { font-size: 22px; }
      #projects .project-item-rev h1 { font-size: 22px; }

      #projects .cta { font-size: 11px; }
      #projects .project-item p { font-size: 12px; }
      #projects .project-item-rev p { font-size: 12px; }
    }
    @media only screen and (min-width: 1200px) {
      #projects .project-item, .project-item-rev { width: 1000px; }
    }

    #welcome .welcome-bottom {
      background-image:
           url('./img/redes/redes_datas.png'); 
            width:90%; 
            height:500px; 
            background-position:center;
            background-size: 150%;
            background-repeat: no-repeat;
            overflow: hidden;
            border-radius: 20px;

            align-items: center;
            justify-content: center;
            transition: .3s ease;
      }

    @media only screen and (min-width: 600px) {
      #welcome .welcome-bottom {
        background-size: 100%;
      }
    }
  </style>

  <!-- Welcome Section -->
  <section id="welcome">
    <div class="welcome container">
      <div class="welcome-top">
        <h1 class="section-title">Re<span>d</span>es</h1>
        <p><br>As Redes compõem-se de pessoas de diversas faixas etárias e agrupamentos distintos, reunidos para tratar de necessidades específicas de cada faixa etária e sua integração no programa da igreja local, conforme os princípios da visão celular adotada pela Igreja, de evangelização e discipulado.<br><br>
        Considera-se uma Rede o conjunto de células homogêneas organizadas em um corpo que trabalha unido para ganhar as pessoas que lhe são afins e discipulá-las.<br><br><br><br><br></p>
      </div>
      <div class="welcome-bottom">
        <!--<img src="./img/redes/redes_datas.png" alt="img" style="position: relative; height: 180%; width: 180%; border-radius: 20px;">-->
      </div>
    </div>
  </section>
  <!-- End Welcome Section -->


  <!-- Projects Section -->
  <section id="grupos">
  <section id="projects">
    <div class="projects container">
      <div class="all-projects">
        <section id="familia">
        <div class="project-item">
          <div class="project-info-left">
            <h1>Celebração da Família</h1>
            <h2>Todos os domingos às 10h00</h2>
            <p>A Celebração da Família é o ajuntamento em massa de todos os membros das células da Igreja a fim de demostrar sua vida em adoração a Deus. Essa reunião, que envolve todos da cidade, é usada para louvou e adoração, sólido ensino bíblico e Evangelismo. É uma parte vital do testemunho público do povo de Deus.</p>
            <a href="<?php echo INCLUDE_PATH ?>eventos#geral" type="button" class="cta">Conheça nossos eventos</a>
          </div>
          <div class="project-img-right">
            <img src="./img/redes/redes_familia.jpg" alt="img">
          </div>
        </div>
        </section>

        <section id="homens">
        <div class="project-item-rev">
          <div class="project-info-left">
            <h1>Rede de homens</h1>
            <h2>Segunda sexta do mês às 20h00</h2>
            <p>Liderada pelo pastor Rosivaldo Merloto, a Rede de Homens tem o objetivo de levantar uma geração de Homens de Honra, sacerdotes no seu lar, homens santos e irrepreensíveis que desejam ardentemente viver a santidade em todas as áreas das suas vidas.</p>
          </div>
          <div class="project-img-right">
            <img src="./img/redes/redes_homens.jpg" alt="img">
          </div>
        </div>
        </section>

        <section id="mulheres">
        <div class="project-item">
          <div class="project-info-left">
            <h1>Rede de mulheres</h1>
            <h2>Terceira sexta do mês às 20h00</h2>
            <p>Liderada pela pastora Priscila Merloto, a Rede de Mulheres tem o objetivo de levantar uma geração de Mulheres de Honra, valorosas e sábias, mulheres virtuosas em seus lares e líderes de uma grande multidão.</p>
            <a href="<?php echo INCLUDE_PATH ?>eventos#mulheres" type="button" class="cta">Eventos - rede de mulheres</a>
          </div>
          <div class="project-img-right">
            <img src="./img/redes/redes_mulheres.jpg" alt="img">
          </div>
        </div>
        </section>

        <section id="jovens">
        <div class="project-item-rev">
          <div class="project-info-left">
            <h1>Rede de jovens e adolescentes</h1>
            <h2>Último sábado do mês às 19h30</h2>
            <p>Liderada pelo casal João e Fernanda Braile, que compõe a liderança de 12 dos pastores principais, tem o objetivo de levantar uma geração de Jovens fortes, comprometidos com a Palavra, que vivem em SANTIDADE, determinados a vencer o maligno, pois têm uma certeza no coração: em Deus, eles são fortes!</p>
            <a href="<?php echo INCLUDE_PATH ?>eventos#jovens" type="button" class="cta">Eventos - rede de jovens</a>
          </div>
          <div class="project-img-right">
            <img src="./img/redes/redes_jovens.jpg" alt="img">
          </div>
        </div>
        </section>

        <section id="casais">
        <div class="project-item">
          <div class="project-info-left">
            <h1>Ministério de casais</h1>
            <h2>Quarta sexta do mês às 20h00</h2>
            <p>Asssitir os casais em suas necessidades específicas, mantendo as células de casais, aconselhamento e encontro de casais.</p>
            <a href="<?php echo INCLUDE_PATH ?>eventos#casais" type="button" class="cta">Eventos - MINISTÉRIO DE CASAIS</a>
          </div>
          <div class="project-img-right">
            <img src="./img/redes/redes_casais2.jpg" alt="img" style="filter: brightness(150%);">
          </div>
        </div>
        </section>

      </div>
    </div>
  </section>
  </section>
  <!-- End Projects Section -->
