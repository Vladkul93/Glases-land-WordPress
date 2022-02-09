<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<div class="slider">
    <div class="slider-img" style="background-image: url('<?php the_field('img_slaidera') ?>');">
        <div class="slider-text">
            <p class="text1"><?php the_field('title_slaidera') ?></p>
            <p class="text2"><?php the_field('sub_title-slider') ?></p>
        </div>
    </div>
    <div class="slider-img" style="background-image: url('<?php the_field('kartinka_2_slajdera') ?>');">
        <div class="slider-text">
            <p class="text1 blue"><?php the_field('zaglavie_slajdera_2') ?></p>
            <p class="text2 blue"><?php the_field('pod_zaglavie_slajdera_2') ?></p>
        </div>
    </div>
    <div class="slider-img" style="background-image: url('<?php the_field('kartinka_3_slajdera') ?>');">
        <div class="slider-text">
            <p class="text1 red"><?php the_field('zaglavie_slajdera_3') ?></p>
            <p class="text2 red"><?php the_field('pod_zaglavie_slajdera_3') ?></p>
        </div>
    </div>
</div>
<div class="main">
    <div class="main-content">
        <div class="main-box">
            <h2>Featured Products</h2>
            <div class="gallery__inner">
                <a href="<?php the_field('picture_1') ?>" title="">
                    <div class="inner-border">
                        <img class="sale-new" src="<?php the_field('sale-new') ?>" alt="">
                        <img src=" <?php the_field('picture_1') ?>">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('about_glases') ?></p>
                                <p> <?php the_field('price') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_2') ?>" title="">
                    <div class="inner-border">
                        <img src="<?php the_field('picture_2') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('opisanie_2') ?></p>
                                <p> <?php the_field('price_2') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_3') ?>" title="">
                    <div class="inner-border">
                        <img class="sale" src="<?php the_field('akcziya_3_kartinki') ?>" alt="">
                        <img src="<?php the_field('picture_3') ?>">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('opisanie_3_kartinki') ?></p>
                                <p><span
                                        class="thought"><?php the_field('price_sale-3img') ?></span><?php the_field('price_3img') ?>
                                </p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_4') ?>" title="">
                    <div class="inner-border">
                        <img src="<?php the_field('picture_4') ?>" alt="">
                        <div class=" inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_4img') ?></p>
                                <p><?php the_field('price_4img') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_5') ?>" title="">
                    <div class="inner-border">
                        <img class="sale-new" src="<?php the_field('saleNew_5img') ?>" alt="">
                        <img src="<?php the_field('picture_5') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_5img') ?></p>
                                <p><?php the_field('price_5') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_6') ?>" title="">
                    <div class="inner-border">
                        <img src="<?php the_field('picture_6') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_6img') ?></p>
                                <p><?php the_field('price_6img') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_7') ?>" title="">
                    <div class="inner-border">
                        <img class="sale-new" src="<?php the_field('sale_7img') ?>" alt="">
                        <img src="<?php the_field('picture_7') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_7img') ?></p>
                                <p><?php the_field('price_7img') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_8') ?>" title="">
                    <div class="inner-border">
                        <img class="sale" src="<?php the_field('newSale_8') ?>" alt="">
                        <img src="<?php the_field('picture_8') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_8img') ?></p>
                                <p><span
                                        class="thought"><?php the_field('new_price8img') ?></span><?php the_field('price_8img') ?>
                                </p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <a href="<?php the_field('picture_9') ?>" title="Browliners $370">
                    <div class="inner-border">
                        <img class="sale-new" src="<?php the_field('sale_9img') ?>" alt="">
                        <img src="<?php the_field('picture_9') ?>" alt="">
                        <div class="inner-info">
                            <div class="inner-text">
                                <p><?php the_field('title_9') ?></p>
                                <p><?php the_field('price_9img') ?></p>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                        </div>
                    </div>
                </a>
                <h2>staff pick</h2>
                <div class="new">
                    <a href="<?php the_field('picture_10') ?>" title="">
                        <div class="inner-border">
                            <img class="sale-new" src="<?php the_field('sale_10img') ?>" alt="">
                            <img src="<?php the_field('picture_10') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_10img') ?></p>
                                    <p><?php the_field('price_10img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="<?php the_field('picture_11') ?>" title="">
                        <div class="inner-border">
                            <img src="<?php the_field('picture_11') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_11') ?></p>
                                    <p><?php the_field('price_11img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="<?php the_field('picture_12') ?>" title="">
                        <div class="inner-border">
                            <img class="sale-new" src="<?php the_field('sale_12img') ?>" alt="">
                            <img src="<?php the_field('picture_12') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_12img') ?></p>
                                    <p><?php the_field('price_12img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <h2>New Products</h2>
                <div class="new">
                    <a href="<?php the_field('picture_13') ?>" title="">
                        <div class="inner-border">
                            <img class="sale-new" src="<?php the_field('sale_13img') ?>" alt="">
                            <img src="<?php the_field('picture_13') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_13img') ?></p>
                                    <p><?php the_field('price_13img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="<?php the_field('picture_14') ?>" title="">
                        <div class="inner-border">
                            <img class="sale-new" src="<?php the_field('sale_14img') ?>" alt="">
                            <img src="<?php the_field('picture_14') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_14img') ?></p>
                                    <p><?php the_field('price_14img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                    <a href="<?php the_field('picture_15') ?>" title="">
                        <div class="inner-border">
                            <img class="sale-new" src="<?php the_field('sale_15img') ?>" alt="">
                            <img src="<?php the_field('picture_15') ?>" alt="">
                            <div class="inner-info">
                                <div class="inner-text">
                                    <p><?php the_field('title_15img') ?></p>
                                    <p><?php the_field('price_15img') ?></p>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/basket.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-banner">
            <div class="carusel">
                <?php
global $post;
$myposts = get_posts([ 
	'numberposts' => 3,
]);
if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
                <div class="carusel__box">
                    <p><?php the_title(); ?></p>
                    <?php the_post_thumbnail();?>
                    <button> Check it Out </button>
                </div>
                <?php 
	}
} 
wp_reset_postdata(); 
?>
            </div>
            <div class="main-form">
                <p>newsletters signup</p>
                <p>Lorem ipsum dolor sit amen, dolor imun ra adlip
                    ulissys </p>
                <div class="main-line"></div>
                <form action="#" method="post">
                    <input type="text">
                    <button>Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>