<?php get_header(); ?>

  <div id="main_wrapper">
    <div class="cf">
      <?php the_post(); ?>
      <div id="top_pickup">
        <p id="pickup_thumb">
          <img src="/wordpress/wp-content/themes/eto/images/pickup.jpg" alt="ピックアップ画像">
          <span id="pickup_tag">デザイン</span>
        </p>
        <dl>
          <dt><a href="#">記事のタイトルがここに入ります</a></dt>
          <dd>2014.12.12</dd>
        </dl>
      </div>

      <div id="top_ranking">
        <h2>人気記事ランキング</h2>
        <ul>
          <li>
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_1.jpg" alt="ランキング画像01">
                <span class="ranking_number">1</span>
              </dt>
              <dd>
                <h3><a href="#">記事タイトル</a></h3>
                <span class="ranking_tag webdesign">ウェブデザイン</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_2.jpg" alt="ランキング画像01">
                <span class="ranking_number">2</span>
              </dt>
              <dd>
                <h3><a href="#">記事タイトル</a></h3>
                <span class="ranking_tag wordpress">WORDPRESS</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_3.jpg" alt="ランキング画像01">
                <span class="ranking_number">3</span>
              </dt>
              <dd>
                <h3><a href="#">記事タイトル</a></h3>
                <span class="ranking_tag webmarketing">ウェブマーケティング</span>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_4.jpg" alt="ランキング画像01">
                <span class="ranking_number">4</span>
              </dt>
              <dd>
                <h3><a href="#">記事タイトル</a></h3>
                <span class="ranking_tag webdesign">ウェブデザイン</span>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
    </div>

    <div class="cf">
      <div id="top_left">
        <div id="top_category">
          <h3>CATEGORY</h3>
          <ul>
            <li><a href="#">すべてのカテゴリー</a></li>
            <li><a href="#">ウェブデザイン</a></li>
            <li><a href="#">WORDPRESS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">ウェブマーケティング</a></li>
          </ul>
        </div>
        <div id="top_ad">
          <img src="/wordpress/wp-content/themes/eto/images/add.jpg" alt="ここに広告を挿入">
        </div>
      </div>
      <div id="top_right">
        <h3>新着記事一覧</h3>
        <ul id="post_list">
          <li class="cf">
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_5.jpg" alt="新着記事1の画像">
                <span class="new_category_tag">ウェブデザイン</span>
              </dt>
              <dd>
                <h4><a href="#"><?php the_title(); ?></a></h4>
                <span class="new_date"><?php the_time( "Y/m/d" ); ?></span>
                <span class="new_tag">キーワード1,キーワード2</span>
                <p>記事本文がここに入ります。記事本文がここに入ります。記事本文がここに入ります。<a href="#">...続きを読む</a></p>
              </dd>
            </dl>
          </li>

          <li class="cf">
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_6.jpg" alt="新着記事1の画像">
                <span class="new_category_tag     ">ウェブデザイン</span>
              </dt>
              <dd>
                <h4><a href="#">記事タイトルがここに入ります。</a></h4>
                <span class="new_date">2013年5月19日</span>
                <span class="new_tag">キーワード1,キーワード2</span>
                <p>記事本文がここに入ります。記事本文がここに入ります。記事本文がここに入ります。<a href="#">...続きを読む</a></p>
              </dd>
            </dl>
          </li>

          <li class="cf">
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_7.jpg" alt="新着記事1の画像">
                <span class="new_category_tag     ">ウェブデザイン</span>
              </dt>
              <dd>
                <h4><a href="#">記事タイトルがここに入ります。</a></h4>
                <span class="new_date">2013年5月19日</span>
                <span class="new_tag">キーワード1,キーワード2</span>
                <p>記事本文がここに入ります。記事本文がここに入ります。記事本文がここに入ります。<a href="#">...続きを読む</a></p>
              </dd>
            </dl>
          </li>

          <li class="cf">
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_8.jpg" alt="新着記事1の画像">
                <span class="new_category_tag     ">ウェブデザイン</span>
              </dt>
              <dd>
                <h4><a href="#">記事タイトルがここに入ります。</a></h4>
                <span class="new_date">2013年5月19日</span>
                <span class="new_tag">キーワード1,キーワード2</span>
                <p>記事本文がここに入ります。記事本文がここに入ります。記事本文がここに入ります。<a href="#">...続きを読む</a></p>
              </dd>
            </dl>
          </li>

          <li class="cf">
            <dl>
              <dt>
                <img src="/wordpress/wp-content/themes/eto/images/tmb_9.jpg" alt="新着記事1の画像">
                <span class="new_category_tag     ">ウェブデザイン</span>
              </dt>
              <dd>
                <h4><a href="#">記事タイトルがここに入ります。</a></h4>
                <span class="new_date">2013年5月19日</span>
                <span class="new_tag">キーワード1,キーワード2</span>
                <p>記事本文がここに入ります。記事本文がここに入ります。記事本文がここに入ります。<a href="#">...続きを読む</a></p>
              </dd>
            </dl>
          </li>
        </ul>
        <div id="pagination">
          <ul class="cf">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">NEXT >></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- #main_wrapper -->

<?php get_footer(); ?>

</div>
<!-- wrapper end -->

</body>
</html>
