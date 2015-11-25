<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main id="transactions">
	<h1><?php the_title(); ?></h1>
<article>
<div id="tabs">
	<ul id="transactions-nav">
		<li><a href="#tabs-1">Mergers & Acquisitions</a></li>
		<li><a href="#tabs-2">Joint Ventures</a></li>
		<li><a href="#tabs-3">Equity Participations</a></li>
		<li><a href="#tabs-4">Government Enforcement Actions</a></li>
		<li><a href="#tabs-5">Disputes</a></li>
		<li><a href="#tabs-6">Bankruptcies & Restructurings</a></li>
		<li><a href="#tabs-7">Major Contracts</a></li>
		<li><a href="#tabs-8">Compliance Programs</a></li>
	</ul>
	<article id="tabs-1">
		<p>Mergers & Acquisitions</p>
			<ul>
				<?php

					// check if the repeater field has rows of data
					if( have_rows('merger_and_acquisitions') ):

					 	// loop through the rows of data
					    while ( have_rows('merger_and_acquisitions') ) : the_row();

					        // display a sub field value
							echo '<li>';
					        echo the_sub_field('transaction');
					        echo '</li>';

					    endwhile;

					else :

					    // no rows found
					    echo 'please email me for more information on my speaking engagements';

					endif;

					?>
			</ul>
	</article>
	<article id="tabs-2">
		<p>Joint Ventures</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('joint_ventures') ):

				 	// loop through the rows of data
				    while ( have_rows('joint_ventures') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-3">
		<p>Equity Participations</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('equity_participations') ):

				 	// loop through the rows of data
				    while ( have_rows('equity_participations') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-4">
		<p>Government Enforcement Actions</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('government_enforcement_actions') ):

				 	// loop through the rows of data
				    while ( have_rows('government_enforcement_actions') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-5">
		<p>Disputes</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('disputes') ):

				 	// loop through the rows of data
				    while ( have_rows('disputes') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-6">
		<p>Bankruptcies & Restructurings</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('bankruptcies_and_restructurings') ):

				 	// loop through the rows of data
				    while ( have_rows('bankruptcies_and_restructurings') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-7">
		<p>Major Contracts</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('major_contracts') ):

				 	// loop through the rows of data
				    while ( have_rows('major_contracts') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
	<article id="tabs-8">
		<p>Compliance Programs</p>
		<ul>
			<?php

				// check if the repeater field has rows of data
				if( have_rows('compliance_programs') ):

				 	// loop through the rows of data
				    while ( have_rows('compliance_programs') ) : the_row();

				        // display a sub field value
						echo '<li>';
				        echo the_sub_field('transaction');
				        echo '</li>';

				    endwhile;

				else :

				    // no rows found
				    echo 'please email me for more information on my speaking engagements';

				endif;

				?>
		</ul>
	</article>
</div>
</article>

</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>