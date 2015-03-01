<?php
/* @var $this ResourceController */
/* @var $model Resource */
$this->pageTitle = $model->author_name . ' - ' . Yii::app()->name;
?>
<!-- article - text -->
<div class="prev-article row">
    <div class="blog-prev-date col-md-3 col-sm-3">
        <span class="date">
            <?php echo Author::get_picture($model->id); ?>
        </span>
        <span class="info hidden-xs">
            <span class="block"><i class="fa fa-bullhorn"></i> TOTAL RESOURCE <?php echo CHtml::link(Resource::count_author($model->id), array('resource/author', 'id' => $model->id), array('target' => '_blank')); ?></span>
        </span>
    </div>
    <div class="col-md-9 col-sm-9">
        <h2 class="article-title">
            <?php echo $model->author_name; ?>
        </h2>
        <!-- blog short preview -->
        <p class="dropcap"><?php echo $model->description; ?></p>
    </div>
</div>
<!-- /article - text -->