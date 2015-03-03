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
    <?php echo $form->textFieldControlGroup($model, 'code', array('span' => 5, 'maxlength' => 11)); ?>
    <?php echo $form->textFieldControlGroup($model, 'title', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->dropDownListControlGroup($model, 'category', CHtml::listData(ResourceCategory::model()->findAll(array('condition' => '', "order" => "ordering, resource_category")), 'id', 'resource_category'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->dropDownListControlGroup($model, 'resource_type', CHtml::listData(ResourceType::model()->findAll(array('condition' => '', "order" => "resource_type")), 'id', 'resource_type'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->dropDownListControlGroup($model, 'resource_for', CHtml::listData(ResourceFor::model()->findAll(array('condition' => '', "order" => "ordering, resource_for")), 'id', 'resource_for'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->textFieldControlGroup($model, 'size_info', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->textAreaControlGroup($model, 'sort_description', array('rows' => 6, 'span' => 8)); ?>
    <div class="row-fluid">
        <div class="span5">
            <?php echo $form->fileFieldControlGroup($model, 'img_location', array('maxlength' => 255, 'class' => 'span12')); ?>
        </div>
    </div>
    <?php echo $form->dropDownListControlGroup($model, 'author_id', CHtml::listData(Author::model()->findAll(array('condition' => '', "order" => "ordering, author_name")), 'id', 'author_name'), array('empty' => '--please select--', 'class' => 'span5')); ?>
    <?php echo $form->textFieldControlGroup($model, 'co_author', array('span' => 5, 'maxlength' => 500)); ?>
    <?php echo $form->textAreaControlGroup($model, 'search_text', array('rows' => 6, 'span' => 8)); ?>
    <?php echo $form->textFieldControlGroup($model, 'main_source', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->textFieldControlGroup($model, 'mirror1', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->textFieldControlGroup($model, 'mirror2', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->textFieldControlGroup($model, 'location', array('span' => 5, 'maxlength' => 250)); ?>
    <?php echo $form->textFieldControlGroup($model, 'created_by', array('span' => 5, 'maxlength' => 150)); ?>
    <?php echo $form->textFieldControlGroup($model, 'ordering', array('span' => 5)); ?>
    <?php echo $form->textFieldControlGroup($model, 'hits', array('span' => 5)); ?>    
    <?php echo $form->dropDownListControlGroup($model, 'related_resource', CHtml::listData(Resource::model()->findAll(array('condition' => 'status=1', 'order' => 'title')), 'id', 'title'), array('data-placeholder' => 'Choose related resource...', 'multiple' => true, 'class' => 'chosen-select span5')); ?>   
    <?php echo $form->dropDownListControlGroup($model, 'editorial_choice', array('1' => 'Yes', '0' => 'No'), array('class' => 'span5')); ?>    
    <?php echo $form->dropDownListControlGroup($model, 'featured', array('1' => 'Yes', '0' => 'No'), array('class' => 'span5')); ?>    
    <?php echo $form->dropDownListControlGroup($model, 'status', array('1' => 'Yes', '0' => 'No'), array('class' => 'span5')); ?>    
    <div class="form-actions">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div><!-- form -->