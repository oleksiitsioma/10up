import $ from 'jquery';

const breakpointPhone = 768;

const topmenu = $('.topmenu');
const topmenuWrapper = $(topmenu).closest('.topmenu__wrapper');

const menuButton = $('<button>');

menuButton.addClass('topmenu__button');

for(let i=0; i<3; i++){
    $(menuButton).append('<span></span>');
}

topmenuWrapper.prepend(menuButton);

$(menuButton).on( 'click' , () => {

    if ( $(menuButton).hasClass('topmenu__button_open') ) {

        $(menuButton).removeClass('topmenu__button_open');
        $(topmenu).removeClass('topmenu_open');
        
        if( $(window).width() <= breakpointPhone ) {
            $('body').removeClass('body_menuOpen');
        }
    
    } else {

        $(menuButton).addClass('topmenu__button_open');
        $(topmenu).addClass('topmenu_open');
        
        if( $(window).width() < breakpointPhone ) {
            $('body').addClass('body_menuOpen');

        }
    }

})