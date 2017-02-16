<?php get_header(); ?>
<body>
	<?php get_template_part('header-content'); ?>
    <main>
    	<div class="wrapper">
        	<section>
				<?php get_sidebar(); ?>
                <article class="right">
                	<?php while(have_posts()): the_post(); ?>
                    	<?php the_title('<h1>','</h1>'); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </article>
        	</section>
        </div>
    </main>
<?php get_footer(); ?>