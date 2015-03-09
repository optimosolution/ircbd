<?php $this->pageTitle = Yii::app()->name; ?>
<!-- search -->
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'search-form',
    'enableAjaxValidation' => false,
    'action' => Yii::app()->createUrl('resource/search'),
    'htmlOptions' => array('class' => 'input-group', 'style' => 'margin-bottom:5px;')
        ));
?>
<?php
$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'q',
    // additional javascript options for the autocomplete plugin
    'options' => array(
        'minLength' => '1',
    ),
    'source' => $this->createUrl("resource/ajax"),
    'htmlOptions' => array(
        'class' => 'form-control',
        'placeholder' => 'Search Resource',
    ),
));
?>
<span class="input-group-btn">
    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
</span>                   
<?php $this->endWidget(); ?>
<div class="well">
    <h3><strong>RECENT</strong> ARTICLES</h3>
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
</div>
<hr />
<div class="well">
    <h3><strong>POPULAR</strong> ARTICLES</h3>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider_popular,
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
</div>
<hr />
<h3><strong>EDITORIAL</strong> CHOICE</h3>
<div class="well">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider_editorial,
        'template' => '{items}{pager}',
        'itemView' => '_view2',
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
</div>
<hr />
<h3><strong>FEATURED</strong> ARTICLES</h3>
<div class="well">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider_featured,
        'template' => '{items}{pager}',
        'itemView' => '_view2',
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
</div>
