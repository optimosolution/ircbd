<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	
<html> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo CMS" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/favicon.ico" />
        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />
        <!-- CORE CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/sky-forms.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/line-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/flexslider.css" rel="stylesheet" type="text/css" />
        <!-- REVOLUTION SLIDER -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/revolution-slider.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layerslider.css" rel="stylesheet" type="text/css" />
        <!-- BLOG -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout-blog.css" rel="stylesheet" type="text/css" />
        <!-- THEME CSS -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/header-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/footer-default.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <!-- Morenizr -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/modernizr.min.js"></script>
        <!--[if lte IE 8]>
                <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/respond.js"></script>
        <![endif]-->
    </head>
    <body class="smoothscroll">
        <div id="wrapper">
            <div id="header"><!-- class="sticky" for sticky menu -->
                <!-- Top Bar -->
                <header id="topBar">
                    <div class="container">
                        <div class="pull-right fsize13 margin-top10 hide_mobile">
                            <!-- mail , phone -->
                            <a href="mailto:info@ircbd.org">info@ircbd.org</a> &bull; +880 1727 211792
                            <div class="block text-right"><!-- social -->
                                <a href="#" class="social fa fa-facebook"></a>
                                <a href="#" class="social fa fa-twitter"></a>
                                <a href="#" class="social fa fa-google-plus"></a>
                                <a href="#" class="social fa fa-linkedin"></a>
                                <a href="#" class="social fa fa-pinterest"></a>
                            </div><!-- /social -->
                        </div>
                        <!-- Logo -->
                        <?php
                        $logo = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/logo.png', 'Logo', array('alt' => Yii::app()->name, 'class' => '', 'title' => Yii::app()->name, 'style' => 'height:80px;'));
                        echo CHtml::link($logo, array('site/index'), array('class' => 'logo'));
                        ?>
                    </div><!-- /.container -->
                </header>
                <!-- /Top Bar -->
                <!-- Top Nav -->
                <header id="topNav">
                    <div class="container">
                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Top Nav -->
                        <div class="navbar-collapse nav-main-collapse collapse">
                            <nav class="nav-main">
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <?php echo '<li class="mega-menu active">' . CHtml::link('HOME', array('site/index'), array('class' => '')) . '</li>'; ?>
                                    <?php
                                    $array = ResourceFor::model()->findAll(array('order' => 'ordering'));
                                    foreach ($array as $key => $value) {
                                        echo '<li class="mega-menu">' . CHtml::link(strtoupper($value['resource_for']) . ' <span>[' . Resource::count_for($value['id']) . ']</span>', array('resource/index', 'id' => $value['id']), array('class' => '')) . '</li>';
                                    }
                                    ?>
                                    <?php echo '<li class="mega-menu">' . CHtml::link('CONTACT', '#', array('class' => '')) . '</li>'; ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- /Top Nav -->
                    </div><!-- /.container -->
                </header>
                <!-- /Top Nav -->
            </div>      
            <?php echo $content; ?>                        
            <!-- FOOTER -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <!-- col #1 -->
                        <div class="logo_footer col-md-8">
                            <p class="block">
                            <p>
                                <strong><em>Why Choose Us?</em></strong> 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum.
                                <a href="#">View More <i class="fa fa-arrow-right"></i></a>
                            </p>
                            <h2>+880 1727 211792</h2>
                            </p>
                        </div>
                        <!-- /col #1 -->
                        <!-- col #2 -->
                        <div class="spaced col-md-4">
                            <h4>About <strong>Us</strong></h4>
                            <p>
                                Incredibly beautiful responsive Bootstrap Template for Corporate and Creative Professionals.
                            </p>
                            <h4><small><strong>Subscribe to our Newsletter</strong></small></h4>
                            <form id="newsletterSubscribe" method="post" action="#" class="input-group">
                                <input required type="email" class="form-control" name="newsletter_email" id="newsletter_email" value="" placeholder="E-mail Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary">SUBMIT</button>
                                </span>
                            </form>
                        </div>
                        <!-- /col #2 -->
                    </div>
                </div>
                <hr />
                <div class="copyright">
                    <div class="container text-center fsize12">
                        Copyright &copy; <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>
                    </div>
                </div>
            </footer>
            <!-- /FOOTER -->
            <a href="#" id="toTop"></a>
        </div><!-- /#wrapper -->
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery.isotope.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/masonry.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/knob/js/jquery.knob.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/revolution_slider.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/scripts.js"></script>       
    </body>
</html>
