<?php get_header(); ?>
<div class="swiper-container">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><img src="https://znews-photo.zadn.vn/w660/Uploaded/SgtnRN/2014_09_10/neymar1.jpg"></div>
		<div class="swiper-slide"><img src="http://media.bongda.com.vn/files/nhat.nguyen/2018/10/17/ne-03-1347.jpg"></div>
		<div class="swiper-slide"><img src="./wp-content/themes/customtheme/img/3.png"></div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
	<article class="post">
		<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
		<?php $post_meta_value = get_post_meta( $post->ID, 'test_meta_block_field', true );
		echo 'Email is: ' .$post_meta_value ;
		?>
		<?php the_content() ?>
	</article>
<?php endwhile;
else :
	echo '<p>There are no posts!</p>';
endif; ?>

<?php get_footer(); ?>