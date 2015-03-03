<?php
/* @var $this ResourceController */
/* @var $model Resource */
?>

<?php
$this->pageTitle = 'Resource details - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Resources' => array('admin'),
    $model->title,
);
?>
<div class="widget-box">
    <div class="widget-header">
        <h5>Details Resource (<?php echo $model->title; ?>)</h5>
        <div class="widget-toolbar">
            <a data-action="settings" href="#"><i class="icon-cog"></i></a>
            <a data-action="reload" href="#"><i class="icon-refresh"></i></a>
            <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
            <a data-action="close" href="#"><i class="icon-remove"></i></a>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-pencil"></i>', array('update', 'id' => $model->id), array('data-rel' => 'tooltip', 'title' => 'Edit', 'data-placement' => 'bottom')); ?>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-plus"></i>', array('create'), array('data-rel' => 'tooltip', 'title' => 'Add', 'data-placement' => 'bottom')); ?>
        </div>
    </div><!--/.widget-header -->
    <div class="widget-body">
        <div class="widget-main">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'htmlOptions' => array(
                    'class' => 'table table-striped table-condensed table-hover',
                ),
                'data' => $model,
                'attributes' => array(
                    'id',
                    'code',
                    'title',
                    array(
                        'name' => 'category',
                        'type' => 'raw',
                        'value' => ResourceCategory::get_title($model->category),
                    ),
                    array(
                        'name' => 'resource_type',
                        'type' => 'raw',
                        'value' => ResourceType::get_title($model->resource_type),
                    ),
                    array(
                        'name' => 'resource_for',
                        'type' => 'raw',
                        'value' => ResourceFor::get_title($model->resource_for),
                    ),
                    'size_info',
                    'sort_description',
                    array(
                        'name' => 'img_location',
                        'type' => 'raw',
                        'value' => CHtml::image(Yii::app()->baseUrl . '/uploads/resource/' . $model->img_location, $model->title, array('class' => '', 'title' => $model->title)),
                    ),
                    array(
                        'name' => 'author_id',
                        'type' => 'raw',
                        'value' => Author::get_author_name($model->author_id),
                    ),
                    'co_author',
                    'search_text',
                    'main_source',
                    'mirror1',
                    'mirror2',
                    'location',
                    'created_by',
                    'ordering',
                    'hits',
                    array(
                        'name' => 'related_resource',
                        'type' => 'raw',
                        'value' => Resource::get_related_resource($model->related_resource),
                    ),
                    array(
                        'name' => 'created_on',
                        'type' => 'raw',
                        'value' => UserAdmin::get_date_time($model->created_on),
                    ),
                    array(
                        'name' => 'editorial_choice',
                        'value' => $model->editorial_choice ? "Yes" : "No",
                    ),
                    array(
                        'name' => 'featured',
                        'value' => $model->featured ? "Yes" : "No",
                    ),
                    array(
                        'name' => 'status',
                        'value' => $model->status ? "Active" : "Inactive",
                    ),
                ),
            ));
            ?>
        </div>
    </div><!--/.widget-body -->
</div><!--/.widget-box -->