<?php
/**
 * Header front-page
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

<body>
    <?php wp_body_open(); ?>
    <header>
        <div class="container">
            <p>Header</p>
        </div>
    </header>
