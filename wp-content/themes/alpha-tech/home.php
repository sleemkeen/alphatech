<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alpha_business
 */

get_header();
?>

 <div class="site-content">
            <div class="mnmd-block mnmd-block--fullwidth">
                <div class="container">
                    <img class="adv-down" src="<?php echo get_template_directory_uri(); ?>/img/ads.jpg" />
                    <div class="row row--space-between">
                        <div class="col-xs-12 col-md-4 col-lg-3">
                            <div class="block-heading block-heading--line">
                                <h4 class="block-heading__title"><span class="first-word">The</span> Latest</h4>
                            </div>
                            <div class="row row--space-between">

                                 <?php 
                                        $args1 = array (
                                                        // 'post_type'              => 'custom_post',
                                          'nopaging'               => false,
                                          'posts_per_page'         => '2',
                                          'order'                  => 'DESC',
                                          'orderby'                => 'ID',

                                        );
                                        ?>
                                        <?php $the_query1 = new WP_Query( $args1 ); ?>
                                        <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

                                <div class="col-xs-6 col-sm-12">
                                    <article class="post post--vertical cat-4">
                                        <div class="post__thumb"><a href="<?php the_permalink(); ?>"><img
                                                    src="<?php echo get_the_post_thumbnail_url() ?>"></a></div>
                                        <div class="post__text">
                                            <h3 class="post__title typescale-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="post__meta"><time class="time published"
                                                    datetime="<?php the_time('Y-m/d g:i A') ?>"
                                                    title="August 20, 2016 at 08:53 am"><i
                                                        class="mdicon mdicon-schedule"></i></time></div>
                                        </div>
                                    </article>
                                </div>

                                  <?php endwhile; else : ?>

                                      <p><?php _e( 'Sorry, no pages found.' ); ?></p>

                                    <?php endif; ?>
                           


                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8 col-lg-9">
                            <div class="block-heading block-heading--line">
                                <h4 class="block-heading__title"><span class="first-word">What's</span> Trending</h4>
                            </div>
                            <div class="row row--space-between">
                                <div class="col-xs-12 col-sm-8">
                                      <?php 
                                        $args1 = array (
                                                        // 'post_type'              => 'custom_post',
                                          'nopaging'               => false,
                                          'posts_per_page'         => '1',
                                          'order'                  => 'DESC',
                                          'orderby'                => 'ID',

                                        );
                                        ?>
                                        <?php $the_query1 = new WP_Query( $args1 ); ?>
                                        <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

                                    <article class="post post--vertical cat-1">
                                        <div class="post__thumb"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>"></a>
                                        </div>
                                        <div class="post__text">
                                            <h3 class="post__title typescale-3"><a href="<?php the_permalink(); ?>">
                                                   <?php the_title(); ?></a></h3>
                                            <div class="post__excerpt hidden-xs hidden-sm"><?php the_content(); ?></div>
                                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                                        class="entry-author__name"><?php echo get_the_author(); ?></a></span> <time class="time published"
                                                    datetime="<?php the_time('Y-m/d g:i A') ?>"
                                                    title="August 20, 2016 at 08:53 am"><i
                                                        class="mdicon mdicon-schedule"></i></time></div>
                                        </div>
                                    </article>


                                      <?php endwhile; else : ?>

                                      <p><?php _e( 'Sorry, no pages found.' ); ?></p>

                                    <?php endif; ?>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="row row--space-between">


                                           <?php 
                                        $args1 = array (
                                                        // 'post_type'              => 'custom_post',
                                          'nopaging'               => false,
                                          'posts_per_page'         => '2',
                                          'order'                  => 'DESC',
                                          'orderby'                => 'ID',

                                        );
                                        ?>
                                        <?php $the_query1 = new WP_Query( $args1 ); ?>
                                        <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
                                        <div class="col-xs-6 col-sm-12">
                                            <article class="post post--vertical cat-4">
                                                <div class="post__thumb"><a href="<?php the_permalink(); ?>"><img
                                                            src="<?php echo get_the_post_thumbnail_url() ?>"></a></div>
                                                <div class="post__text">
                                                    <h3 class="post__title typescale-0"><a href="#"><?php the_title(); ?></a></h3>
                                                    <div class="post__meta"><time class="time published"
                                                            datetime="<?php the_time('Y-m/d g:i A') ?>"
                                                            title=""><i
                                                                class="mdicon mdicon-schedule"></i></time></div>
                                                </div>
                                            </article>
                                        </div>

                                           <?php endwhile; else : ?>

                                      <p><?php _e( 'Sorry, no pages found.' ); ?></p>

                                    <?php endif; ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            </div>

            <div class="mnmd-block mnmd-block--fullwidth" style="transform: none;">
                <div class="container" style="transform: none;">
                    <div class="row" style="transform: none;">
                        <div class="mnmd-main-col" role="main">
                            <div class="mnmd-block">
                                <div class="block-heading block-heading--line">
                                    <h4 class="block-heading__title"><span class="first-word">More</span> Stories</h4>
                                </div>
                                <div class="posts-list list-space-md list-seperated">

                                       <?php 
                                        $args1 = array (
                                                        // 'post_type'              => 'custom_post',
                                          'posts_per_page'         => '10',
                                          'order'                  => 'DESC',
                                          'orderby'                => 'ID',

                                        );
                                    ?>
                                    <?php $the_query1 = new WP_Query( $args1 ); ?>
                                    <?php if ( $the_query1->have_posts() ) : while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>

                                    <div class="list-item">
                                        <article class="post post--horizontal post--horizontal-sm cat-2">
                                            <div class="post__thumb"><a href="<?php the_permalink(); ?>"><img
                                                        src="<?php echo get_the_post_thumbnail_url() ?>"></a></div>
                                            <div class="post__text">
                                                <h3 class="post__title typescale-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                <div class="post__excerpt"><?php echo strip_tags( excerpt(40) ); ?> </div>
                                                <div class="post__meta"><span class="entry-author">By <a href="#"
                                                            class="entry-author__name"><?php echo get_the_author(); ?></a></span> <time class="time published"
                                                            datetime="<?php the_time('Y-m/d g:i A') ?>"

                                                            <?php $author_comments = count(get_comments($args1)); ?>
                                                            title=""><i
                                                                class="mdicon mdicon-schedule"></i></time>
                                                                 <a href="#" title="{{$author_comments}} comments"><i
                                                            class="mdicon mdicon-chat_bubble_outline"></i><?php echo $author_comments ?></a></div>
                                            </div>
                                        </article>
                                    </div>

                                      <?php endwhile; else : ?>

                                      <p><?php _e( 'Sorry, no pages found.' ); ?></p>

                                    <?php endif; ?>
                                                                       
                                  
                                </div>
                                <nav class="mnmd-pagination">
                                    <h4 class="mnmd-pagination__title sr-only">Posts navigation</h4>
                                    <div class="mnmd-pagination__links text-center"><a
                                            class="mnmd-pagination__item mnmd-pagination__item-prev" href="#"><i
                                                class="mdicon mdicon-arrow_back"></i></a> <a
                                            class="mnmd-pagination__item" href="#">1</a> <span
                                            class="mnmd-pagination__item mnmd-pagination__item-current">2</span>
                                        <a class="mnmd-pagination__item" href="#">3</a> <a class="mnmd-pagination__item"
                                            href="#">4</a> <span
                                            class="mnmd-pagination__item mnmd-pagination__dots">…</span>
                                        <a class="mnmd-pagination__item" href="#">26</a> <a
                                            class="mnmd-pagination__item mnmd-pagination__item-next" href="#"><i
                                                class="mdicon mdicon-arrow_forward"></i></a></div>
                                </nav>
                            </div><!-- .mnmd-block -->
                        </div><!-- .mnmd-main-col -->
                        <div class="mnmd-sub-col mnmd-sub-col--right js-sticky-sidebar" role="complementary"
                            style="position: relative; overflow: visible; box-sizing: border-box; min-height: 865.906px;">
                            <!-- Widget subscribe -->
                            <!-- Widget subscribe -->
                            <!-- Widget Social counter -->
                            <!-- Widget Social counter -->
                            <div class="theiaStickySidebar"
                                style="padding-top: 0px; padding-bottom: 1px; position: fixed; top: 80px; width: 300px; left: 910px;">
                                <div class="mnmd-widget-social-counter-counter mnmd-widget widget">
                                    <div class="widget__title">
                                        <h4 class="widget__title-text">Social</h4>
                                        <div class="widget__title-seperator"></div>
                                    </div>
                                    <div class="mnmd-widget-social-counter__inner">
                                        <ul class="list-unstyled list-space-xs">
                                            <li><a href="#" class="social-tile social-facebook facebook-theme-bg">
                                                    <div class="social-tile__icon"><i
                                                            class="mdicon mdicon-facebook"></i></div>
                                                    <div class="social-tile__inner flexbox">
                                                        <div class="social-tile__left flexbox__item">
                                                            <h5 class="social-tile__title meta-font">Facebook</h5><span
                                                                class="social-tile__count">2.7k likes</span>
                                                        </div>
                                                        <div class="social-tile__right"><i
                                                                class="mdicon mdicon-arrow_forward"></i></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#" class="social-tile social-twitter twitter-theme-bg">
                                                    <div class="social-tile__icon"><i class="mdicon mdicon-twitter"></i>
                                                    </div>
                                                    <div class="social-tile__inner flexbox">
                                                        <div class="social-tile__left flexbox__item">
                                                            <h5 class="social-tile__title meta-font">Twitter</h5><span
                                                                class="social-tile__count">1.2k followers</span>
                                                        </div>
                                                        <div class="social-tile__right"><i
                                                                class="mdicon mdicon-arrow_forward"></i></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#" class="social-tile social-youtube youtube-theme-bg">
                                                    <div class="social-tile__icon"><i class="mdicon mdicon-youtube"></i>
                                                    </div>
                                                    <div class="social-tile__inner flexbox">
                                                        <div class="social-tile__left flexbox__item">
                                                            <h5 class="social-tile__title meta-font">Youtube</h5><span
                                                                class="social-tile__count">480k subscribers</span>
                                                        </div>
                                                        <div class="social-tile__right"><i
                                                                class="mdicon mdicon-arrow_forward"></i></div>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .mnmd-sub-col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div>
        </div><!-- .site-content -->

        <?php
get_footer();

?>