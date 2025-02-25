# WordPress Checkout Flow with Custom Theme

## Project Overview

This project is a custom WordPress theme designed to enhance the user experience of a checkout flow. It includes a user-friendly and visually appealing checkout process, along with an authentication pop-up to ensure users are logged in before proceeding to checkout. The theme is built with a focus on frontend development, adhering to WordPress coding standards and best practices.

[🎯Code Figma](https://www.figma.com/design/fpXrViNXOONOo1H1IHtOum/RANDOMIZE?node-id=0-1&p=f&t=cKJ7fEXGZaQ5CJiL-0)


![image](https://github.com/user-attachments/assets/3e496188-1283-4d5f-8096-0aad2322ac0f)


## Code Structure

This project mainly focused on highlighting the files that are mostly used. Bootstrap custom theme other default files will just be included on the code repository for functionality purposes, but this guide will just showcase the files that are fundamentals in creating a working custom theme.

```
custom-theme-directory
├── css
│   ├── bootstrap -- This is a bootstrap directory coming from the official bootstrap website.
│   ├── main.css -- This change along with main.scss.
│   ├── main.css.map -- This change along with main.scss.
│   ├── main.scss -- This is created to activate the bootstrap functionality of the app, color variables could be created here.
├── page.php -- This is a customized page, that can call the customized widget when necessary
├── front-page.php -- This is the front-page of the app
├── header.php -- This is the universal header of the app
├── footer.php -- This is the universal footer of the app
├── functions.php -- This is one of the necessary file for proper alignment on fonts, custom actions, and custom widget etc.
├── woocommerce.php -- This creates a simple woocommerce widget
├── style.css -- This mainly affects the showcasing details on your Wordpress when selecting a customized theme.

```

## Installation

### Prerequisites

- WordPress installed and running.
- WooCommerce plugin installed and activated.

### Steps

***1. Clone the repository***
`https://github.com/jdbbdj/mifin-commerce.git`

***2. Copy the Theme Folder:***
- Navigate to the wp-content/themes/ directory in your WordPress installation.
- Copy the custom theme folder from the cloned repository into this directory.

***3. Activate the theme:***
- Log in to your WordPress admin dashboard.
- Go to Appearance > Themes.
- Find and activate the custom theme.

***4.Configure WooCommerce:***
- Ensure WooCommerce is set up with the necessary products and payment gateways.
- Customize the checkout page settings as needed..

***5. Test the Checkout Flow:***
- Visit the shop page, add products to the cart, and proceed to checkout.
- Verify that the authentication pop-up appears for non-logged-in users.

## Creating your own page

Pages could be modified of which landing page would you want.

![Image 2-25-25 at 4 33 PM](https://github.com/user-attachments/assets/4077234e-5576-4e6e-a5f4-1e8b1ea9b27c)

custom-theme-directory
├── front-page.php -- This is the front-page of the app

You can remove this line of code if you want to remove the unneccessary content of each pages.

```
<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
  ?>

```


## Creating your own widget

Creating your own widget is a bit handy in terms of integrating default or customized menus inside of your application. Just simply create a widget inside your functions.php, call an add_function, and call it on the html.

custom-theme-directory
├── functions.php
```
 function custom_footer_widget_one() {
	$args = array(
		'id' => 'footer_widget-col-one',
		'name' => __('Footer Column One', 'text_domain'),
		'description' => __('Column One', 'text_domain'),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="1$s" class="widget %2$s">',
		'after_widget' => '</div>'
	);

	register_sidebar($args);
 }

 add_action('widgets_init','custom_footer_widget_one');
```


![Image 2-25-25 at 4 36 PM (2)](https://github.com/user-attachments/assets/07cd4880-6f44-4b17-ac38-34f9e417e0a9)

custom-theme-directory
├── footer.php
```
 <div class="col-md-6 col-sm-6 mb-4">
    <?php dynamic_sidebar('footer_widget-col-one'); ?>
</div>
```



## Integrating Adv. Woo Search plugin
![Image 2-25-25 at 4 35 PM](https://github.com/user-attachments/assets/e35b0254-d739-437b-949a-f7b61a5ab558)

custom-theme-directory
├── header.php

```
<?php aws_get_search_form( true ); ?>
```

## Integrating Woocommerce widget
Integrating woocommerce widget is great for instant added features for your ecommerce website. It's just very simple approach.

custom-theme-directory
├── functions.php
```
 add_theme_support('woocommerce');
```

Create a woocommerce.php file on the root directory of your source code, then add this line of code. Positioning can vary depending on the builder's preference.

custom-theme-directory
├── woocommerce.php

```
<main class="container">
    <?php woocommerce_content(); ?>
</main>
```



## Turning off the checkout of guests

Authentication before checkout is easily implemented through Woocommerce settings

![Image 2-25-25 at 4 36 PM](https://github.com/user-attachments/assets/47fc2db2-6e9f-4b1e-a7a2-0b446316449b)

## Designing the default templates
Based on my understanding, if I wanted to overwrite the default designs coming from default pages that is generated through Wordpress ***shortcodes***, I can easily just inspect the component's class and design it inside my main.css, as you can see some of the buttons on the login and input fields have been overwritten.
