
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="keywords" content="Alpha Business">
    <meta name="description" content="Alpha Business News Site">
    <meta name="author" content="Adeniran Opeyemi"><!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" sizes="32x32">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/favicon.png"><!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Vendor CSS -->
	<?php wp_head(); ?>
</head>

<body class="home home-1 has-block-heading-line">
<?php wp_body_open(); ?>


    <div class="site-wrapper">
        <!-- Site header -->
	 <!-- Site header -->
      <header class="site-header" role="banner">
            <!-- Header content -->
            <div class="header-main hidden-xs hidden-sm">
                <div class="container">
                    <div class="row row--flex row--vertical-center">
                        <div class="col-xs-3">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/ads.jpg"/> -->
                        </div>
                        <div class="col-xs-6">
                            <div class="header-logo text-center"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/tnoof_logo.png"
                                        alt="logo" width="200"></a></div>
                        </div>
                        <div class="col-xs-3 text-right">
                            <ul class="social-list social-list--lg list-horizontal">
                                <li><a href="#"><i class="mdicon mdicon-facebook"></i></a></li>
                                <li><a href="#"><i class="mdicon mdicon-twitter"></i></a></li>
                                <li>
                                    <a href="#subscribe-modal" class="btn btn-default" data-toggle="modal"
                                        data-target="#subscribe-modal"><i
                                            class="mdicon mdicon-mail_outline mdicon--first"></i><span>Subscribe</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Header content -->
            <!-- Mobile header -->
            <div id="mnmd-mobile-header" class="mobile-header visible-xs visible-sm">
                <div class="mobile-header__inner mobile-header__inner--flex">
                    <div class="header-branding header-branding--mobile mobile-header__section text-left">
                        <div class="header-logo header-logo--mobile flexbox__item text-left"><a href="index.html"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/logo/tnoof_logo.png" alt="logo"></a></div>
                    </div>
                    <div class="mobile-header__section text-right"><button type="submit"
                            class="mobile-header-btn js-search-dropdown-toggle"><span class="hidden-xs">Search</span><i
                                class="mdicon mdicon-search mdicon--last hidden-xs"></i><i
                                class="mdicon mdicon-search visible-xs-inline-block"></i></button> <a
                            href="#mnmd-offcanvas-primary"
                            class="offcanvas-menu-toggle mobile-header-btn js-mnmd-offcanvas-toggle"><span
                                class="hidden-xs">Menu</span><i class="mdicon mdicon-menu mdicon--last hidden-xs"></i><i
                                class="mdicon mdicon-menu visible-xs-inline-block"></i></a></div>
                </div>
            </div><!-- Mobile header -->
            <!-- Navigation bar -->
            <nav class="navigation-bar hidden-xs hidden-sm js-sticky-header-holder">
                <div class="container">
                    <div class="navigation-bar__inner">
                        <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                            <ul id="menu-main-menu" class="navigation navigation--main navigation--inline">
                                <li><a href="index.html">Startups</a></li>
                                <li><a href="index.html">Apps</a></li>
                                <li><a href="index.html">Gadgets</a></li>
                                <li><a href="index.html">Events</a></li>
                                <li><a href="index.html">More</a></li>



                            </ul>
                        </div>
                        <div class="navigation-bar__section"><a href="#login-modal"
                                class="navigation-bar__login-btn navigation-bar-btn" data-toggle="modal"
                                data-target="#login-modal"><i class="mdicon mdicon-person"></i></a>
                            <button type="submit" class="navigation-bar-btn js-search-dropdown-toggle"><i
                                    class="mdicon mdicon-search"></i></button></div>
                    </div><!-- .navigation-bar__inner -->
                    <div id="header-search-dropdown"
                        class="header-search-dropdown ajax-search is-in-navbar js-ajax-search">
                        <div class="container container--narrow">
                            <form class="search-form search-form--horizontal" method="get" action="#">
                                <div class="search-form__input-wrap"><input type="text" name="s"
                                        class="search-form__input" placeholder="Search" value=""></div>
                                <div class="search-form__submit-wrap"><button type="submit"
                                        class="search-form__submit btn btn-primary">Search</button></div>
                            </form>
                            <div class="search-results">
                                <div class="typing-loader"></div>
                                <div class="search-results__inner"></div>
                            </div>
                        </div>
                    </div><!-- .header-search-dropdown -->
                </div><!-- .container -->
            </nav><!-- Navigation-bar -->
        </header><!-- Site header -->


