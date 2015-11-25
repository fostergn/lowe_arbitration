<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main id="who">
	<h1 class="english"><?php the_title(); ?></h1>
	<h1 class="french"><?php the_field('who_heading_french'); ?></h1>
	<h1 class="spanish"><?php the_field('who_we_are_heading_spanish'); ?></h1>
	<h1 class="italian"><?php the_field('who_we_are_heading_italian'); ?></h1>
<article class="english">
	<div>
		<p>
			<?php the_field('who_section_1_english'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_section_2_english'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_section_3_english'); ?>
		</p>
	</div>
	<div>
		<p>
			<?php the_field('who_section_4_english'); ?>
		</p>
	</div>

</article>

<article class="french">
	<div>
		<p>
			<?php the_field('who_section_1_french'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_section_2_french'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_section_3_french'); ?>
		</p>
	</div>
	<div>
		<p>
			<?php the_field('who_section_4_french'); ?>
		</p>
	</div>

</article>

<article class="spanish">
	<div>
		<p>
			<?php the_field('who_we_are_section_1_spanish'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_we_are_section_2_spanish'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_we_are_section_3_spanish'); ?>
		</p>
	</div>
	<div>
		<p>
			<?php the_field('who_we_are_section_4_spanish'); ?>
		</p>
	</div>

</article>

<article class="italian">
	<div>
		<p>
			<?php the_field('who_we_are_section_1_italian'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_we_are_section_2_italian'); ?>
		</p>
	</div>

	<div>
		<p>
			<?php the_field('who_we_are_section_3_italian'); ?>
		</p>
	</div>
	<div>
		<p>
			<?php the_field('who_we_are_section_4_italian'); ?>
		</p>
	</div>

</article>

</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>