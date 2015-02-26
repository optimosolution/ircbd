<?php $this->beginContent('//layouts/main'); ?>
<!-- REVOLUTION SLIDER -->
<div class="slider fullwidthbanner-container roundedcorners">
    <div class="fullwidthbanner" data-height="350">
        <ul class="hide">
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/1x1.png" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/boy.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
                <div class="tp-caption block_black sfl tp-resizeme" 
                     data-x="70" 
                     data-y="102" 
                     data-speed="750" 
                     data-start="1000" 
                     data-easing="easeOutExpo" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-elementdelay="0.1" 
                     data-endelementdelay="0.1" 
                     data-endspeed="300">Epona Multipurpose Template
                </div>
                <div class="tp-caption block_styleColor sfl tp-resizeme" 
                     data-x="70" 
                     data-y="150" 
                     data-speed="750" 
                     data-start="1400" 
                     data-easing="easeOutExpo" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-elementdelay="0.1" 
                     data-endelementdelay="0.1" 
                     data-endspeed="300">Loaded With Options, And Is Simply A Joy To Use
                </div>
                <div class="tp-caption block_black sfr tp-resizeme" 
                     data-x="70" 
                     data-y="200" 
                     data-speed="750" 
                     data-start="1800" 
                     data-easing="easeOutExpo" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-elementdelay="0.1" 
                     data-endelementdelay="0.1" 
                     data-endspeed="300">Premium Sliders That Are Easy To Use With Any Content
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/1x1.png" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/flickr_eye.jpg" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
                <div class="tp-caption block_black sfl tp-resizeme" 
                     data-x="70" 
                     data-y="142" 
                     data-speed="750" 
                     data-start="1000" 
                     data-easing="easeOutExpo" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-elementdelay="0.1" 
                     data-endelementdelay="0.1" 
                     data-endspeed="300">Epona Multipurpose Template
                </div>
                <div class="tp-caption block_styleColor sfl tp-resizeme" 
                     data-x="70" 
                     data-y="190" 
                     data-speed="750" 
                     data-start="1400" 
                     data-easing="easeOutExpo" 
                     data-splitin="none" 
                     data-splitout="none" 
                     data-elementdelay="0.1" 
                     data-endelementdelay="0.1" 
                     data-endspeed="300">Loaded With Options, And Is Simply A Joy To Use
                </div>
            </li>
        </ul>
        <div class="tp-bannertimer"></div>
    </div>
</div>
<!-- /REVOLUTION SLIDER -->
<!-- CONTENT -->
<section>
    <div class="container">
        <div id="blog" class="row">
            <!-- BLOG ARTICLE LIST -->
            <div class="col-md-9 col-sm-9">
                <?php echo $content; ?>
            </div>
            <!-- /BLOG ARTICLE LIST -->
            <!-- BLOG SIDEBAR -->
            <div class="col-md-3 col-sm-3">
                <!-- search -->
                <div class="widget">
                    <form id="newsletterSubscribe" method="post" action="http://theme.stepofweb.com/Epona/v1.2/HTML/php/newsletter.php" class="input-group">
                        <input type="text" class="form-control" name="s" value="" placeholder="Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </form>
                </div>

                <!-- RECENT,POPULAR -->
                <div class="widget">

                    <!-- TABS -->
                    <div class="tabs nomargin-top">

                        <!-- tabs -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#tab1" data-toggle="tab">POPULAR</a></li>
                            <li><a href="#tab2" data-toggle="tab">RECENT</a></li>
                        </ul>
                        <!-- tabs content -->
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <?php Resource::get_popular(); ?>
                            </div>
                            <div id="tab2" class="tab-pane"><!-- tab content -->
                                <?php Resource::get_recent(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /TABS -->
                </div>
                <!-- /RECENT,POPULAR -->
                <!-- categories -->
                <div class="widget">
                    <?php ResourceCategory::get_category_list(); ?>
                </div>
                <!-- tags -->
                <!-- author -->
                <div class="widget">
                    <?php Author::get_author_list(); ?>
                </div>
                <!-- tags -->
                <div class="widget">
                    <h4>TAGS</h4>
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Business</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Design</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Technology</a>
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Audio</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Gallery</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Shortcode</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Video</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Audio</a> 
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>