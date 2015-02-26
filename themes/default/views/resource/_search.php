<?php
/* @var $this ResourceController */
/* @var $model Resource */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resource_type'); ?>
		<?php echo $form->textField($model,'resource_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'resource_for'); ?>
		<?php echo $form->textField($model,'resource_for'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size_info'); ?>
		<?php echo $form->textField($model,'size_info',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sort_description'); ?>
		<?php echo $form->textArea($model,'sort_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_location'); ?>
		<?php echo $form->textField($model,'img_location',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author_id'); ?>
		<?php echo $form->textField($model,'author_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co_author'); ?>
		<?php echo $form->textField($model,'co_author',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_text'); ?>
		<?php echo $form->textArea($model,'search_text',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ordering'); ?>
		<?php echo $form->textField($model,'ordering'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hits'); ?>
		<?php echo $form->textField($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'main_source'); ?>
		<?php echo $form->textField($model,'main_source',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mirror1'); ?>
		<?php echo $form->textField($model,'mirror1',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mirror2'); ?>
		<?php echo $form->textField($model,'mirror2',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_on'); ?>
		<?php echo $form->textField($model,'created_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->