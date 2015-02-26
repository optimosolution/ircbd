<?php
/* @var $this ResourceController */
/* @var $data Resource */
?>
<!-- article - text -->
<div class="prev-article row">
    <div class="blog-prev-date col-md-3 col-sm-3">
        <span class="date">
            <?php echo Resource::get_picture($data->id); ?>
        </span>
        <span class="info hidden-xs">
            <span class="block"><i class="fa fa-user"></i> BY <?php echo CHtml::link(Author::get_author_name($data->author_id), array('resource/author', 'id' => $data->author_id), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-folder-open-o"></i> POSTED IN <?php echo CHtml::link(ResourceCategory::get_title($data->category), array('resource/category', 'id' => $data->category), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-bullhorn"></i> FOR <?php echo CHtml::link(ResourceFor::get_title($data->resource_for), array('resource/index', 'id' => $data->resource_for), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-comments"></i> WITH <a href="blog-single-sidebar.html#comments">0 COMMENTS</a></span>
            <span class="block"><i class="fa fa-header"></i> HITS <?php echo $data->hits; ?></span>
        </span>
    </div>
    <div class="col-md-9 col-sm-9">
        <h2 class="article-title">
            <?php echo CHtml::link($data->title, $data->main_source, array('target' => '_blank')); ?>
        </h2>
        <!-- blog short preview -->
        <p><?php echo $data->sort_description; ?></p>
        <!-- read more button -->
        <div class="text-right">
            <?php echo CHtml::link('<i class="fa fa-sign-out"></i> READ MORE', $data->main_source, array('class' => 'read-more btn btn-xs', 'target' => '_blank')); ?>
        </div>

    </div>
</div>
<!-- /article - text -->