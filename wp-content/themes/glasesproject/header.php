<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leo Shop</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="box">
        <div class="header" id="header">
            <div class="header-box">
                <div class="header-bg">
                    <div class="header-nav">
                        <div class="nav-select">
                            <div class="nav-lang">
                                <p class="lang">Language:</p>
                                <select>
                                    <option>English</option>
                                    <option>Ukraine</option>
                                </select>
                            </div>
                            <div class="nav-cur">
                                <p class="cur">Currency:</p>
                                <select>
                                    <option>USD</option>
                                    <option>UAH</option>
                                </select>
                            </div>
                        </div>
                        <div class="header-list">
                            <ul>
                                <li>
                                    <a href="">Account</a>
                                </li>
                                <span class="shape"></span>
                                <li>
                                    <a href="">Wishlist</a>
                                </li>
                                <span class="shape"></span>
                                <li>
                                    <a href="">Checkout</a>
                                </li>
                                <span class="shape"></span>
                                <li>
                                    <a href=""> Log In</a>
                                </li>
                                <span class="shape"></span>
                                <li>
                                    <a href="">Sign Up</a>
                                </li>
                            </ul>
                            <!-- dropDown -->
                            <div class="dropdown">
                                <button class="drop-down__style "> <img onclick="myFunction()" class="menu-img dropbtn"
                                        src="<?php bloginfo('template_url'); ?>/assets/img/adduser.png" alt="hang">
                                </button>
                                <div id="myDropdown" class="dropdown-content">
                                    <ul>
                                        <li>
                                            <a href="">Account</a>
                                        </li>
                                        <li>
                                            <a href="">Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="">Checkout</a>
                                        </li>
                                        <li>
                                            <a href=""> Log In</a>
                                        </li>
                                        <li>
                                            <a href="">Sign Up</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- dropDown -->
                        </div>
                    </div>
                </div>
                <div class="header-menu">
                    <div class="header-icon top-icon">
                        <div class="icon-border">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/iconNav1.png" alt="">
                        </div>
                        <div class="icon-border">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/iconNav2.png" alt="">
                        </div>
                        <p>Cart (0)</p>
                    </div>
                    <div class="header-menu__box">
                        <div class="header-logo">
                            <p>LEO Shop</p>
                        </div>
                        <div class="header-menu__list">
                            <ul>
                                <li>
                                    <a href="">Home</a>
                                </li>
                                <li>
                                    <a href="">women</a>
                                </li>
                                <li>
                                    <a href="">men</a>
                                </li>
                                <li>
                                    <a href="">other</a>
                                </li>
                                <li>
                                    <a href="">purchase</a>
                                </li>
                            </ul>
                            <form>
                                <div class="header-search">
                                    <div class="search">
                                        <input type="search" placeholder="Search.." name="q">
                                        <input type="submit" value="">
                                    </div>
                                    <div class="header-icon">
                                        <div class="icon-border">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/iconNav1.png"
                                                alt="">
                                        </div>
                                        <div class="icon-border">
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/iconNav2.png"
                                                alt="">
                                        </div>
                                        <p>Cart (0)</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <span class="burger-menu" onclick="openNav()">
                        <i class="fas fa-bars"></i>
                    </span>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="close">
                        </a>
                        <ul>
                            <li>
                                <a href="">Home</a>
                            </li>
                            <li>
                                <a href="">women</a>
                            </li>
                            <li>
                                <a href="">men</a>
                            </li>
                            <li>
                                <a href="">other</a>
                            </li>
                            <li>
                                <a href="">purchase</a>
                            </li>
                        </ul>
                        <form method="post">
                            <div class="search search-burg">
                                <input type="search" placeholder="Search.." name="q">
                                <input type="submit" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>