<?php $this->beginContent('//layouts/main'); ?>
<!-- PAGE TOP -->
<section class="page-title">
    <div class="container">
        <header>
            <h2><!-- Page Title -->
                <?php
                if (isset(Yii::app()->controller->action->id)) {
                    if (Yii::app()->controller->action->id == 'category') {
                        echo '<i class="fa fa-folder-open"></i> ' . ResourceCategory::get_title(@$_GET['id']);
                    } elseif (Yii::app()->controller->action->id == 'author') {
                        echo '<i class="fa fa-user"></i> ' . Author::get_author_name(@$_GET['id']);
                    } elseif (Yii::app()->controller->action->id == 'type') {
                        echo '<i class="fa fa-tag"></i> ' . ResourceType::get_title(@$_GET['id']);
                    } elseif (Yii::app()->controller->action->id == 'index') {
                        echo '<i class="fa fa-bullhorn"></i> ' . ResourceFor::get_title(@$_GET['id']);
                    } elseif (Yii::app()->controller->action->id == 'authors') {
                        echo '<i class="fa fa-user"></i> Authors';
                    } else {
                        echo '<i class="fa fa-folder-open-o"></i> Resource';
                    }
                }
                ?>
            </h2><!-- /Page Title -->
        </header>
    </div>			
</section>
<!-- /PAGE TOP -->
<!-- CONTENT -->
<section>
    <div class="container">
        <div id="blog" class="row">
            <!-- BLOG ARTICLE LIST -->
            <div class="col-md-9 col-sm-9">
                <?php echo $content; ?>
            </div>
            <!-- /BLOG ARTICLE LIST -->
            <!-- BLOG SIDEBAR -->
            <div class="col-md-3 col-sm-3">
                <!-- blog search -->
                <div class="widget">
                    <form id="newsletterSubscribe" method="post" action="http://theme.stepofweb.com/Epona/v1.2/HTML/php/newsletter.php" class="input-group">
                        <input type="text" class="form-control" name="s" value="" placeholder="Blog Search" />
                        <span class="input-group-btn">
                            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                        </span>
                    </form>
                </div>

                <!-- RECENT,POPULAR -->
                <div class="widget">

                    <!-- TABS -->
                    <div class="tabs nomargin-top">

                        <!-- tabs -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#tab1" data-toggle="tab">POPULAR</a></li>
                            <li><a href="#tab2" data-toggle="tab">RECENT</a></li>
                        </ul>
                        <!-- tabs content -->
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <?php Resource::get_popular(); ?>
                            </div>
                            <div id="tab2" class="tab-pane"><!-- tab content -->
                                <?php Resource::get_recent(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /TABS -->
                </div>
                <!-- /RECENT,POPULAR -->
                <!-- categories -->
                <div class="widget">
                    <?php ResourceCategory::get_category_list(); ?>
                </div>
                <!-- tags -->
                <!-- author -->
                <div class="widget">
                    <?php Author::get_author_list(); ?>
                </div>
                <!-- tags -->
                <div class="widget">
                    <h4>TAGS</h4>
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Business</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Design</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Technology</a>
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Audio</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Gallery</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Shortcode</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Video</a> 
                    <a class="tag label label-default light" href="#"><i class="fa fa-tags"></i> Audio</a> 
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>