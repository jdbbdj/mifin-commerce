<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-themev2
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="hero-section position-relative overflow-hidden text-white d-flex justify-content-center align-items-center text-center vh-100">
    <!-- Background Image -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img src="http://mifin-sample-web.local/wp-content/uploads/2025/02/pexel-scaled.jpeg" alt="Hero Image" class="w-100 h-100 object-fit-cover">
    </div>

    <!-- Hero Content -->
    <div class="hero-content position-relative z-index-1">
        <h2 class="display-3 fw-bold mb-4">Randomize your fashion!</h2>
        <a href="#" class="btn btn-custom btn-lg">Get Started</a>
    </div>
	</section>


	<!-- Product List Section -->
	<section class="product-list-section py-5 bg-light text-center">
		<div class="container">
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
				<?php
				$args = array(
					'post_type'      => 'product',
					'posts_per_page' => 4, 
				);
				$products = new WP_Query($args);

				if ($products->have_posts()) :
					while ($products->have_posts()) : $products->the_post();
						global $product;
						?>
						<div class="col">
							<div class="card h-100 shadow-sm">
								<a href="<?php echo esc_url(get_permalink($product->get_id())); ?>">
									<?php echo $product->get_image('medium', ['class' => 'card-img-top']); ?>
								</a>
								<div class="card-body">
									<h3 class="card-title h5"><?php echo $product->get_name(); ?></h3>
									<p class="card-text text-muted small"><?php echo wc_get_product_category_list($product->get_id()); ?></p>
									<p class="card-text"><?php echo $product->get_price_html(); ?></p>
								</div>
							</div>
						</div>
					<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p class="text-center">No products found.</p>';
				endif;
				?>
			</div>
		</div>
	</section>
	<!--end of main-->

	<!--second banner-->
	<section class="second-hero-section position-relative overflow-hidden text-white d-flex justify-content-center align-items-center text-center vh-100">
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img src="http://mifin-sample-web.local/wp-content/uploads/2025/02/pexels2-scaled.jpeg" alt="Hero Image" class="w-100 h-100 object-fit-cover">
    </div>
    <div class="second-hero-content position-relative z-index-1">
		<h2>We're here to help you!</h2>
		<p>
			Bringing the best of the best of our products on your doorstep.
		</p>
    </div>
	</section>
	</main>
	

<?php

get_footer();
