<?php
/* @var $this ResourceController */
/* @var $data Resource */
?>
<!-- article - text -->
<div class="prev-article row">
    <div class="blog-prev-date col-md-3 col-sm-3">        
        <span class=""> <!--info-->
            <span class="block"><i class="fa fa-user"></i> BY <?php echo CHtml::link(Author::get_author_name($data->author_id), array('resource/writer', 'id' => $data->author_id), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-folder-open-o"></i> POSTED IN <?php echo CHtml::link(ResourceCategory::get_title($data->category), array('resource/category', 'id' => $data->category), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-bullhorn"></i> FOR <?php echo CHtml::link(ResourceFor::get_title($data->resource_for), array('resource/index', 'id' => $data->resource_for), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-comments"></i> WITH <?php echo CHtml::link(ResourceComment::count_comments($data->id) . ' COMMENTS', array('resource/view', 'id' => $data->id), array('target' => '_blank')); ?></span>
            <span class="block"><i class="fa fa-header"></i> VIEWED <?php echo $data->hits; ?></span>
        </span>
    </div>
    <div class="col-md-9 col-sm-9">
        <div class="row">
            <div class="col-sm-2">
                <?php echo Resource::get_picture($data->id); ?>
            </div>
            <div class="col-sm-10">
                <h2 class="article-title">
                    <?php echo CHtml::link($data->title . ' [' . $data->code . ']', array('resource/view', 'id' => $data->id), array('target' => '_blank')); ?>
                </h2>
            </div>
        </div>        
        <!-- blog short preview -->
        <p><?php echo mb_substr($data->sort_description, 0, 250, 'UTF-8') . '...'; ?></p>
    </div>
</div>
<!-- /article - text -->