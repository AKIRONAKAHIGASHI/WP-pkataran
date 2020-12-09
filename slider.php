  <!-- スライダー全体を括るメインコンテナ -->
  <div class="swiper-container">
      <!-- 全スライドをまとめるラッパー -->
      <div class="swiper-wrapper">
      <?php $args = array(
      'posts_per_page' => 5,
        );
        $my_query = new WP_Query( $args );?>
              <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
          <!-- 各スライド -->
          <article class="swiper-slide">
            <a href="<?php the_permalink() ?>"><?php if ( the_post_thumbnail('thumb75') ); // サムネイルを持っているときの処理 ?></a>
            <div class="text">
              <div class="cat-data ">
                <div class="ribbon">
                  <?php if( has_category() ): ?>
                  <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                  <?php endif; ?>
                </div>
              </div>
              <div class="kiji-main">
<!--                 <div class="kiji-date">
                  <time
                  datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                  <?php echo get_the_date(); ?>
                  </time>
                </div> -->
                <h2 class="kiji-title"><?php the_title(); ?></h2>
              </div>
            </div>
          </article>
      <?php endwhile; ?>
      </div>
      <!-- ページネーションを表示する場合 -->
      <div class="swiper-pagination"></div>

      <!-- 前後スライドへのナビゲーションボタン(矢印)を表示する場合 -->
      <!-- <div class="swiper-button-prev"></div> -->
      <!-- <div class="swiper-button-next"></div> -->

      <!-- スクロールバーを表示する場合 -->
  <!--     <div class="swiper-scrollbar"></div> -->
  </div>
