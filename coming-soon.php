<?php
/**
 * Hard-coded coming soon page.
 *
 * @package AspasiaTerra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'aspasia-coming-page' ); ?>>
<?php wp_body_open(); ?>
<main class="aspasia-coming">
	<div class="aspasia-coming__content">
		<img src="https://aspasiaterra.com/wp-content/uploads/2026/03/logo_son.png" alt="Aspasia Terra Logo" class="aspasia-coming__logo" loading="eager" decoding="async">

		<h1 class="aspasia-coming__title">Launching<br>soon...</h1>

		<p class="aspasia-coming__sub">
			We are taking our time to<br>weave something special.
		</p>

		<form class="aspasia-coming__form" id="waitlistForm" action="https://docs.google.com/forms/d/e/1FAIpQLScYIINNaPCJbS6zWJnQPFsCvM0p57YNqOLbFiNFPPkVYkt1yQ/formResponse" method="POST" target="hidden_iframe">
			<div class="aspasia-coming__inputWrap">
				<input class="aspasia-coming__input" id="waitlistEmail" name="entry.1104247183" type="email" placeholder="Enter your email" aria-label="Email address" required>

				<button class="aspasia-coming__button" id="waitlistSubmit" type="submit" aria-label="Submit">
					<span class="arrow">→</span>
				</button>
			</div>
		</form>

		<iframe name="hidden_iframe" class="aspasia-coming__iframe"></iframe>

		<p class="aspasia-coming__message" id="waitlistMessage"></p>

		<p class="aspasia-coming__socialLabel">Spread the word</p>

		<div class="aspasia-coming__socials">
			<a href="https://www.instagram.com/aspasiaterra" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7Zm5 3.5A5.5 5.5 0 1 1 6.5 13 5.5 5.5 0 0 1 12 7.5Zm0 2A3.5 3.5 0 1 0 15.5 13 3.5 3.5 0 0 0 12 9.5Zm6-3.25a1.25 1.25 0 1 1-1.25 1.25A1.25 1.25 0 0 1 18 6.25Z"></path>
				</svg>
			</a>

			<a href="https://www.tiktok.com/@aspasia.terra" target="_blank" rel="noopener noreferrer" aria-label="TikTok">
				<svg viewBox="0 0 24 24" aria-hidden="true">
					<path d="M14 3c.2 1.7 1 3 2.2 4 1.1.9 2.4 1.4 3.8 1.5v3a8.7 8.7 0 0 1-4-.9v5.5a5.6 5.6 0 1 1-5.6-5.6c.3 0 .7 0 1 .1v3.1a2.6 2.6 0 1 0 1.6 2.4V3H14Z"></path>
				</svg>
			</a>
		</div>
	</div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('waitlistForm');
	const message = document.getElementById('waitlistMessage');
	const submit = document.getElementById('waitlistSubmit');

	if (!form || !message || !submit) {
		return;
	}

	form.addEventListener('submit', function () {
		submit.disabled = true;

		setTimeout(function () {
			const isTr = (document.documentElement.lang || '').toLowerCase().startsWith('tr');
			message.textContent = isTr ? 'Mail kaydı başarılı!' : 'Email saved successfully!';
			message.classList.remove('is-error');
			message.classList.add('is-success');
			submit.disabled = false;
		}, 150);
	});
});
</script>
<?php wp_footer(); ?>
</body>
</html>
