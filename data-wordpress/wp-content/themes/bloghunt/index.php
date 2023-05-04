<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @package Bloghunt
 */
get_header(); ?>
<main id="content">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
                    <!--col-md-8-->
                    <?php 
                    $bloghunt_content_layout = esc_attr(get_theme_mod('bloghunt_content_layout','grid-right-sidebar'));
                    if($bloghunt_content_layout == "align-content-left")
                    { ?>
                    <aside class="col-md-4 col-sm-4">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }
                    elseif($bloghunt_content_layout == "grid-left-sidebar")
                    { ?>
                    <aside class="col-md-4 col-sm-4">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }
                    if($bloghunt_content_layout == "align-content-right"){ ?>
                    <div class="col-md-8 col-sm-8 content-right">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                    <?php } elseif($bloghunt_content_layout == "align-content-left") { ?>
                    <div class="col-md-8 col-sm-8 content-right">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                    <?php } elseif($bloghunt_content_layout == "full-width-content") { ?>
                     <div class="col-md-12">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                     <?php }  if($bloghunt_content_layout == "grid-left-sidebar"){ ?>
                    <div class="col-md-8 col-sm-8 content-right">
                        <?php get_template_part('content','grid'); ?>
                    </div>
                    <?php } elseif($bloghunt_content_layout == "grid-right-sidebar") { ?>
                    <div class="col-md-8 col-sm-8 content-right">
                        <?php get_template_part('content','grid'); ?>
                    </div>
                    <?php } elseif($bloghunt_content_layout == "grid-fullwidth") { ?>
                     <div class="col-md-12">
                       <?php get_template_part('content','grid'); ?>
                    </div>
                     <?php }  ?>
                    
                    <!--/col-md-8-->
                    <?php if($bloghunt_content_layout == "align-content-right")  { ?>
                    <!--col-md-4-->
                    <aside class="col-md-4 col-sm-4 sidebar-right">
                        <?php get_sidebar();?>
                    </aside>
                    <!--/col-md-4-->
                    <?php } 
                    elseif($bloghunt_content_layout == "grid-right-sidebar")
                    { ?>
                    <aside class="col-md-4 col-sm-4 sidebar-right">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }?>
        </div><!--/row-->
    </div><!--/container-->
</main>                
<?php
get_footer();
?>