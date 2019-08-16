<!DOCTYPE html>
<html>
    <head>
    <!-- Basic Page Needs
    ------------------------------------------------------------------- -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="HandheldFriendly" content="True">

    <title><?php echo get_bloginfo( 'name' ); ?></title>    
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
	<!-- Facebook	 -->
	<meta property="og:type"        content="website">
    <meta property="og:url"         content="https://triantis.design/">
    <meta property="og:site_name"   content="TDC - Triantis Design and Consultancy">
    <meta property="og:image"       content="https://bewegen.com/uploads/social-sharing-images/bike-share-system-bewegen.jpg">
    <meta property="og:description" content="Triantis Design and Consultancy (TDC) provides design solutions, workshops and training for individuals within the Architecture and Interior Design/Architecture industry">
		
    <!-- CSS
	------------------------------------------------------------------- -->
	<meta name="google-site-verification" content="_AVLpuaztN0PANQwnLFpKaWbL0_eyq_q2qWiNpEWdu8" />
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<?php wp_head(); ?>

</head>
<body>

	<div class="preloader">
			<div class="preloader-area">
				<div class="spinner-area">

		<div class="spinner"></div>
	</div>
	</div>
		</div>



    <!-- Nav Bar
    ------------------------------------------------------------------- -->
    <header class="c-header">
        <a href="<?php echo home_url(); ?>" class="c-header_logo">
            <img src="https://triantis.design/wp-content/uploads/2018/12/logo.png">
        </a>
        <button class="c-menu-btn" type="button">
            <span class="c-menu-btn_container">
                <span class="c-menu-btn_item"></span>
                <span class="c-menu-btn_item"></span>
                <span class="c-menu-btn_item"></span>
            </span>
        </button>
        <span class="c-header_tagline">T D C ®</span>
    </header>

    <!-- Main Menu
    ------------------------------------------------------------------- -->
    <div class="c-nav">
        <div class="c-nav_container">
            <div class="c-nav-main">
                <a href="<?php echo home_url(); ?>" class="c-nav_logo">
                    <img role="img" src="https://triantis.design/wp-content/uploads/2018/12/logo.png">
                </a>
    
                <div class="c-nav_close-label-wrapper js-close-nav">

                    <span class="c-nav_close-label">Close</span>
                </div>

                <button type="button" class="o-button-round -white c-nav_close-btn js-close-nav">
                        <i class="material-icons">clear</i>
                </button>
    
                <ul class="c-nav_list">
                    <?php wp_list_pages( '&title_li=' ); ?>
                </ul>
                <ul class="c-social-nav">
                    <li class="c-social-nav_item">
                        <a class="c-social-nav_item_link" href="https://www.linkedin.com/in/paris-triantis/" target="_blank">
                            Facebook
                            <img role="img" src="https://triantis.design/wp-content/uploads/2018/12/linked-in-logo.png">
                        </a>
                    </li>
                </ul>
				<div class="c-nav_title">
					<span class="c-nav_title_text">Triantis Design and Consultancy</span>
				</div>
            </div>
    
            <a href="<?php echo get_page_link( get_page_by_title( "about" )->ID ); ?>" class="c-nav-tile -top -white">
                <div class="c-nav-tile_content">
                    <p class="o-label c-nav-tile_label">
                        <span class="o-label_item">01</span>
                        <span class="o-label_line"></span>
                        <span class="o-label_item">About us</span>
                    </p>

                    <p class="c-nav-tile_title">
                        See what we do
                    </p>
                </div>
                <button type="button" class="o-button-round -grey c-nav-tile_btn">
                    <i class="material-icons">supervisor_account</i>
                </button>
                <div class="c-nav-tile_bg"></div>
            </a>
            <a href="<?php echo get_page_link( get_page_by_title( "contact" )->ID ); ?>" class="c-nav-tile -bottom -red">
                <div class="c-nav-tile_content">
                    <p class="o-label c-nav-tile_label">
                        <span class="o-label_item">02</span>
                        <span class="o-label_line"></span>
                        <span class="o-label_item">Contact us</span>
                    </p>
                    <p class="c-nav-tile_title">
                        Get in touch with us
                    </p>
                </div>
                <button type="button" class="o-button-round -grey c-nav-tile_btn">
                    <i class="material-icons">edit</i>
                </button>
                <div class="c-nav-tile_bg"></div>
            </a>
    
        </div>
    
        <div class="c-nav-bg_item -top"></div>
        <div class="c-nav-bg_item -bottom"></div>
    </div>

    <!-- Right Side Links
    ------------------------------------------------------------------- -->
    <div class="c-main-cta">
        <div class="c-main-cta_item">
            <a href="<?php echo get_page_link( get_page_by_title( "about" )->ID ); ?>"> 
                <button type="button" class="o-button-round c-main-cta_item_btn -about">
                    <i class="material-icons">supervisor_account</i>
                </button>
                <div class="c-main-cta_item_label-wrapper">
                    <span class="c-main-cta_item_label">About us</span>
                </div>
            </a>
        </div>
    
        <div class="c-main-cta_item">
            <a href="<?php echo get_page_link( get_page_by_title( "contact" )->ID ); ?>"> 
                <div class="c-main-cta_item_label-wrapper -inverted">
                    <span class="c-main-cta_item_label -inverted" aria-hidden="true">Contact us</span>
                </div>
                <button type="button" class="o-button-round c-main-cta_item_btn -contact">
                    <i class="material-icons">edit</i>
                </button>
            </a>
        </div>
	</div>
	

