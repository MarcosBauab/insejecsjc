  <title>Contato - Insejec São José dos Campos</title>
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>css/all.min.css">
  <style>
    #hero .container { min-height: 60vh;}

    .form {
      filter: opacity(.88) invert(.885) hue-rotate(180deg) brightness(1.3);
      margin: 10px;
      width: 680px;
      height: 870px; 
    }
    @media only screen and (max-width: 660px) {
      .form {
        width: 450px;
        height: 950px;
      }
    }
    @media only screen and (max-width: 500px) {
      .form {
        width: 300px;
        height: 1050px;
        margin: 0px;
      }
    }
    
    /*#welcome .welcome-bottom a {
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: 3px;
    transition: .3s ease;
    font-weight: 500;
    color: #fff;
    }
    #welcome .welcome-bottom a:hover {
    transition: .3s ease;
    color: #0099ff;
    }*/

    .redesSociais{
      display: grid;
      grid-template-columns: 1fr 1fr;
      row-gap: 30px;
      text-align: center;
      margin-top: 15px;
    }
    .redeSocial a, .redeSocial svg, .redeSocial span{
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    transition: .3s ease;
    font-weight: 500;
    color: #fff;
    }
    .redeSocial svg{
      padding-right: 3px;
    }
    .redeSocial a:hover {
      transition: .3s ease;
      color: #0099ff;
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
      height: 65px;
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
        height: 50px;
        font-size: 1.5rem;
      }
    }
    @media only screen and (min-width: 850px){
      @media only screen and (max-width: 1040px){
        #welcome .cta {
          width: 350px;
          height: 58px;
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
        <h1 class="section-title">C<span>o</span>ntato</h1>
        <p style="font-size: 2.5rem;">Entre em contato conosco:<br><br> </p>
      </div>
      <div class="welcome-bottom">

        <a href="https://wa.me/5512982810294?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20a%20INSEJEC!" type="button" class="cta" style="background-image: url(./img/contatos/contatos-whats.jpg);"></a>

        <a href="<?php echo INCLUDE_PATH ?>quem_somos#inicio" type="button" class="cta" style="background-image: url(./img/contatos/contatos-email.jpg);"></a>

        <a href="https://www.facebook.com/insejecsjcampos" type="button" class="cta" style="background-image: url(./img/contatos/contatos-face.jpg);"></a>

        <a href="https://www.instagram.com/insejec_sjc/" type="button" class="cta" style="background-image: url(./img/contatos/contatos-insta.jpg);"></a>

      </div>
    </div>
  </section>
  </section>
  <!-- End Welcome Section -->
 

  <!-- Services Section -->
  <section id="mensagem">
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Nos envie uma <span>mensagem</span></h1>
      </div>
      <div class="service-bottom">
        <div class="formBox">
          <iframe class="form" src="https://docs.google.com/forms/d/e/1FAIpQLSdtQgWM4rQg7-fccxRS6wqhz5MLG2Z-t2_NyPHEdsz1WPSHiA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
        </div>
      </div>
    </div>
  </section>
</section>
  <!-- End Services Section -->
<script src="<?php echo INCLUDE_PATH ?>js/all.min.js"></script> 