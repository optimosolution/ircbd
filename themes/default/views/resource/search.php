<?php $this->pageTitle = 'Search - ' . Yii::app()->name; ?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'search-form',
    'enableAjaxValidation' => false,
    'action' => Yii::app()->createUrl('resource/search'),
    'htmlOptions' => array('class' => 'input-group')
        ));
?>
<div class="row well">
    <div class="col-sm-5">
        <?php echo CHtml::textField('q', isset($_REQUEST['q']) ? CHtml::encode($_REQUEST['q']) : '', array('maxlength' => 250, 'placeholder' => 'Search text', 'class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo CHtml::dropDownList('category', isset($_REQUEST['category']) ? CHtml::encode($_REQUEST['category']) : '', CHtml::listData(ResourceCategory::model()->findAll(array('condition' => '', 'order' => 'ordering')), 'id', 'resource_category'), array('empty' => '-category-', 'class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo CHtml::dropDownList('for', isset($_REQUEST['for']) ? CHtml::encode($_REQUEST['for']) : '', CHtml::listData(ResourceFor::model()->findAll(array('condition' => '', 'order' => 'ordering')), 'id', 'resource_for'), array('empty' => '-type-', 'class' => 'form-control')); ?>
    </div>
    <div class="col-sm-2">
        <?php echo CHtml::dropDownList('author', isset($_REQUEST['author']) ? CHtml::encode($_REQUEST['author']) : '', CHtml::listData(Author::model()->findAll(array('condition' => '', 'order' => 'ordering')), 'id', 'author_name'), array('empty' => '-author-', 'class' => 'form-control')); ?>
    </div>    
    <div class="col-sm-1">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
    </div>
</div>
<?php $this->endWidget(); ?>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'template' => '{items}{pager}',
    'itemView' => '_view',
    'pager' => array(
        'header' => '',
        'prevPageLabel' => '<i class="fa fa-backward"></i>',
        'nextPageLabel' => '<i class="fa fa-forward"></i>',
        'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
        'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
        'selectedPageCssClass' => 'active', //default "selected"
        'maxButtonCount' => 10, // defalut 10  
        'htmlOptions' => array(
            'class' => 'pagination',
            'style' => '',
            'id' => '',
        ),
    ),
));
?>