<?php
/* @var $this ResourceController */
/* @var $model Resource */

$this->pageTitle = 'Resources - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Resources' => array('admin'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#resource-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="widget-box">
    <div class="widget-header">
        <h5>Manage Resources</h5>
        <div class="widget-toolbar">
            <a data-action="settings" href="#"><i class="icon-cog"></i></a>
            <a data-action="reload" href="#"><i class="icon-refresh"></i></a>
            <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
            <a data-action="close" href="#"><i class="icon-remove"></i></a>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-plus"></i>', array('create'), array('data-rel' => 'tooltip', 'title' => 'Add', 'data-placement' => 'bottom')); ?>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-search"></i>', '#', array('class' => 'search-button', 'data-rel' => 'tooltip', 'title' => 'Search', 'data-placement' => 'bottom')); ?>
        </div>
    </div><!--/.widget-header -->
    <div class="widget-body">
        <div class="widget-main">
            <div class="search-form" style="display:none">
                <?php
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>
            </div><!-- search-form -->

            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'id' => 'resource-grid',
                'dataProvider' => $model->search(),
                'filter' => $model,
                'columns' => array(
                    array(
                        'name' => 'id',
                        'type' => 'raw',
                        'value' => '$data->id',
                        'htmlOptions' => array('style' => "text-align:center;width:80px;", 'title' => 'ID'),
                    ),
                    array(
                        'name' => 'code',
                        'type' => 'raw',
                        'value' => '$data->code',
                        'htmlOptions' => array('style' => "text-align:center;width:80px;", 'title' => 'Code'),
                    ),
                    array(
                        'name' => 'title',
                        'type' => 'raw',
                        'value' => '$data->title',
                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Title'),
                    ),
                    array(
                        'name' => 'category',
                        'type' => 'raw',
                        'value' => 'ResourceCategory::get_title($data->category)',
                        'filter' => CHtml::activeDropDownList($model, 'category', CHtml::listData(ResourceCategory::model()->findAll(array('condition' => '', "order" => "resource_category")), 'id', 'resource_category'), array('empty' => 'All')),
                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Category'),
                    ),
                    array(
                        'name' => 'resource_type',
                        'type' => 'raw',
                        'value' => 'ResourceType::get_title($data->resource_type)',
                        'filter' => CHtml::activeDropDownList($model, 'resource_type', CHtml::listData(ResourceType::model()->findAll(array('condition' => '', "order" => "resource_type")), 'id', 'resource_type'), array('empty' => 'All')),
                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Type'),
                    ),
                    array(
                        'name' => 'resource_for',
                        'type' => 'raw',
                        'value' => 'ResourceFor::get_title($data->resource_for)',
                        'filter' => CHtml::activeDropDownList($model, 'resource_for', CHtml::listData(ResourceFor::model()->findAll(array('condition' => '', "order" => "resource_for")), 'id', 'resource_for'), array('empty' => 'All')),
                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'For'),
                    ),
                    array(
                        'name' => 'author_id',
                        'type' => 'raw',
                        'value' => 'Author::get_author_name($data->author_id)',
                        'filter' => CHtml::activeDropDownList($model, 'author_id', CHtml::listData(Author::model()->findAll(array('condition' => '', "order" => "ordering, author_name")), 'id', 'author_name'), array('empty' => 'All')),
                        'htmlOptions' => array('style' => "text-align:left;", 'title' => 'Author'),
                    ),
                    array(
                        'name' => 'ordering',
                        'type' => 'raw',
                        'value' => '$data->ordering',
                        'htmlOptions' => array('style' => "text-align:center;", 'title' => 'Ordering'),
                    ),
                    'hits',
                    array(
                        'name' => 'status',
                        'value' => '$data->status?Yii::t(\'app\',\'Active\'):Yii::t(\'app\', \'Inactive\')',
                        'filter' => array('' => Yii::t('app', 'All'), '0' => Yii::t('app', 'Inactive'), '1' => Yii::t('app', 'Active')),
                        'htmlOptions' => array('style' => "text-align:center;"),
                    ),
                    array(
                        'header' => 'Actions',
                        'class' => 'bootstrap.widgets.TbButtonColumn',
                    ),
                ),
            ));
            ?>
        </div>
    </div><!--/.widget-body -->
</div><!--/.widget-box -->