<?php $this->beginContent('//layouts/main'); ?>
<!-- REVOLUTION SLIDER -->
<div class="slider fullwidthbanner-container roundedcorners">
    <div class="fullwidthbanner" data-height="350">
        <ul class="hide">
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/1x1.png" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/Islamic_banner_1.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
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
                     data-endspeed="300">The Entirely Merciful, the Especially Merciful, [1:3]
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
                     data-endspeed="300">Sovereign of the Day of Recompense. [1:4]
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
                     data-endspeed="300">It is You we worship and You we ask for help. [1:5]
                </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-saveperformance="off" >
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/1x1.png" data-lazyload="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/demo/Islamic_banner_2.jpg" alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
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
                     data-endspeed="300">He neither begets nor is born, [112:3]
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
                     data-endspeed="300">Nor is there to Him any equivalent. [112:4]
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
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'search-form',
                    'enableAjaxValidation' => false,
                    'action' => Yii::app()->createUrl('resource/search'),
                    'htmlOptions' => array('class' => 'input-group')
                ));
                ?>
                <?php
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'name' => 'q',
                    // additional javascript options for the autocomplete plugin
                    'options' => array(
                        'minLength' => '1',
                    ),
                    'source' => $this->createUrl("resource/ajax"),
                    'htmlOptions' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Search Resource',
                    ),
                ));
                ?>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                </span>                   
                <?php $this->endWidget(); ?>
                <!-- counters -->
                <div class="widget">
                    <div class="row text-center countTo">
                        <div class="col-md-12 col-sm-12">
                            <span class="boxed radius3">
                                <strong class="styleColor" data-to="<?php echo Resource::count_resource(); ?>"><?php echo Resource::count_resource(); ?></strong>
                                <label>TOTAL RESOURCES</label>
                            </span>
                        </div>                    
                    </div>
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
<!--                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Business</a>                     -->
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>