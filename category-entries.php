<div class="category-entry">
  <?php $arr = array(
    'number' => 8,
  );
    $categories = get_categories($arr);
    foreach($categories as $category) {
        echo '<a href="' . get_category_link( $category->term_id ) . '">';
        echo '<h3>' . $category->name . '</h3>';
        echo '<img src="' . get_template_directory_uri() . '/img/ico_category_.png">';
        echo '</a>';
    }
  ?>
</div>
<div class="category-entry category-other">
  <a href="">
    <h3>他カテゴリー</h3>
    <img src=<?php echo get_template_directory_uri(); ?>/img/ico_category_.png>
  </a>
</div>
