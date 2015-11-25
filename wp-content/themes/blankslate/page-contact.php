<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main id="contact">
	<h1 class="english"><?php the_title(); ?></h1>
	<h1 class="french"><?php the_title(); ?></h1>
	<h1 class="spanish"><?php the_field('contact_heading_spanish'); ?></h1>
	<h1 class="italian"><?php the_field('contact_heading_italian'); ?></h1>
<article class="english">
<div>
	<p>
		<?php the_field('contact_email'); ?><br><br>
		<?php the_field('contact_french_phone_number'); ?> <br><br>
		<?php the_field('contact_american_phone_number'); ?> <br><br>
		<?php the_field('contact_address'); ?> <br><br>
	</p>
</div>
</article>
<article class="french">
<div>
	<p>
		<?php the_field('contact_email'); ?><br><br>
		<?php the_field('contact_french_phone_number'); ?> <br><br>
		<?php the_field('contact_american_phone_number'); ?> <br><br>
		<?php the_field('contact_address'); ?> <br><br>
	</p>
</div>
</article>
<article class="spanish">
<div>
	<p>
		<?php the_field('contact_email'); ?><br><br>
		<?php the_field('contact_french_phone_number'); ?> <br><br>
		<?php the_field('contact_american_phone_number'); ?> <br><br>
		<?php the_field('contact_address'); ?> <br><br>
	</p>
</div>
</article>
<article class="italian">
<div>
	<p>
		<?php the_field('contact_email'); ?><br><br>
		<?php the_field('contact_french_phone_number'); ?> <br><br>
		<?php the_field('contact_american_phone_number'); ?> <br><br>
		<?php the_field('contact_address'); ?> <br><br>
	</p>
</div>
</article>
<img id="portrait" src="<?php bloginfo('template_directory'); ?>/img/johnlowe.jpg" alt="John Lowe, Arbitrator."/>
</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>