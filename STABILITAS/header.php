<!-- Header -->
<head>
  <meta charset="utf-8">
  <title>Quinn&#39;s Radical Project</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/quinns-radical-project.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({
  google: {
    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic","Raleway:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]
  }
});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
</script>
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png" rel="apple-touch-icon">
</head>
  <?php wp_head(); ?>

  <body class="body">
  <div class="navbar w-nav" data-animation="default" data-collapse="medium" data-duration="400">
    <div class="nav-container w-container"><a class="logo w-nav-brand" href="#"><img class="image" height="80" src="images/updated-logo.svg" width="180"></a>
      <nav class="div-block-3 w-nav-menu" role="navigation">
        <div class="w-dropdown" data-delay="0" data-hover="1">
          <div class="dropdown-toggle-2 w-dropdown-toggle">
            <div class="w-icon-dropdown-toggle"></div>
            <div>product</div>
          </div>
          <nav class="w-dropdown-list"><a class="dropdown-link w-dropdown-link" href="#">Travel Risk Management</a><a class="dropdown-link w-dropdown-link" href="#">security intelligence</a><a class="dropdown-link w-dropdown-link" href="#">mass communications</a><a class="dropdown-link w-dropdown-link" href="#">mobile app</a></nav>
        </div><a class="nav-link w-nav-link" href="#">solutions</a><a class="nav-link w-nav-link" href="#">about</a><a class="nav-link w-nav-link" href="#">blog</a><a class="nav-link w-nav-link" href="#">support</a>
        <div class="nav-cta-div-block"><a class="cta nav-link w-nav-link" href="#">request demo</a><a class="cta login nav-link w-nav-link" href="#">login</a></div>
      </nav>
      <div class="nav-menu w-hidden-main w-nav-button">
        <div class="w-icon-nav-menu"></div>
      </div>
    </div>
   </div>      


   <?php body_class(); ?>>

   

          <?php 
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
          ?>