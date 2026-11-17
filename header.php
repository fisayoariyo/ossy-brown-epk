<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Electronic press kit for Ossy Brown — Nigerian-born, UK-based recording artist, producer and creative director. Afro-R&amp;B, Afrobeats, London.">
	<script>
	(function () {
		try {
			var t = localStorage.getItem('ossy-epk-theme');
			if (!t) {
				t = window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
			}
			document.documentElement.setAttribute('data-theme', t);
		} catch (e) {
			document.documentElement.setAttribute('data-theme', 'dark');
		}
	})();
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'epk' ); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#cover">Skip to content</a>
<button type="button" class="theme-toggle" data-theme-toggle aria-label="Switch to light mode">
	<svg class="icon-moon" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12.7 2a9 9 0 1 0 9.3 11.4A7 7 0 0 1 12.7 2z"/></svg>
	<svg class="icon-sun" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 4.5a1 1 0 0 1 1-1h0a1 1 0 0 1 1 1V6a1 1 0 1 1-2 0V4.5zm0 13.5a1 1 0 0 1 1 1V21a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1zM4.5 11a1 1 0 0 1 1-1H8a1 1 0 1 1 0 2H5.5a1 1 0 0 1-1-1zm13.5 0a1 1 0 0 1 1-1H21a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1zM6.05 6.05a1 1 0 0 1 1.41 0l1.06 1.06a1 1 0 0 1-1.41 1.41L6.05 7.46a1 1 0 0 1 0-1.41zm9.43 9.43a1 1 0 0 1 1.41 0l1.06 1.06a1 1 0 1 1-1.41 1.41l-1.06-1.06a1 1 0 0 1 0-1.41zM6.05 17.95a1 1 0 0 1 1.41 0 1 1 0 0 1 0 1.41l-1.06 1.06A1 1 0 1 1 5 18.99l1.05-1.04a1 1 0 0 1 0-.01zm10.49-10.49a1 1 0 0 1 1.41 0L19 8.52A1 1 0 1 1 17.59 9.93l-1.05-1.06a1 1 0 0 1 0-1.41zM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8z"/></svg>
</button>
