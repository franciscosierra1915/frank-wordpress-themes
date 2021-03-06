<?php get_header(); ?>
    <section class="page-wrap">
        <div class="container">
            <section class="row">
                <div class="col-lg-9">
                    <h1>Search Results for '<?php echo get_search_query();?>':</h1>
                        <?php get_template_part('includes/section', 'searchresults');?>
                        <?php previous_posts_link();?>
                        <?php next_posts_link();?>
                </div>
            </section>
        </div>
    </section>
<?php get_footer(); ?>