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
                    <h3>SALAT TIMING</h3>
                    <iframe src="http://www.islamicfinder.org/prayer_service.php?country=bangladesh&city=dhaka&state=81&zipcode=&latitude=23.7231&longitude=90.4086&timezone=6&HanfiShafi=1&pmethod=3&fajrTwilight1=10&fajrTwilight2=10&ishaTwilight=10&ishaInterval=30&dhuhrInterval=1&maghribInterval=1&dayLight=0&page_background=&table_background=&table_lines=&text_color=&link_color=&prayerFajr=&prayerSunrise=&prayerDhuhr=&prayerAsr=&prayerMaghrib=&prayerIsha=&lang=" frameborder=0 width="260" height="280" marginwidth=0 marginheight=0 scrolling="no"> </iframe>
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
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>