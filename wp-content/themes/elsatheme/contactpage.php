<?php
/**
 * Template name: contact page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elsatheme
 */

get_header();
?>
<!-- Banner -->
			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-envelope"></span>
						<h2>Entre em contato!</h2>
						<p>Preencha o formulário, em breve entramos em contato com você.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<?php  echo do_shortcode( '[contact-form-7 id="145" title="Untitled"]');?>
								</div>

						</section>

				</article>
<?php
get_footer(); ?>