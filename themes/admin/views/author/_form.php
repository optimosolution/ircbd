<?php
/* @var $this AuthorController */
/* @var $model Author */
/* @var $form TbActiveForm */
?>

<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'author-form',
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
    <?php echo $form->textFieldControlGroup($model, 'author_name', array('span' => 5, 'maxlength' => 150)); ?>
    <?php echo $form->textAreaControlGroup($model, 'description', array('rows' => 6, 'span' => 8)); ?>
    <div class="row-fluid">
        <div class="span5">
            <?php echo $form->fileFieldControlGroup($model, 'author_photo', array('maxlength' => 255, 'class' => 'span12')); ?>
        </div>
    </div>
    <?php echo $form->textFieldControlGroup($model, 'ordering', array('span' => 5)); ?>
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