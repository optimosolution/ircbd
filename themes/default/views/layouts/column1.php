<?php $this->beginContent('//layouts/main'); ?>
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
                <!-- counters -->
                <div class="widget">
                    <div class="row text-center countTo">
                        <div class="col-md-12 col-sm-12">
                            <span class="boxed radius3">
                                <strong class="styleColor" data-to="<?php echo Resource::count_resource(); ?>"><?php echo Resource::count_resource(); ?></strong>
                                <label>TOTAL RESOURCES</label>
                            </span>
                        </div>                    
                    </div>
                </div>
                <!-- categories -->
                <div class="widget">
                    <div class="sky-form boxed">
                        <header>CATEGORY (<?php echo ResourceCategory::count_total(); ?>)</header>
                        <fieldset>
                            <?php ResourceCategory::get_category_list(); ?>
                        </fieldset>                        
                    </div>
                </div>
                <!-- tags -->
                <!-- author -->
                <div class="widget">
                    <div class="sky-form boxed">
                        <header>AUTHOR (<?php echo Author::count_total(); ?>)</header>
                        <fieldset>
                            <?php Author::get_author_list(); ?>
                        </fieldset>                        
                    </div>                    
                </div>
            </div>
            <!-- /BLOG SIDEBAR -->
        </div>
    </div>
</section>
<!-- /CONTENT -->
<?php $this->endContent(); ?>