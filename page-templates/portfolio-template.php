<?php
/*

Template Name: Portfolio Template

*/
get_header();
?>
<div class="generalHeading bigHeading highMargined centeredText">
    <h1>نمونه‌کارها</h1>
    <span>نمونه عمل‌های زیبایی، پلاستیک و ترمیمی انجام شده توسط دکتر شفائی</span>
</div>
<div class="portfolioSectionBack">
    <div class="portfolioSection mainView">
        <div class="hashtagParent highMargined">
            <div class="hashtagItem">جراحی بینی</div>
            <div class="hashtagItem">جراحی بینی</div>
            <div class="hashtagItem">جراحی بینی</div>
            <div class="hashtagItem">جراحی بینی</div>
            <div class="hashtagItem">جراحی بینی</div>
            <div class="hashtagItem">جراحی بینی</div>
        </div>
        <div class="portfolioItemParent">
            <div class="portfolioItem">
                <img class="lowRadius" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt="">
                <div class="portfolioItemInfo"><span>5 تصویر</span><span></span></div>
            </div>
            <div class="portfolioItem">
                <img class="lowRadius" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            <div class="portfolioItem">
                <img class="lowRadius" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
            <div class="portfolioItem">
                <img class="lowRadius" src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt="">
                <div class="portfolioItemInfo">5 تصویر</div>
            </div>
        </div>
    </div>
    <div class="lightGalleryItemsLoader" id="lightgallery">
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt=""></a>
        <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg"><img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg" alt=""></a>
    </div>
</div>





<?php
get_footer();