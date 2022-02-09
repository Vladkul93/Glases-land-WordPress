<div class="footer">
    <div class="footer-box">
        <div class="footer-bg1">
            <div class="foter-call">
                <div class="footer-truck">
                    <div class="cont-border">
                        <i class="fas fa-truck"></i>
                    </div>
                    <p><?php the_field('shipping_price') ?></p>
                </div>
                <div class="footer-tel">
                    <div class="cont-border">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p><a href="tel:<?php the_field('phone') ?>"><?php the_field('Phone_number') ?></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-bg2">
            <div class="footer-adress">
                <div class="box__info-1" data-number="0">Facebook
                    <div class="facebook-box info__1">
                        <p>20000 Members</p>
                        <button class="footer-btn"><img src="<?php bloginfo('template_url'); ?>/assets/img/like.png"
                                alt=""></button>
                        <div class="facebook-line"></div>
                        <div class="facebook-img">
                            <?php the_field('galereya_profile') ?>
                        </div>
                        <div class="facebook-line"></div>
                        <p>facebook Social plugin</p>
                    </div>
                </div>
                <div class="box__info-1" data-number="1">From twitter
                    <div class="twitter-box info__1">
                        <div class="twitter top-tw">
                            <div class="twitter-border">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and <span class="new-color">
                                    typesetting industry. Lorem Ipsum</span> has been the </p>
                        </div>
                        <div class="twitter">
                            <div class="twitter-border">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and <span class="new-color">typesetting
                                    industry. Lorem Ipsum</span> has been the </p>
                        </div>
                    </div>
                </div>
                <div class="box__info-1" data-number="2">information
                    <?php the_field('information') ?>
                </div>
                <div class="box__info-1 info-mrgn" data-number="3">Contact Us
                    <div class="info__1">
                        <?php the_field('contact') ?>
                        <div class="facebook-line"></div>
                        <div class="footer-icon">
                            <div class="border-icon">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                            <div class="border-icon ">
                                <a href="<?php the_field('linkendln-link') ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="border-icon wi-fi">
                                <i class="fas fa-wifi"></i>
                            </div>
                            <div class="border-icon">
                                <a href="<?php the_field('facebook-link') ?>"> <i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bg3">
            <div class="footer-end">
                <p>© Copyright 2022 Css Author, All Rights Reserved.</p>
                <ul>
                    <li>
                        <a href="">About Us</a>
                    </li>
                    <span class="shape"></span>
                    <li>
                        <a href="">Delivery & Returns</a>
                    </li>
                    <span class="shape"></span>
                    <li>
                        <a href="">Terms & Conditions</a>
                    </li>
                    <span class="shape"></span>
                    <li>
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<a href="#header" class="top">
    <i class="far fa-caret-square-up"></i>
</a>
</div>
<?php wp_footer(); ?>
</body>

</html>