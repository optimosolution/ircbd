<?php $this->beginContent('//layouts/main'); ?>
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
                <!-- categories -->
                <div class="widget">
                    <div class="sky-form boxed">
                        <header>CATEGORY</header>
                        <fieldset>
                            <?php ResourceCategory::get_category_list(); ?>
                        </fieldset>                        
                    </div>
                </div>
                <!-- tags -->
                <!-- author -->
                <div class="widget">
                    <div class="sky-form boxed">
                        <header>AUTHOR</header>
                        <fieldset>
                            <?php Author::get_author_list(); ?>
                        </fieldset>                        
                    </div>                    
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>