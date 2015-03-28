<?php
/* @var $this LearnQuranController */
/* @var $model LearnQuran */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'learn-quran-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'subject', array('span' => 5, 'maxlength' => 250)); ?>

    <?php echo $form->textFieldControlGroup($model, 'city', array('span' => 5)); ?>

    <?php echo $form->textFieldControlGroup($model, 'area', array('span' => 5, 'maxlength' => 150)); ?>

    <?php echo $form->textFieldControlGroup($model, 'place', array('span' => 5, 'maxlength' => 150)); ?>

    <div class="row-fluid">
        <div class="span5">
            <?php echo $form->labelEx($model, 'event_date'); ?>
            <?php
            echo $form->widget('zii.widgets.jui.CJuiDatePicker', array(
                'language' => 'en',
                'model' => $model, // Model object
                'attribute' => 'event_date',
                'options' => array(
                    'mode' => 'date',
                    'changeYear' => true,
                    'changeMonth' => true,
                    'yearRange' => '1900:2200',
                    'dateFormat' => 'yy-mm-dd',
                    'timeFormat' => '',
                    'showTimepicker' => false,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Event Date',
                    'class' => 'span12',
                ),
                    ), true);
            ?>
        </div>
    </div>

    <?php echo $form->textFieldControlGroup($model, 'event_time', array('span' => 5, 'maxlength' => 150)); ?>

    <?php echo $form->textFieldControlGroup($model, 'teacher', array('span' => 5, 'maxlength' => 150)); ?>

    <?php echo $form->textAreaControlGroup($model, 'remarks', array('rows' => 6, 'span' => 8)); ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', array('1' => 'Active', '0' => 'Inactive'), array('class' => 'span5')); ?>

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