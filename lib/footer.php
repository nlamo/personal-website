<?php

/**
 * Output the footer.
 */
class Footer
{
	function __construct()
	{
		printf(
			<<<HTML
			   <footer>
					<div class="footer-container">
						<div class="link-container">
							<div class="link">
								<a href="https://www.linkedin.com/in/nicholas-lamothe/" target="_blank">
									<img src="img/linkedin_logo.png">
								</a>
							</div>
							<div class="link">
								<a href="https://github.com/nlamo/" target="_blank">
									<img src="img/github_logo.png">
								</a>
							</div>
						</div>
						<div class="copyright-overlay">
							&copy; <span id="current-year"></span> Nicholas LaMothe
						</div>
					</div>
				</footer>
			HTML
		);
	}
}
