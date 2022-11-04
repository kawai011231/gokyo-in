<?php get_header(); ?>
<main>
      <div class="single_wrap">
        <div class="single_img_wrap">
          <?php the_post_thumbnail('thumbnail'); ?>
          <?php
    /* The loop */
    while ( have_posts() ) : the_post();
        if ( get_post_gallery() ) :
            $gallery = get_post_gallery( get_the_ID(), false );
            
            /* Loop through all the image and output them one by one */
            foreach( $gallery['src'] AS $src )
            {
                ?>
                
                <img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
                
                <?php
            }
        endif;
    endwhile;
?>
        </div>
        <div class="single_main">
          <div class="single_main_inner">
            <h1 class="single_title"><?php the_title(); ?></h1>
            <div class="single_tag_wrap">
            <?php the_category(); ?>
            </div>
            <div class="single_contents_wrap">
              <!-- <h2 class="single_contents_title">
              <?php the_title(); ?>
              </h2> -->
              <div class="single_contents_text">
              <?php the_content(); ?>
              </div>
            </div>
            <div class="single_map_wrap">
              <div class="single_map_text_wrap">
                <p class="single_map_text">福井市〇〇町00-0000</p>
                <p class="single_map_text">Tel：0000-00-0000</p>
                <p class="single_map_text">Open：7:00-20:00</p>
                <p class="single_map_text">Close：土日祝</p>
              </div>
              <div class="single_map_link_wrap">
                <a href="">
                  <img src="<?= get_template_directory_uri(); ?>/img/single_map.svg" alt="" />
                </a>
              </div>
            </div>
            <div class="single_spot">
              <h2 class="single_spot_title">近くのスポット</h2>
              <ul class="spot_link_wrap">
                <?php 
      if(has_category()){
        $categories = get_the_category();
        $cat_id = array();
      
        foreach($categories as $category){
        $cat_id[] = $category->term_id;
        }
      }
    
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => '3',
        'post__not_in' =>array($post->ID),
        'category__in' => $cat_id,
        'orderby' => 'rand'
        );
      $my_query = new WP_Query( $args );
    ?>
    
    <?php if($my_query -> have_posts()) : ?>
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                <li class="spot_link_element">
                  <a href="<?php the_permalink(); ?>" class="spot_link">
                    <div class="spot_link_img"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <p class="spot_link_text"><?php
if(mb_strlen($post->post_title)>10) {
  $title= mb_substr($post->post_title,0,10) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></p>
                  </a>
                </li>
                <?php endwhile; ?><?php endif; ?>
<?php wp_reset_postdata(); ?>
              </ul>
            </div>
            <div class="single_spot">
              <h2 class="single_spot_title">はしごできるそば店</h2>
              <?php
$post_id = get_the_ID(); // 投稿のIDを取得
$categories = get_the_category($post_id); // 投稿のカテゴリーを取得
$cat_ids = []; // カテゴリーIDを格納するための空の配列を用意

foreach ($categories as $category) :
  array_push($cat_ids, $category->term_id); // 用意した空配列にカテゴリーIDを格納
endforeach;

$args = [
  'post_type' => 'shop', // 投稿タイプを指定
  'posts_per_page' => '3', // 表示する記事数を指定
  'category__in' => $cat_ids, // カテゴリーIDを指定
  'post__not_in' => [$post_id] // 現在の投稿を除外
];

$related_cats_query = new WP_Query($args);
?>
<?php if ($related_cats_query->have_posts()) : ?>
              <ul class="spot_link_wrap">
              <?php while ($related_cats_query->have_posts()) : $related_cats_query->the_post(); ?>
                <li class="spot_link_element">
                  <a href="<?php the_permalink(); ?>" class="spot_link">
                  <div class="spot_link_img"><?php the_post_thumbnail('thumbnail'); ?></div>
                    <p class="spot_link_text"><p class="spot_link_text"><?php
if(mb_strlen($post->post_title)>10) {
  $title= mb_substr($post->post_title,0,10) ;
    echo $title . '...';
  } else {
    echo $post->post_title;
  }
?></p></p>
                  </a>
                </li>
                <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p>関連記事はありません。</p>
  <?php
  endif;
  wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </main>