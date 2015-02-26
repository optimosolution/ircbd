<?php
/* @var $this AuthorController */
/* @var $model Author */
?>

<?php
$this->pageTitle = 'Author details - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Authors' => array('admin'),
    $model->author_name,
);
?>
<div class="widget-box">
    <div class="widget-header">
        <h5>Details Author (<?php echo $model->author_name; ?>)</h5>
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
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'htmlOptions' => array(
                'class' => 'table table-striped table-condensed table-hover',
            ),
            'data' => $model,
            'attributes' => array(
                'id',
                'author_name',
                'description',
                array(
                    'name' => 'author_photo',
                    'type' => 'raw',
                    'value' => CHtml::image(Yii::app()->baseUrl . '/uploads/author/' . $model->author_photo, $model->author_name, array('class' => '', 'title' => $model->author_name)),
                ),
                'ordering',
            ),
        ));
        ?>
    </div>
</div><!--/.widget-body -->
</div><!--/.widget-box -->