<?php
/**
 * The front page template file.
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear. Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package components
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<section id="intro" role="main">
			<div class="wrap">

				<div class="chute-wrapper">
					<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/pipe-chute.svg' ); ?>
					<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/tap.svg' ); ?>
				</div>

				<div class="content-wrapper">
					<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/pipe-left.svg' ); ?>

					<div id="stretchy-pipe">&nbsp;</div>

					<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/pipe-rightcrook.svg' ); ?>

					<div class="intro-content">

						<div class="site-branding">
							<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/components.svg' ); ?>
							<h2 class="site-description">Want to build a WordPress theme turbo-fast?</h2>
						</div><!-- .site-branding -->

						<p>Components is a library of <strong>shareable, reusable patterns</strong> for WordPress themes. Instead of starting from scratch, mix and match from a collection of pre-made components to build your own <strong>custom starter theme</strong>.</p>

						<p>If you&rsquo;re just starting out, it'll get you <strong>booted up</strong> without needing to reinvent the wheel or write a lot of custom code. If you're an experienced theme developer, you&rsquo;ll find <strong>well-organized, easy-to use code</strong> that you can remix to your heart's delight!</p>
					</div><!-- .intro-content -->
				</div><!-- .content-wrapper -->

			</div><!-- .wrap -->
		</section><!-- #intro -->

		<section id="types" role="main">
			<div class="wrap">
				<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/spotlight.svg' ); ?>
				<h2>Let&rsquo;s build a theme!</h2>

				<div class="theme-slider">
					<div class="theme-type">
						<div class="theme-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/robot-modern.png' ?>"?>
						</div>
						<div class="theme-text">
							<h3>Modern blog</h3>
							<p>You think the world could be a little bit less cluttered. You like clean lines, simple shapes, and contemporary design. You want the focus to be on your content, not a lot of other stuff. With a single-column layout, a large featured image, and a slide-out panel for widgets and navigation, a modern blog is the perfect fit.</p>
							<a href="#" class="button">Build Theme!</a>
						</div>
					</div><!-- .theme-type -->

					<div class="theme-type">
						<div class="theme-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/robot-classic.png' ?>"?>
						</div>
						<div class="theme-text">
							<h3>Classic blog</h3>
							<p>Maybe you prefer the classics. Austen. Dickens. AC/DC. A classic blog is your perfect match. Great for food blogs, schools, or anyone else who has a lot of content to display in a sidebar, a classic blog features widgets in sidebar, just like you remember.</p>
							<a href="#" class="button">Build Theme!</a>
						</div>
					</div><!-- .theme-type -->

					<div class="theme-type">
						<div class="theme-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/robot-magazine.png' ?>"?>
						</div>
						<div class="theme-text">
							<h3>Magazine</h3>
							<p>Stop the presses! A magazine theme is ideal for showcasing content and images in a dynamic way. This theme features a front-page template with a grid of featured images, and a two-column blog layout that displays excerpts for added interest.</p>
							<a href="#" class="button">Build Theme!</a>
						</div>
					</div><!-- .theme-type -->

					<div class="theme-type">
						<div class="theme-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/robot-portfolio.png' ?>"?>
						</div>
						<div class="theme-text">
							<h3>Portfolio</h3>
							<p>If you're the creative type, this is the theme package for you. Image-focused, the portfolio layout uses a portfolio custom post type to easily keep your portfolio items separate from regular posts. It features a gridded portfolio layout, a simple one-column blog template, and a large featured image header.</p>
							<a href="#" class="button">Build Theme!</a>
						</div>
					</div><!-- .theme-type -->

					<div class="theme-type">
						<div class="theme-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/robot-business.png' ?>"?>
						</div>
						<div class="theme-text">
							<h3>Business</h3>
							<p>You've got a million things to worry about; don't let your theme be another. A business starter theme comes with a front page template featuring a custom header, prominent testimonials, and a custom content area. Testimonials can be displayed throughout the theme to add authenticity to your business.</p>
							<a href="#" class="button">Build Theme!</a>
						</div>
					</div><!-- .theme-type -->
				</div><!-- .theme-slider -->
				<div class="slider-nav">
					<div class="slider-nav-bg"></div>
				</div>
			</div><!-- .wrap -->
		</section><!-- #types -->

		<section id="download-all" role="main">
			<div class="wrap">
				<?php echo file_get_contents( esc_url( get_template_directory_uri() ) . '/assets/img/gear.svg' ); ?>
				<h4>I want it all!</h4>
				<p>Can't decide? Want to concoct your own starter theme? Here you go!</p>
				<a href="#" class="button">Download everything!</a>
			</div>
		</section>


		<section id="extra-info" role="main">
			<div class="wrap">
				<div class="col">
					<h2>What's in the box?</h2>
					<p>Right now, we're offering five different base themes. A little later, you'll be able to mix up your own custom theme, on the fly. Every Components package comes with:</p>
					<ul>
						<li>Design-agnostic layout patterns</li>
						<li>Well-organised SCSS</li>
						<li>Mobile-first layouts</li>
						<li>Mobile and desktop menus</li>
					</ul>
				</div>

				<div class="col">
					<h2>Want to contribute?</h2>
					<p>Components is still a new project, and we're looking for your input! Have a great pattern you'd like to share? Want to add a new feature to your themes? Found a bug in the code? Head over to the <a href="https://github.com/Automattic/theme-pattern-library">GitHub repo</a>!</p>
				</div>
			</div><!-- .wrap -->
		</section><!-- #extra-info -->

	</div><!-- #primary -->

<?php get_footer(); ?>
