# WordPress Checkout Flow with Custom Theme

## Project Overview

This project is a custom WordPress theme designed to enhance the user experience of a checkout flow. It includes a user-friendly and visually appealing checkout process, along with an authentication pop-up to ensure users are logged in before proceeding to checkout. The theme is built with a focus on frontend development, adhering to WordPress coding standards and best practices.


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
