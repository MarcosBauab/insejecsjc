
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
    
    #welcome .welcome-bottom a {
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
    }
    @media only screen and (max-width: 850px) {
      #welcome .welcome-bottom a {
        font-size: 18px;
      }
      #welcome .welcome-bottom a:hover {
        transition: .3s ease;
        color: #0099ff;
      }
    }
  </style>


 
  <!-- Welcome Section -->
  <section id="welcome">
    <div class="welcome container">
      <div class="welcome-top">
        <h1 class="section-title">C<span>o</span>ntato</h1>
        <p style="font-size: 2.5rem;">Entre em contato conosco:<br><br> </p>
      </div>
      <div class="welcome-bottom">
        <p><img src="img/icon_whatsapp.svg" style="height: 30px; width: 30px; margin: 0px 20px 0px 10px; opacity: .8;">
          <a target="_blank" rel="noopener noreferrer" href="https://wa.me/5512982810294?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20a%20INSEJEC!">( 12 ) 9 8281-0294</a><br><br>
        

          <img src="img/icon_facebook.svg" style="height: 30px; width: 30px; margin: 0px 20px 0px 10px; opacity: .8;">
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/insejecsjcampos">facebook.com/insejec sjcampos</a><br><br>

      </div>
    </div>
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
  