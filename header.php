<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
    <title>【公式】TOKIO インカラミ</title>
	<meta name="description"
    content="公式オンラインストアです。唯一、お風呂で簡単にできるサロントリートメント、
			 完成！あのカリスマ美容師たちの支持率No.1。TOKIO INKARAMI（トキオ インカラミ）だからできるシャンプー・トリートメント。選ばれる理由は…インカラミ、TOKIOトリートメント公式通販。">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700&family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css">

    <script>
    jQuery(document).ready(function ($) {
      var owl = $("#carousel");
      owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        loop: true,
        center: false,
        rewind: false,
        mouseDrag: true,
        touchDrag: true,
        pullDrag: true,
        freeDrag: false,
        margin: 0,
        stagePadding: 0,
        merge: false,
        mergeFit: true,
        autoWidth: false,
        startPosition: 0,
        rtl: false,
        smartSpeed: 500,
        fluidSpeed: false,
        dragEndSpeed: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1,
            nav: false
          },
          768: {
            items: 1,
            loop: true
          },
          992: {
            items: 1,
            loop: true
          },
          1200: {
            items: 1,
            loop:true
          }
        },
        responsiveRefreshRate: 1000,
        responsiveBaseElement: window,
        fallbackEasing: "swing",
        info: false,
        nestedItemSelector: false,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab",
        autoHeight: false,
        lazyLoad: false
      });

      $(".next").click(function () {
        owl.trigger("owl.next");
      });
      $(".prev").click(function () {
        owl.trigger("owl.prev");
      });
    });
    </script>
    
</head>

<body <?php body_class(); ?>>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-dark bg-kmax fixed-top navbar-expand-lg"> -->
    <nav class="navbar navbar-expand-xl navbar-dark small custom-nav fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/image/tokio-inkarami-vertical-white.svg" alt="TOKIO INKARAMI">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
                <form class="d-flex" role="search" method="get" action="<?php echo home_url( '/' ); ?>">

                    <div class="input-group">
                        <input type="search" class="form-control form-control-sm" placeholder="<?php echo esc_attr_x( '検索', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                        <button class="btn btn-sm btn-success" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->