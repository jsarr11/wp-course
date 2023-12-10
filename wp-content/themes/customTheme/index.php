<?php get_header(); ?>

<h1><?php echo bloginfo("name");?></h1>
<p><?php echo bloginfo("description");?></p>


<?php
while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
<?php
}
?>

<?php get_footer(); ?>
