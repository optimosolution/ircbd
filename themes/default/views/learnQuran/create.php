<?php
/* @var $this LearnQuranController */
/* @var $model LearnQuran */

$this->breadcrumbs=array(
	'Learn Qurans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LearnQuran', 'url'=>array('index')),
	array('label'=>'Manage LearnQuran', 'url'=>array('admin')),
);
?>

<h1>Create LearnQuran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>