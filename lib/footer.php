<?php

/**
 * Output the footer.
 */
class Footer {
	function __construct() {
		printf(
			<<<HTML
			   <footer>
					<div class="footer-container">
						<a href="https://www.linkedin.com/in/nicholas-lamothe/" target="_blank">
							<img src="img/linkedin_logo.png">
						</a>
						<a href="https://github.com/nlamo/" target="_blank">
							<img src="img/github_logo.png">
						</a>

						<div class="copyright-overlay">
							&copy; <span id="current-year"></span> Nicholas LaMothe
						</div>
					</div>
				</footer>
			HTML
		);
	}
}
