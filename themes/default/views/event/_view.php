<?php
/* @var $this EventController */
/* @var $data Event */
?>
<div class="row">
    <div class="col-md-6"><?php echo CHtml::encode($data->title); ?> (<?php echo CHtml::encode($data->duration); ?>)</div>
    <div class="col-md-6 text-right"><?php echo CHtml::encode($data->place); ?></div>
</div>
<hr />
<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6"></div>
</div>
<div class="row">
    <div class="col-md-6">
        <b><?php echo CHtml::encode($data->getAttributeLabel('event_date')); ?>:</b>
        <?php echo UserAdmin::get_date($data->event_date); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('event_time')); ?>:</b>
        <?php echo CHtml::encode($data->event_time); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
        <?php echo CHtml::encode($data->subject); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('lecturer')); ?>:</b>
        <?php echo CHtml::encode($data->lecturer); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
        <?php echo CHtml::encode($data->description); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('sponsor')); ?>:</b>
        <?php echo CHtml::encode($data->sponsor); ?>
        <br />
    </div>
</div>