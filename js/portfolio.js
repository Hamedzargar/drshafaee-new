const portfolioGallery = lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail],
});

$(document).ready(function () {
    $('.portfolioItem').click(function () { 
        
        portfolioGallery.openGallery();
    });
});