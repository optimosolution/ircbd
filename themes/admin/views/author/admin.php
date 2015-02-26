<?php
/* @var $this AuthorController */
/* @var $model Author */

$this->pageTitle = 'Authors - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Authors' => array('admin'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#author-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="widget-box">
    <div class="widget-header">
        <h5>Manage Authors</h5>
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
        <div class="widget-main"
             <div class="search-form" style="display:none">
                <?php
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>
            </div><!-- search-form -->

            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'id' => 'author-grid',
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
                        'header' => 'Picture',
                        'type' => 'raw',
                        'value' => 'Author::get_picture_grid($data->id)',
                        'htmlOptions' => array('style' => "text-align:left;width:50px;", 'title' => 'Picture', 'class' => 'ace-thumbnails'),
                    ),
                    'author_name',
                    'description',
                    //'author_photo',
                    array(
                        'name' => 'ordering',
                        'type' => 'raw',
                        'value' => '$data->ordering',
                        'htmlOptions' => array('style' => "text-align:center;width:100px;", 'title' => 'Ordering'),
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