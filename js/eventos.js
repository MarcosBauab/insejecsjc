let modaltaber = document.getElementById('modalTaber')
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
})
let fechar = document.querySelectorAll('a#fechar')
for(let i = 0; i< fechar.length;i++){
    fechar[i].addEventListener('click', () => {
        modalLuz.setAttribute('class', 'hide') 
        modaltaber.setAttribute('class', 'hide')
        modalg12.setAttribute('class', 'hide')
        modalLuz.classList.add('modal') 
        modaltaber.classList.add('modal')
        modalg12.classList.add('modal')
    })
}



