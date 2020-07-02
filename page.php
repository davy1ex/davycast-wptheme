<?php
/**
 * Template Name: Podcasts
*/
?>

<?php wp_head()?> 
<?php get_header(); ?>


<div class="content-wrapper">
    <div class="first column">
        <div class="cell-podcasts">
            <div class="podcast">
                <img src="img/podcast1.png" alt="">
            </div>

            <div class="podcast">
                <img src="img/podcast2.png" alt="">
            </div>

            <div class="podcast">
                <img src="img/podcast3.png" alt="">
            </div>
        </div>
    </div>

    <div class="second column side-bar">
        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>