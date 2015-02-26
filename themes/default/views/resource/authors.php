<?php

$this->pageTitle = 'Authors - ' . Yii::app()->name;

$array = Author::model()->findAll(
        array(
            'select' => 'id,author_name',
            'condition' => '',
            'order' => 'author_name',
        ));
echo '<ul>';
foreach ($array as $key => $value) {
    echo '<li>' . CHtml::link('<i class="fa fa-sign-out"></i> ' . $value['author_name'] . ' [' . Resource::count_author($value['id']) . ']', array('resource/author', 'id' => $value['id']), array('style' => 'font-size:16px;')) . '</li>';
}
echo '</ul>';
?>

