<?php
/* @var $this ResourceController */
/* @var $model Resource */

$this->breadcrumbs=array(
	'Resources'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Resource', 'url'=>array('index')),
	array('label'=>'Create Resource', 'url'=>array('create')),
	array('label'=>'Update Resource', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Resource', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Resource', 'url'=>array('admin')),
);
?>

<h1>View Resource #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		'title',
		'category',
		'resource_type',
		'resource_for',
		'size_info',
		'sort_description',
		'img_location',
		'author_id',
		'co_author',
		'search_text',
		'ordering',
		'hits',
		'main_source',
		'mirror1',
		'mirror2',
		'location',
		'created_by',
		'created_on',
		'status',
	),
)); ?>
