<?php

get_header();
pageBanner(array(
  'title' => 'Результаты Поиска',
  'subtitle' => 'Вы искали &ldquo;' . get_search_query() . '&rdquo;'
));
 ?>
<div class="container container--narrow page-section">
<?php
  if(have_posts()) {
      while(have_posts()){
        the_post(); 
        get_template_part('template-parts/content', get_post_type());
     } 
  echo paginate_links();
  } else {
    echo '<h2 class="headline headline--small-plus">Нет результатов, совпадающих с этим поиском.</h2>';
     } 

     get_search_form();
  ?>
</div>

<?php get_footer();

?>