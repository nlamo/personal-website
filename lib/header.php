<?php

/**
 * Output the header.
 * 
 * @param string $page_name The name of the page.
 * @return void
 */
class Header {
	function __construct( $page_name = 'Default' ) {

		$page_name = strtolower( $page_name );

		$about = $page_name === 'about' ? 'current-item' : 'item';
		$contact = $page_name === 'contact' ? 'current-item' : 'item';

		printf(
			<<<'HTML'
				<header>
					<nav class="navigation">
						<div class="header-name">
							<a href="index.php">
								nicholas lamothe
							</a>
						</div>
						<div class="nav-list">
							<ul>
								<li>
									<a href="about.php" class="%1$s">
										about
									</a>
								</li>
								<li>
									<a href="contact.php" class="%2$s">
										contact
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</header>
			HTML
			, $about
			, $contact
		);
	}
}
