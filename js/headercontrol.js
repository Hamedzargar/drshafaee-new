var $ = jQuery;
$(document).ready(function(){
    $('.menuSection .mainMenu > ul > .menu-item-has-children > a').append('<svg height="10" width="10" fill="#28416e" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"/></svg>');
    $('.mobileMenuSection').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
        $('.mobileMenyParent').show(30);
        $('.mobileMenyParent').css({
            'right':'0',
        });
    });
    $('.mobileMenuClose').click(function(){
        $('.mainSiteOverlay').removeClass('showSiteOverlay');
        $('.mobileMenyParent').css({
            'right':'-100px',
        });
        $('.mobileMenyParent').hide(30);
    });
    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 160){
            $('.stickyHeaderParent').addClass('showStickyHeader');        
        
        }
        else{
            $('.stickyHeaderParent').removeClass('showStickyHeader');                        
        }
    });
});