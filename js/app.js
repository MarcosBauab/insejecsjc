//Adicionar JQUERY em todos os htmls
var script = document.createElement('script');
script.src = 'js/jquery-3.5.1.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
//nav-hamburguer
const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');
const botaoScroll = document.querySelector("#scroll")


document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 500){
		botaoScroll.style.opacity = 1
		botaoScroll.style.pointerEvents = "auto"
	} else {
		botaoScroll.style.opacity = 0
		botaoScroll.style.pointerEvents = "none"
	}
});
botaoScroll.addEventListener('click', function(){
	$("html,body").animate({scrollTop: 0}, "fast");
  })
menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

//search-table
