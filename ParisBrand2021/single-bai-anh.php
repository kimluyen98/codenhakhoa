<?php get_header(); ?>
<main>
			<div class="slidepage">
				<img src="/wp-content/themes/clinic/media/images/slidepage.jpg" alt="">
			</div>
			<div class="mainpage">
				<section class="mainbox">
					<div class="breadcrumb">
							 <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
					
					</div>

						
					
			        <div class="detail scroll_content">
			        	<p><img class="aligncenter" src="/wp-content/themes/clinic/media/images/Detail_p1.jpg" alt=""></p>
						
						<?php
							// Start the loop.
							while ( have_posts() ) : the_post(); ?>

								<h1 class="title"><?php the_title(); ?></h1>
								<?php the_content(); ?>

							<?php	
							endwhile;
							?>
						
			        </div>

		        </section>
			</div>
			<?php get_sidebar(); ?>
		</main>

<style>
.kangnam main {
    width: 100%;
    padding: 0px 0 0px !important;
    display: table;
}
.breadcrumb_last{display:inherit  !important}
.kangnam main .mainpage .mainbox .breadcrumb {
    background: #00597d;
    color: #fff;
    padding: 1px 23px !important;
    font-size: 13px;
}
</style>
<?php get_footer(); ?>
