$(document).ready(function(){
  	$('.categorias').slick({
	    dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 7,
		slidesToScroll: 1,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 7,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 5,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 400,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }	    
		  ]
  	});  	
});

var cuerpo = $('.bod');
var menu = $('#menudos');
function abrir() {
	cuerpo.addClass('main');
    menu.addClass('abrir');
}
 
function cerrar() {
    cuerpo.removeClass('main');
    menu.removeClass('abrir');
}