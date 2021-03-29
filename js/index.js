$(document).ready(function () {

    var shoes = $('#shoes');
    var divShoes = $('#type-shoes');
    var information = $('#information-payment');
    var divInformation = $('#methods-payment');
    var posicionNavegador = $('.navegador-principal').offset().top;
    var navegadorPrincipal = $('.navegador-principal');
    var contenedorTituloPrincipal = $('.contenedor-titulo-principal');
    var settingsHeader = $('.settings-header');
    var header = $('header');
    var scrollWindow = $(window).scrollTop();
    if(window.location.href.indexOf('paginaRopa')> -1 ){
        if ($(window).width() > 991) {
            stickyNav();
        }
    
        shoes.mouseover(function () {
            divShoes.show();
        });
        shoes.mouseout(function () {
            divShoes.hide();
        });
    
    
        information.mouseover(function () {
            divInformation.show();
        })
    
        information.mouseout(function () {
            divInformation.hide();
        });
    
    
    
        $(window).scroll(function () {
            if ($(window).width() > 991) {
                stickyNav();
            } else {
                settingsHeader.show();
                header.removeClass('nav-sticky');
            }
        });
    
    
        function stickyNav() {
            scrollWindow = $(window).scrollTop();
            if (scrollWindow >= posicionNavegador) {
                contenedorTituloPrincipal.hide();
                settingsHeader.hide();
                header.addClass('nav-sticky');
                navegadorPrincipal.css('margin-bottom', '0px');
            } else {
                contenedorTituloPrincipal.show();
                settingsHeader.show();
                header.removeClass('nav-sticky');
    
                navegadorPrincipal.css('margin-bottom', '25px');
    
            }
    
        }
    
        $('#btn-hamburguesa').click(function(){
            $('#menu-hidden').slideToggle();
        });
    }

    if(window.location.href.indexOf('single')> -1 ){
        $('#btn-hamburguesa').click(function(){
            $('#menu-hidden').slideToggle();
        });
        shoes.mouseover(function () {
            divShoes.show();
        });
        shoes.mouseout(function () {
            divShoes.hide();
        });
    
    
        information.mouseover(function () {
            divInformation.show();
        })
    
        information.mouseout(function () {
            divInformation.hide();
        });
    
    }
   
});