let classModal = document.getElementsByClassName("modal")
let arrModal = Array.from(classModal)

let fechar = document.querySelectorAll('a#fechar')
for(let i = 0; i< fechar.length;i++){
    fechar[i].addEventListener('click', () => {
        arrModal[i].setAttribute('class', 'hide')
        arrModal[i].classList.add('modal')
    })
}

let clicaveis = document.querySelectorAll("button[clicable]")
let arrClica = Array.from(clicaveis)
for(let i = 0; i< arrClica.length; i++){
    arrClica[i].addEventListener('click', function(){
        arrModal[i].classList.remove('hide')
    })
}
//Código não otimizado:
/*let modaltaber = document.getElementById('modalTaber')
let taber = document.querySelector("#taber")
taber.addEventListener('click',()=>{
    modaltaber.classList.remove('hide')   
})
let modalLuz = document.getElementById('modalLuz')
let luz = document.querySelector("#luz")
luz.addEventListener('click',()=>{
    modalLuz.classList.remove('hide')
})
let modalg12 = document.getElementById('modal-g12')
let g12 = document.querySelector("#g12")
g12.addEventListener('click',()=>{
    modalg12.classList.remove('hide')
})*/

/*Parte responsiva dos modais*/
let tamanhoInicial = window.innerWidth
if(tamanhoInicial < 768){
    let taber = document.querySelector("#taber")
    taber.addEventListener('click',()=>{
        window.open("https://www.facebook.com/media/set/?vanity=insejecsjcampos&set=a.1174657862728955", '_blank')   
    })

    let luz = document.querySelector("#luz")
    luz.addEventListener('click',()=>{
        window.open("https://www.facebook.com/media/set/?vanity=insejecsjcampos&set=a.851387518389326", '_blank')
    })
    let g12 = document.querySelector("#g12")
    g12.addEventListener('click',()=>{
        window.open("https://www.facebook.com/media/set/?vanity=insejecsjcampos&set=a.1098971686964240", '_blank')
    })
    let acampa = document.querySelector("#acampa")
    acampa.addEventListener('click',()=>{
        window.open("https://www.facebook.com/media/set/?vanity=insejecsjcampos&set=a.1200306436830764", '_blank')
    })
    let paint = document.querySelector("#paint")
    paint.addEventListener('click',()=>{
        window.open("https://www.facebook.com/media/set/?vanity=insejecsjcampos&set=a.1112477055613703", '_blank')
    })
    
}


