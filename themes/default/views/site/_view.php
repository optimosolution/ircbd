<?php
/* @var $this ResourceController */
/* @var $data Resource */
?>
<div class="col-sm-6 col-md-4" style="height: 250; overflow: hidden;">
    <div class="thumbnail">
        <?php echo Resource::get_picture_responsive($data->id); ?>
        <div class="caption">
            <h4><?php echo CHtml::link(mb_substr($data->title, 0, 20, 'UTF-8') . '...', array('resource/view', 'id' => $data->id), array('target' => '_blank', 'title' => $data->title)); ?></h4>
        </div>
    </div>
</div> 