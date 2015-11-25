<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main id="activities">
	<h1 class="english"><?php the_title(); ?></h1>
	<h1 class="french"><?php the_title(); ?></h1>
	<h1 class="spanish"><?php the_field('activity_page_heading_spanish'); ?></h1>
	<h1 class="italian"><?php the_field('activity_page_heading_italian'); ?></h1>
<article class="english">
<div>
	<p><?php the_field('activity_heading') ?>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('activity') ):

				 	// loop through the rows of data
				    while ( have_rows('activity') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('activity_information');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
</p>
</div>
</article>

<article class="french">
<div>
	<p><?php the_field('activity_heading_french') ?>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('activities_french') ):

				 	// loop through the rows of data
				    while ( have_rows('activities_french') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('activity_information');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
</p>
</div>
</article>

<article class="spanish">
<div>
	<p><?php the_field('activity_heading_spanish') ?>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('activities_spanish') ):

				 	// loop through the rows of data
				    while ( have_rows('activities_spanish') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('activity_information');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
</p>
</div>
</article>

<article class="italian">
<div>
	<p><?php the_field('activity_heading_italian') ?>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('activities_italian') ):

				 	// loop through the rows of data
				    while ( have_rows('activities_italian') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('activity_information');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
</p>
</div>
</article>

</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>