let modal = document.getElementsByClassName('modal')
let taber = document.querySelector("#taber")
taber.addEventListener('click',()=>{
    for(let i = 0; i< modal.length;i++){
        modal[i].classList.remove('hide')
    }
})
let luz = document.querySelector("#luz")
luz.addEventListener('click',()=>{
    window.location.href = "tabernaculos.html"
})

const fechar = document.querySelector('.modal .header a')
fechar.addEventListener('click', () => {
    for(let i = 0; i< modal.length;i++){
        modal[i].setAttribute('class', 'hide')
    }
})