//----------------Sliders--------------

let text = document.getElementById('text');
textDuration = setInterval(function() {
   text.classList.toggle('text__none');
}, 6000);


$(document).ready(function(){
	$('.auction__tanks-slider').slick({
      dots:true,
      slidesToShow:4,
      slidesToScroll:2,
      infinite:false,
		waitForAnimate: true,
		responsive:[
			{
				breakpoint: 1520,
				settings: {
					slidesToShow:3,
					slidesToScroll:1,
				}
			},{
				breakpoint: 1260,
				settings: {
					slidesToShow:2,
					slidesToScroll:2,
				}
			},{
				breakpoint: 890,
				settings: {
					slidesToShow:1,
					slidesToScroll:1,
				}
			},
		]
	});
});



//----------------language-burger--------------

const menu = document.querySelector('.hat__list');
const menuBtn = document.querySelector('.hamburger');
const body = document.body;


if (menu && menuBtn) {
	menuBtn.addEventListener('click', e => {
		menu.classList.toggle('active')
		menuBtn.classList.toggle('active')
		body.classList.toggle('lock')
	})



	menu.querySelectorAll('.menu__link').forEach(link => {
		link.addEventListener('click', () => {
			menu.classList.remove('active')
			menuBtn.classList.remove('active')
			body.classList.remove('lock')
		})
	})
}