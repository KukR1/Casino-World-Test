<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1>
	<link rel="profile" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<div id="circle"></div>
	<!-- ******************* The Navbar Area ******************* -->

		<div class="topnav" id="navMenu">
		<img id="logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png"/>
		<div class="dropdown">
    <button class="dropbtn">Online Casino
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Unibet Casino</a>
      <a href="#">Paddypower Casino</a>
      <a href="#">Betano Casino</a>
    </div>
  </div>
	  <a href="#Slots">Slots</a>
  	<a href="#software">Software</a>
 	 <a href="#bonuses">Bonuses</a>
	  <a href="#news">News</a>
  	<a href="#blackjack">Blackjack</a>
	  <a href="#roulette">Roulette</a>
	  <a href="#livecasino">Live Casino</a>
	  <a href="#poker">Poker</a>
	  <a href="#extra">Extra</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>function myFunction() {
  var x = document.getElementById("navMenu");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}</script>

	<!-- ******************* End of Nav ******************* -->


