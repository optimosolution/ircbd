<?php
/* @var $this ResourceController */
/* @var $model Resource */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'resource-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'code',array('span'=>5,'maxlength'=>11)); ?>

            <?php echo $form->textFieldControlGroup($model,'title',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'category',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'resource_type',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'resource_for',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'size_info',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textAreaControlGroup($model,'sort_description',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'img_location',array('span'=>5,'maxlength'=>100)); ?>

            <?php echo $form->textFieldControlGroup($model,'author_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'co_author',array('span'=>5,'maxlength'=>500)); ?>

            <?php echo $form->textAreaControlGroup($model,'search_text',array('rows'=>6,'span'=>8)); ?>

            <?php echo $form->textFieldControlGroup($model,'ordering',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'hits',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'main_source',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'mirror1',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'mirror2',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'location',array('span'=>5,'maxlength'=>250)); ?>

            <?php echo $form->textFieldControlGroup($model,'created_by',array('span'=>5,'maxlength'=>150)); ?>

            <?php echo $form->textFieldControlGroup($model,'created_on',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->