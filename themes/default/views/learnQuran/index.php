<?php
/* @var $this LearnQuranController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle = 'Learn Quran - ' . Yii::app()->name;
?>
<h3>Learn Quran</h3>
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