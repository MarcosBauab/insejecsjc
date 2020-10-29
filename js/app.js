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
hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

var mq = window.matchMedia( "(min-width: 500px)" );
document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#1c2229';//'#29323c';//cor barra em [header]
	} else {
		header.style.backgroundColor = 'transparent';
	}
	if (scroll_position > 500){
		if (mq.matches) { botaoScroll.style.opacity = 1 }
		else { botaoScroll.style.opacity = .3 }
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
var botaoFiltro = document.querySelector("#btnCollapse")
botaoFiltro.addEventListener('click', function(){
	$("input[type=radio]").change(function(){
		var val0 = $('[name=Option0]:checked').val();
		var val1 = $('[name=Option1]:checked').val();
		var val2 = $('[name=Option2]:checked').val();
		var val3 = $('[name=Option1]:checked').val();
		$('tr').each(function() {
			var tme = $(this).find('.Time').text();
			var typ = $(this).find('.Type').text();
			var typ2 = $(this).find('.Type2').text();
			var lcl = $(this).find('.Local').text();
				//alert(val2);
			
			if ((tme == val0 || val0 == 'All' ) && 
			((typ == val1 || val1 == 'All' ) || (typ2 == val3|| val3 == 'All' )) 
			&& (lcl == val2 || val2 == 'All' ))
			{ $(this).show(); }
			else 
			{ $(this).hide(); }
		});
	});
})
//$('#btnFilter').click(function() {
	
	
//collapsible
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


    