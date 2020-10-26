<?php

get_header();
pageBanner(array(
  'title' => 'Все События',
  'subtitle' => 'Узнайте о происходящем в университете'
));
 ?>

<div class="container container--narrow page-section">
<?php
  
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/content-event');
   }
  echo paginate_links();
?>

<hr class="section-break">

<p>Посмотрите наш архив прошлых <a href="<?php echo site_url('/past-events') ?>">событий</a>.</p>

</div>

<?php get_footer();

?>