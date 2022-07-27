<?php 
get_header();
pageBanner(array(
  'title' => 'All Programs',
  'subtitle' =>'There is somrthing for everyone!'
));
?>
    <div class="container container--narrow page-section">
    <ul class="link-list min-list">
    <?php 
    while(have_posts()){
     the_post(); ?>
     <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    <?php }
    echo paginate_links();
    ?>
    </ul>
    <?php
get_footer();
?>