<?php
/* @var $this ResourceController */
/* @var $model Resource */
?>

<?php
$this->breadcrumbs = array(
    'Resources' => array('admin'),
    $model->title,
);
?>

<h1>View Resource #<?php echo $model->id; ?></h1>

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
));
?>