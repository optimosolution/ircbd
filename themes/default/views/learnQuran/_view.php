<?php
/* @var $this LearnQuranController */
/* @var $data LearnQuran */
?>
<div class="row">
    <div class="col-md-6"><?php echo CHtml::encode($data->subject); ?></div>
    <div class="col-md-6 text-right"><?php echo CHtml::encode($data->city); ?>, <?php echo CHtml::encode($data->area); ?></div>
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
        <b><?php echo CHtml::encode($data->getAttributeLabel('place')); ?>:</b>
        <?php echo CHtml::encode($data->place); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('teacher')); ?>:</b>
        <?php echo CHtml::encode($data->teacher); ?>
        <br />
        <b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
        <?php echo CHtml::encode($data->remarks); ?>
        <br />
    </div>
</div>