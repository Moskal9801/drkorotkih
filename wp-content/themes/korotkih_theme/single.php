<?php
get_header();
?>

<div class="page-inner__body">
    <div class="body__content content-inner">
        <div class="content__title">
            <?php the_title(); ?>
        </div>
        <?php the_content(); ?>
    </div>
</div>

<?php
get_footer();
?>
