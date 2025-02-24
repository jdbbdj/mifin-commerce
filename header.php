<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-themev2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<!--Banner-->
	<div class="discount-bar pt-2 pb-2">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				🔥Up to 20% discount on selected items!
			</div>
		</div>
	</div>


	<header id="masthead" class="site-header">
		<div class="container nav-container">
			<div class="row  align-items-center">
				<div class="col site-header__logo  align-items-center d-flex justify-content-center justify-content-md-start pb-2">
				<?php
				echo the_custom_logo();
				?>
				</div>
				<div class="col-md-5">
				<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col art d-flex justify-content-center align-items-center justify-content-md-end pt-2">
				<a href="<?php echo wc_get_cart_url(); ?>">
				<i class="bi bi-bag-dash p-2"></i>	
				</a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
			</div>
		</div>
		
		<nav id="site-navigation" class="main-navigation">
			<div class="container d-flex justify-content-center">
				<div class="row nav-categories">
					<div class="col-12 text-center">
					<?php
					$args = array(
						'taxonomy'   => 'product_cat', 
						'orderby'    => 'name',
						'order'      => 'ASC',
						'hide_empty' => false, 
					);
					$categories = get_terms($args);

					if (!empty($categories) && !is_wp_error($categories)) {
						echo '<ul class="nav-container__lista">';
						foreach ($categories as $category) {
							$category_link = get_term_link($category); 
							echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
						}
						echo '</ul>';
					} else {
						echo '<p>No categories found.</p>';
					}
					?>
					</div>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
