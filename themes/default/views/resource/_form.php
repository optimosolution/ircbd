<?php
/* @var $this ResourceController */
/* @var $model Resource */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resource-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_type'); ?>
		<?php echo $form->textField($model,'resource_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'resource_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resource_for'); ?>
		<?php echo $form->textField($model,'resource_for'); ?>
		<?php echo $form->error($model,'resource_for'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size_info'); ?>
		<?php echo $form->textField($model,'size_info',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'size_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sort_description'); ?>
		<?php echo $form->textArea($model,'sort_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sort_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img_location'); ?>
		<?php echo $form->textField($model,'img_location',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'img_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
		<?php echo $form->error($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'co_author'); ?>
		<?php echo $form->textField($model,'co_author',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'co_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_text'); ?>
		<?php echo $form->textArea($model,'search_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'search_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordering'); ?>
		<?php echo $form->textField($model,'ordering'); ?>
		<?php echo $form->error($model,'ordering'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'main_source'); ?>
		<?php echo $form->textField($model,'main_source',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'main_source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mirror1'); ?>
		<?php echo $form->textField($model,'mirror1',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mirror1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mirror2'); ?>
		<?php echo $form->textField($model,'mirror2',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'mirror2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
		<?php echo $form->error($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->