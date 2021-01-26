var tela = window.innerWidth
var escolas = document.querySelectorAll("div.school-bottom")
if(tela <= 710){
    escolas[1].innerHTML = `
    <div class="school-link-2" style="padding-bottom: 20px;"><!--<a href="capacitacao_destino#cd" type="button" class="cta">--><a type="button" class="cta"></a></div>
    <div class="p2"><p><a type="button"><b>Capacitação Destino</b></a><br>
    A Capacitação Destino é um curso modular de treinamento de liderança. Nela estão envolvidos tópicos como os fundamentos do Cristianismo, a Visão G12, liderança eficaz e o Espírito Santo. O curso é desenvolvido em torno de três etapas: Conectar, Conceber e Criar, projetado para envolver os alunos com o material e produzir resultados positivos e duradouros</p></div>
    `
}