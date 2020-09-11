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