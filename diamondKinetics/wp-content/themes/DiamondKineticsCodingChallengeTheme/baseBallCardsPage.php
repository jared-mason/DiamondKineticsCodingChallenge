<?php
/*
 * Template Name: Base Ball Cards

 */
 get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
			get_template_part('template-parts/card');

			$cards[] = new Card("Mike", "Trout", "https://www.baseball-reference.com/req/202103260/images/headshots/f/f322d40f_mlbam.jpg", "Centerfielder", "Drafted by the Los Angeles Angels of Anaheim.", 65, 23, 8);;
			$cards[] = new Card("Carlos", "Quentin", "https://www.baseball-reference.com/req/202103260/images/headshots/4/45264457_sabr.jpg", "Outfielder", "Drafted by the Arizona Diamondbacks.", 68, 18, 12);
			$cards[] = new Card("Kirby", "Puckett", "https://www.baseball-reference.com/req/202103260/images/headshots/a/abfa93df_sabr.jpg", "Centerfielder", "Drafted by the Minnesota Twins.", 58, 21, 9);
			$cards[] = new Card("David", "Price", "https://www.baseball-reference.com/req/202103260/images/headshots/0/0489eae6_mlbam.jpg", "Pitcher", "Drafted by the Los Angeles Dodgers.", 69, 19, 15);
			$cards[] = new Card("Jake", "Odorizzi", "https://www.baseball-reference.com/req/202103260/images/headshots/f/f46e1c0e_mlbam.jpg", "Pitcher", "Drafted by the Milwaukee Brewers.", 72, 23, 11);
			$cards[] = new Card("Aaron", "Nola", "https://www.baseball-reference.com/req/202103260/images/headshots/6/62b4d109_mlbam.jpg", "Pitcher", "Drafted by the Toronto Blue Jays.", 58, 18, 13);
			$cards[] = new Card("Jon", "Lester", "https://www.baseball-reference.com/req/202103260/images/headshots/0/0d6b6af2_mlbam.jpg", "Pitcher", "Drafted by the Boston Red Sox.", 64, 16, 14);
			$cards[] = new Card("Clayton", "Kershaw", "https://www.baseball-reference.com/req/202103260/images/headshots/0/0caa3053_mlbam.jpg", "Pitcher", "Drafted by the Los Angeles Dodgers.", 57, 23, 6);
			$cards[] = new Card("Ender", "Inciarte", "https://www.baseball-reference.com/req/202103260/images/headshots/8/8abe043b_mlbam.jpg", "Centerfielder", "Exceeded rookie limits during 2014 season", 46, 22, 16);
			$cards[] = new Card("Raisel", "Iglesias", "https://www.baseball-reference.com/req/202103260/images/headshots/5/582b62b3_mlbam.jpg", "Pitcher", "Exceeded rookie limits during 2015 season.", 68, 21, 15);

			echo "<div class='grid-container'>";

			foreach ($cards as $card) {
				$card->drawCard();
			}
			
			echo "</div>";

		?>
		
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'diamondkineticsdemo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php
get_footer();