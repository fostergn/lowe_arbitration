<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<main id="home">
<h1>lowe arbitration</h1>
<article class="english">
<div>
	<p>
		<?php the_field('homepage_paragraph_1_english'); ?>
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_2_english'); ?> 
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_3_english'); ?>
		<br><br> <?php the_field('homepage_phone_number'); ?> 
		<br><br> <?php the_field('homepage_email'); ?>
	</p>
</div>
</article>

<article class="french">
<div>
	<p>
		<?php the_field('homepage_paragraph_1_french'); ?>
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_2_french'); ?> 
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_3_french'); ?>
		<?php the_field('homepage_phone_number'); ?> 
		<br><br> <?php the_field('homepage_email'); ?>
</p>
</div>
</article>

<article class="spanish">
<div>
	<p>
		<?php the_field('homepage_paragraph_1_spanish'); ?>
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_2_spanish'); ?> 
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_3_spanish'); ?>
		<?php the_field('homepage_phone_number'); ?> 
		<br><br> <?php the_field('homepage_email'); ?>
</p>
</div>
</article>

<article class="italian">
<div>
	<p>
		<?php the_field('homepage_paragraph_1_italian'); ?>
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_2_italian'); ?> 
	</p>
</div>
<div>
	<p>
		<?php the_field('homepage_paragraph_3_italian'); ?>
		<?php the_field('homepage_phone_number'); ?> 
		<br><br> <?php the_field('homepage_email'); ?>
</p>
</div>
</article>

</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>