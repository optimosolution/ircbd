<?php
/* @var $this LearnQuranController */
/* @var $model LearnQuran */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'subject',array('span'=>5,'maxlength'=>250)); ?>

                    <?php echo $form->textFieldControlGroup($model,'city',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'area',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'place',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'event_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'event_time',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'teacher',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textAreaControlGroup($model,'remarks',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->