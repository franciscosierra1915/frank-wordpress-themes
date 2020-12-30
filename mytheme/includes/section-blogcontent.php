<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <p><?php echo get_the_date('d/m/y h:i:s');?></p>
    <?php the_content();?>
        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        // echo $fname . ' ' . $lname;
        ?>
    <p>Posted by <?php echo $fname;?> <?php echo $lname ;?></p>
    <!-- <?php
        // Get the array from a function call.
        $tags = get_the_tags();
        // Check if $tag is indeed an array or an object.
        if (is_array($tags) || is_object($tags)) {
            // If yes, then foreach() will iterate over it.
            foreach($tags as $tag) {
                echo get_tag_link($tag->term_id);
            }
        
        } else {
        // If $myList was not an array, then this block is executed. 
          echo "Unfortunately, an error occurred.";
        }
    ?> -->
    <?php 
        $tags = get_the_tags();
        if($tags):
            foreach($tags as $tag):?>
                <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge bg-warning">
                    <?php echo $tag->name;?>
                </a> 
            <?php endforeach; endif; ?>
    <?php 
        $categories = get_the_category();
            foreach($categories as $cat):?>
                <a href="<?php echo get_category_link($cat->term_id);?>" class="badge bg-primary">
                    <?php echo $cat->name;?>
                </a>
            <?php endforeach;?>
    <?php comments_template();?>
    
    <?php endwhile; else: endif;?>