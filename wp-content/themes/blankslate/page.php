<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<main id="who">
	<h1><?php the_title(); ?></h1>
	<article>
<div>
	<p>After having worked many years as General Counsel, Compliance Director for international companies based in Europe with activities around the globe, John Lowe has established a practice focused on arbitration and dispute resolution. To this work he brings his extensive transactional and dispute resolution with his unique in-house perspective. He will also continue to advise on compliance matters including the development of corporate compliance programs.</p>
	</div>
	<div><p>
Prior to commencing his independent activities Mr Lowe served as General Counsel and Communications Director at Qioptiq, a privately held Luxembourg based holding company with facilities in Europe, Asia and the US involved in the development and manufacture or precision photonic products for the defense, medical and life science, industrial and life science markets. This company began as a division of Thales that was sold to a private equity group in 2005 and subsequently grew organically and through acquisitions. It was sold at the end of 2013. </p>
</div>
<div><p>
Before Qioptiq, Mr Lowe worked in the Paris office of Orrick, Herrington &amp; Sutcliffe in the corporate department. He served in a number of positions, including Group Assistant General Counsel and General Counsel of the Submarine Networks Division at Alcatel an international supplier of telecommunication equipment and systems. <br><br>
He began his career as a US diplomat (economic specialist) serving in Mexico, Washington, D.C. and Italy. He also worked in private practice in Italy and the US (Ohio).</p></div>
<div><p>
Mr Lowe has been very active in the in-house community around the world. From 2013-2014 he served as President of the Association of Corporate Counsel Europe an association of in-house counsel with over 2,000 members (worldwide ACC has over 35,000 members). He speaks regularly at legal conferences on a wide-range of topics including arbitration, dispute management, risk management, intellectual property, export controls and compliance issues. <br><br>
Languages: English, Italian, French, working knowledge of Spanish<br><br>

Member: District of Columba (U.S.) bar, Ohio (U.S.) bar, </p>
</div>
</article>
</main>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>