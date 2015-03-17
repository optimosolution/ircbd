<?php
/* @var $this ResourceController */
/* @var $model Resource */
/* @var $form TbActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'resource-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>
    <p class="help-block">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
    <div class="row-fluid">
        <div class="span6">   
            <?php echo $form->textFieldControlGroup($model, 'code', array('span' => 12, 'maxlength' => 11)); ?>
        </div>
        <div class="span6">
            <?php echo $form->textFieldControlGroup($model, 'title', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">   
            <?php echo $form->dropDownListControlGroup($model, 'category', CHtml::listData(ResourceCategory::model()->findAll(array('condition' => '', "order" => "ordering, resource_category")), 'id', 'resource_category'), array('empty' => '--please select--', 'class' => 'span12')); ?>
        </div>
        <div class="span6">  
            <?php echo $form->dropDownListControlGroup($model, 'resource_type', CHtml::listData(ResourceType::model()->findAll(array('condition' => '', "order" => "resource_type")), 'id', 'resource_type'), array('empty' => '--please select--', 'class' => 'span12')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">   
            <?php echo $form->dropDownListControlGroup($model, 'resource_for', CHtml::listData(ResourceFor::model()->findAll(array('condition' => '', "order" => "ordering, resource_for")), 'id', 'resource_for'), array('empty' => '--please select--', 'class' => 'span12')); ?>
        </div>
        <div class="span6">  
            <?php echo $form->textFieldControlGroup($model, 'size_info', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">  
            <?php echo $form->fileFieldControlGroup($model, 'img_location', array('maxlength' => 255, 'class' => 'span12')); ?>
        </div>
        <div class="span6">  
            <?php echo $form->dropDownListControlGroup($model, 'author_id', CHtml::listData(Author::model()->findAll(array('condition' => '', "order" => "ordering, author_name")), 'id', 'author_name'), array('empty' => '--please select--', 'class' => 'span12')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span8">   
            <?php echo $form->textAreaControlGroup($model, 'sort_description', array('rows' => 2, 'span' => 12)); ?>
        </div>
        <div class="span4"> 
            <?php echo $form->textAreaControlGroup($model, 'search_text', array('rows' => 2, 'class' => 'span12')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4"> 
            <?php echo $form->textFieldControlGroup($model, 'co_author', array('span' => 12, 'maxlength' => 500)); ?>
        </div>
        <div class="span4"> 
            <?php echo $form->textFieldControlGroup($model, 'created_by', array('span' => 12, 'maxlength' => 150)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldControlGroup($model, 'location', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">   
            <?php echo $form->textFieldControlGroup($model, 'main_source', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
        <div class="span6">     
            <?php echo $form->textFieldControlGroup($model, 'mirror1', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">  
            <?php echo $form->textFieldControlGroup($model, 'mirror2', array('span' => 12, 'maxlength' => 250)); ?>
        </div>
        <div class="span6">
            <?php echo $form->dropDownListControlGroup($model, 'related_resource', CHtml::listData(Resource::model()->findAll(array('condition' => 'status=1', 'order' => 'title')), 'id', 'title'), array('data-placeholder' => 'Choose related resource...', 'multiple' => true, 'class' => 'chosen-select span5')); ?>   
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">    
            <?php echo $form->textFieldControlGroup($model, 'ordering', array('span' => 12)); ?>
        </div>
        <div class="span2">   
            <?php echo $form->textFieldControlGroup($model, 'hits', array('span' => 12)); ?>    
        </div>
        <div class="span2">   
            <?php echo $form->dropDownListControlGroup($model, 'editorial_choice', array('1' => 'Yes', '0' => 'No'), array('class' => 'span12')); ?>    
        </div>
        <div class="span2">    
            <?php echo $form->dropDownListControlGroup($model, 'featured', array('1' => 'Yes', '0' => 'No'), array('class' => 'span12')); ?>  
        </div>
        <div class="span2">   
            <?php echo $form->dropDownListControlGroup($model, 'status', array('1' => 'Yes', '0' => 'No'), array('class' => 'span12')); ?>
        </div>
        <div class="span2">            
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">   
            <?php echo $form->textAreaControlGroup($model, 'pricing_policy', array('rows' => 1, 'span' => 12)); ?>
        </div>
    </div>
    <div class="form-actions">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
        <?php
        echo TbHtml::submitButton('Save & New', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
            'name' => 'savennew'
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->