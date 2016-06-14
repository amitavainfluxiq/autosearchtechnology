 <!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo simple_fields_value('seometa'); ?>


    <title> <?php echo simple_fields_value('titleseo') ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/ionicons.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/style1.css" type="text/css" rel="stylesheet" />
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.0.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

</body>
</html>
