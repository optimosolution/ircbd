<?php
/* @var $this ResourceController */
/* @var $data Resource */
?>
<div class="col-md-4">
    <figure>
        <?php echo Resource::get_picture_responsive($data->id); ?>
    </figure>
    <h4><?php echo CHtml::link($data->title . ' [' . $data->code . ']', array('resource/view', 'id' => $data->id), array('target' => '_blank')); ?></h4>
</div>
