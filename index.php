<?php get_header(); ?>
<article id="home">
	<section class="presentation">
		<?php $category_id = get_cat_ID( 'Portfolio');
		    $category_link = get_category_link( $category_id );?>
		
		<h1>I am <a href="<?php echo esc_url( $category_link ); ?>" class="ill">illustrator</a> and <a href="<?php echo esc_url( $category_link ); ?>" class="con">concept artist</a></h1>
		<div class="brush">
			<img src="<?php bloginfo('template_url'); ?>/img/brush.jpg"/>
		</div>
		<p>I’m digital artist, fantasy illustrator, concept artist and designer.</p>
<p>On my work you will find a great diversity: concept art for games, storyboards, web illustration, infographics, traditional painting, 3D images, books…</p>
	</section>
	
	
</article>
	
<?php get_footer(); ?>