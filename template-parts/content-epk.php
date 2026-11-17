<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ossy_slot( $label, $class = '' ) {
	printf(
		'<div class="%s" role="img" aria-label="%s"><span>%s</span></div>',
		esc_attr( trim( 'slot ' . $class ) ),
		esc_attr( $label ),
		esc_html( $label )
	);
}

function ossy_img( $file, $alt, $class = '' ) {
	printf(
		'<figure class="epk-frame %s"><img src="%s" alt="%s" loading="lazy" decoding="async"></figure>',
		esc_attr( $class ),
		esc_url( get_template_directory_uri() . '/assets/img/' . $file ),
		esc_attr( $alt )
	);
}
?>

<nav class="epk-nav" data-epk-nav aria-label="EPK sections">
	<a href="#cover" class="is-active">Cover</a>
	<a href="#bio">Bio</a>
	<a href="#music">Music</a>
	<a href="#live">Live</a>
	<a href="#social">Social</a>
	<a href="#photos">Photos</a>
	<a href="#dates">Dates</a>
	<a href="#contact">Contact</a>
</nav>

<main>
	<section class="slide slide--cover" id="cover">
		<div class="cover-copy">
			<p class="kicker">Meet the artist</p>
			<h1>Ossy Brown</h1>
			<p class="lede">Nigerian-born, UK-based recording artist, producer and creative director. Afro-R&amp;B, Afrobeats and contemporary African music from London.</p>
		</div>
		<div class="cover-tiles">
			<?php ossy_img( 'sunglasses-peek.jpg', 'Ossy Brown', 'epk-frame--hero' ); ?>
		</div>
	</section>

	<section class="slide slide--quote" id="quote">
		<svg class="quote-mark" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M7.2 18c-2.4 0-4.2-1.9-4.2-4.4 0-3.4 2.5-6.6 6-8.3l.8 1.5C7.6 8 6.2 9.6 6.1 11.4c.4-.3 1-.4 1.6-.4 1.9 0 3.3 1.4 3.3 3.3S9.6 18 7.2 18zm9.6 0c-2.4 0-4.2-1.9-4.2-4.4 0-3.4 2.5-6.6 6-8.3l.8 1.5c-2.2 1.2-3.6 2.8-3.7 4.6.4-.3 1-.4 1.6-.4 1.9 0 3.3 1.4 3.3 3.3S18.9 18 16.8 18z"/></svg>
		<blockquote>
			<p>Ossy Brown’s work sits at the intersection of songwriting, live performance and large-scale entertainment production — from independent albums to the Brymo UK Tour 2026.</p>
			<cite>Artist profile</cite>
		</blockquote>
	</section>

	<section class="slide slide--bio" id="bio">
		<div class="bio-copy">
			<h2>Bio</h2>
			<p>Ossy Brown is a Nigerian-born, UK-based recording artist, songwriter, producer and creative professional. His practice is rooted in Afro-R&amp;B, Afrobeats and contemporary African music, with a career dating back to 2008.</p>
			<p>He has released the studio albums <strong>LOVE LIKE ME</strong> and <strong>LED</strong>, alongside commercially distributed singles, and has performed at Shaw Theatre and EartH in London, and Band on the Wall in Manchester.</p>
			<p>He is Founder and Director of Crystalcity Entertainment Ltd, Founder of Crystalcity Records, and Executive Producer and Lead Organiser of the Brymo UK Tour 2026. He also hosts Vibe &amp; Chill London and Show Down with Ossy Brown.</p>
			<p class="meta-line">London, United Kingdom · BMI songwriter &amp; publisher member · <a href="https://www.ossybrown.com">ossybrown.com</a></p>
		</div>
		<div class="bio-mosaic">
			<?php ossy_img( 'park-bench.jpg', 'Ossy Brown seated on a park bench in London' ); ?>
			<?php ossy_img( 'denim-portrait.jpg', 'Ossy Brown in a denim jacket' ); ?>
			<?php ossy_img( 'mini-cooper.jpg', 'Ossy Brown with a green Mini Cooper' ); ?>
			<?php ossy_img( 'live-red-full.jpg', 'Ossy Brown live on stage' ); ?>
			<?php ossy_img( 'led-photo.jpg', 'Ossy Brown LED campaign photo' ); ?>
			<?php ossy_img( 'sunglasses-hold.jpg', 'Ossy Brown holding his glasses' ); ?>
		</div>
	</section>

	<section class="slide slide--music" id="music">
		<h2>My Music</h2>
		<p class="section-intro">Afro-R&amp;B and Afrobeats. Listen on Spotify or YouTube.</p>
		<div class="listen-bar">
			<a class="listen-btn" href="https://open.spotify.com/artist/0EhmR1bezRzSclqzyebS2D" rel="noopener noreferrer" target="_blank" aria-label="Listen on Spotify">
				<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/></svg>
				Spotify
			</a>
			<a class="listen-btn" href="https://www.youtube.com/@OssyBrown" rel="noopener noreferrer" target="_blank" aria-label="Watch on YouTube">
				<svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path fill="currentColor" d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
				YouTube
			</a>
		</div>
		<div class="music-grid">
			<article class="embed-card">
				<p class="embed-card__title"><a href="https://open.spotify.com/album/4TCTFtMzqdC98CTgsuP9dU" rel="noopener noreferrer" target="_blank">LOVE LIKE ME</a></p>
				<p class="embed-card__kind">Studio album</p>
				<a href="https://open.spotify.com/album/4TCTFtMzqdC98CTgsuP9dU" rel="noopener noreferrer" target="_blank">
					<?php ossy_img( 'love-like-me.jpg', 'Love Like Me album cover — Ossy Brown', 'epk-frame--square' ); ?>
				</a>
			</article>
			<article class="embed-card">
				<p class="embed-card__title"><a href="https://open.spotify.com/album/2qxaTHkrVrelfrmW5Nvmjo" rel="noopener noreferrer" target="_blank">LED</a></p>
				<p class="embed-card__kind">Studio album</p>
				<a href="https://open.spotify.com/album/2qxaTHkrVrelfrmW5Nvmjo" rel="noopener noreferrer" target="_blank">
					<?php ossy_img( 'led-cover.jpg', 'LED album cover — Ossy Brown', 'epk-frame--square' ); ?>
				</a>
			</article>
			<article class="embed-card">
				<p class="embed-card__title"><a href="https://open.spotify.com/track/7fhRtVUA1b9iEquOlzHuhi" rel="noopener noreferrer" target="_blank">NUMBER ONE</a></p>
				<p class="embed-card__kind">Single</p>
				<a href="https://open.spotify.com/track/7fhRtVUA1b9iEquOlzHuhi" rel="noopener noreferrer" target="_blank">
					<?php ossy_img( 'number-one.jpg', 'NUMBER ONE artwork — Ossy Brown', 'epk-frame--square' ); ?>
				</a>
			</article>
		</div>
		<div class="spotify-embed">
			<iframe
				title="Ossy Brown on Spotify"
				src="https://open.spotify.com/embed/artist/0EhmR1bezRzSclqzyebS2D?utm_source=generator"
				allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
				loading="lazy"
			></iframe>
		</div>
	</section>

	<section class="slide slide--live" id="live">
		<h2>Live Performance Highlight</h2>
		<p class="section-intro">Shaw Theatre · EartH · Band on the Wall. Live with Reekado Banks, London, May 2025.</p>
		<div class="video-embed">
			<iframe
				src="https://www.youtube-nocookie.com/embed/x2bErZsLfJ8"
				title="Ossy Brown live performance"
				allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
				allowfullscreen
				loading="lazy"
				referrerpolicy="strict-origin-when-cross-origin"
			></iframe>
		</div>
		<div class="live-gallery">
			<?php ossy_img( 'live-reekado.jpg', 'Ossy Brown performing with Reekado Banks, London, May 2025', 'epk-frame--land span-2' ); ?>
			<?php ossy_img( 'live-red-full.jpg', 'Ossy Brown live on stage in a red jacket', 'epk-frame--tall' ); ?>
			<?php ossy_img( 'live-red-mic.jpg', 'Ossy Brown singing live with microphone', 'epk-frame--tall' ); ?>
			<?php ossy_img( 'live-white-shirt.jpg', 'Ossy Brown live at the microphone', 'epk-frame--land' ); ?>
			<?php ossy_img( 'live-red-stool.jpg', 'Ossy Brown performing live, seated', 'epk-frame--land' ); ?>
		</div>
	</section>

	<section class="slide slide--social" id="social">
		<h2>Social Media Presence</h2>
		<ul class="social-grid">
			<li>
				<a href="https://www.instagram.com/ossybrown/" rel="noopener noreferrer" target="_blank" aria-label="Instagram">
					<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4zm0 2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H7zm5 2.8A4.2 4.2 0 1 1 7.8 12 4.2 4.2 0 0 1 12 7.8zm0 2A2.2 2.2 0 1 0 14.2 12 2.2 2.2 0 0 0 12 9.8zM17.4 6.3a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"/></svg>
				</a>
			</li>
			<li>
				<a href="https://www.tiktok.com/@ossybrown" rel="noopener noreferrer" target="_blank" aria-label="TikTok">
					<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M14.8 3h2.2a6.6 6.6 0 0 0 4 3.8v2.3a8.7 8.7 0 0 1-4-1.1v7.4A6.6 6.6 0 1 1 10 9.1v2.4a4.2 4.2 0 1 0 3 4V3z"/></svg>
				</a>
			</li>
			<li>
				<a href="https://x.com/ossybrown" rel="noopener noreferrer" target="_blank" aria-label="X">
					<svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path fill="currentColor" d="M14.7 10.3 22 2h-2.2l-6.3 7.1L8.4 2H2.2l7.8 11.1L2 22h2.2l6.9-7.8L15.6 22h6.2l-7.1-11.7zm-2.4 2.8-.8-1.1-6.3-8.7h2.7l5.1 7 0.8 1.1 6.6 9.1h-2.7l-5.4-7.4z"/></svg>
				</a>
			</li>
			<li>
				<a href="https://www.facebook.com/OssyBrown" rel="noopener noreferrer" target="_blank" aria-label="Facebook">
					<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H8v3h2v7h3v-7h2.6l.4-3H13v-2c0-.6.4-1 1-1z"/></svg>
				</a>
			</li>
			<li>
				<a href="https://www.youtube.com/@OssyBrown" rel="noopener noreferrer" target="_blank" aria-label="YouTube">
					<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M23 12.2s0-3.3-.4-4.8c-.2-1.1-1.1-2-2.2-2.2C18.6 4.8 12 4.8 12 4.8s-6.6 0-8.4.4C2.5 5.4 1.6 6.3 1.4 7.4.9 8.9.9 12.2.9 12.2s0 3.3.4 4.8c.2 1.1 1.1 2 2.2 2.2 1.8.4 8.4.4 8.4.4s6.6 0 8.4-.4c1.1-.2 2-1.1 2.2-2.2.4-1.5.5-4.8.5-4.8zM9.8 15.5V8.9l6.4 3.3-6.4 3.3z"/></svg>
				</a>
			</li>
		</ul>
	</section>

	<section class="slide slide--photos" id="photos">
		<h2>Press Photos</h2>
		<div class="photo-steps">
			<article class="photo-step">
				<div class="photo-step__copy">
					<h3>Studio</h3>
					<p>Close portrait, amber lenses. Use this for listings, bios and interview headers.</p>
				</div>
				<?php ossy_img( 'studio-headshot.jpg', 'Ossy Brown studio headshot', 'epk-frame--wide' ); ?>
			</article>
			<article class="photo-step">
				<div class="photo-step__copy">
					<h3>Live</h3>
					<p>Ossy Brown with Reekado Banks, London, May 2025.</p>
				</div>
				<?php ossy_img( 'live-reekado.jpg', 'Ossy Brown and Reekado Banks performing in London', 'epk-frame--land' ); ?>
			</article>
			<article class="photo-step">
				<div class="photo-step__copy">
					<h3>LED</h3>
					<p>Campaign still for the LED album.</p>
				</div>
				<?php ossy_img( 'led-photo.jpg', 'Ossy Brown LED campaign photo', 'epk-frame--land' ); ?>
			</article>
		</div>
	</section>

	<section class="slide slide--dates" id="dates">
		<h2>Selected appearances</h2>
		<p class="section-intro">Confirmed rooms from the CV. Upcoming dates sit in the empty slots.</p>
		<ol class="timeline">
			<li>
				<p class="when">London</p>
				<h3>Shaw Theatre</h3>
				<p>Selected live appearance</p>
			</li>
			<li>
				<p class="when">London</p>
				<h3>EartH</h3>
				<p>Selected live appearance</p>
			</li>
			<li>
				<p class="when">Manchester</p>
				<h3>Band on the Wall</h3>
				<p>Selected live appearance</p>
			</li>
			<li class="is-open">
				<p class="when">Date TBA</p>
				<h3>Upcoming show</h3>
				<p>City · venue · ticket link</p>
			</li>
			<li class="is-open">
				<p class="when">2026</p>
				<h3>Brymo UK Tour</h3>
				<p>Multi-city dates — add cities and venues</p>
			</li>
		</ol>
	</section>

	<section class="slide slide--more" id="more">
		<h2>Also producing</h2>
		<div class="more-grid">
			<article>
				<p class="kicker">Company</p>
				<h3>Crystalcity Entertainment</h3>
				<p>Artist development, live events, international touring and creative partnerships. Founder of Crystalcity Records.</p>
			</article>
			<article>
				<p class="kicker">2026</p>
				<h3>Brymo UK Tour</h3>
				<p>Executive Producer and Lead Organiser — strategy, production, marketing, partnerships and delivery.</p>
			</article>
			<article>
				<p class="kicker">Hosting</p>
				<h3>Vibe &amp; Chill · Show Down</h3>
				<p>Founder and host of Vibe &amp; Chill London. Executive Producer and Host of Show Down with Ossy Brown, two seasons.</p>
			</article>
		</div>
	</section>

	<section class="slide slide--contact" id="contact">
		<div class="contact-bg" aria-hidden="true"><?php ossy_img( 'mini-cooper.jpg', '' ); ?></div>
		<div class="contact-copy">
			<h2>Contact me</h2>
			<p>For booking inquiries, hosting and media:</p>
			<a class="email" href="mailto:info@ossybrown.com">info@ossybrown.com</a>
			<p class="phone"><a href="tel:+447933327182">+44 7933 327182</a></p>
			<p class="locale">London, United Kingdom</p>
			<ul class="social-icons">
				<li>
					<a href="https://www.instagram.com/ossybrown/" rel="noopener noreferrer" target="_blank" aria-label="Instagram">
						<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M7 3h10a4 4 0 0 1 4 4v10a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4zm0 2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H7zm5 2.8A4.2 4.2 0 1 1 7.8 12 4.2 4.2 0 0 1 12 7.8zm0 2A2.2 2.2 0 1 0 14.2 12 2.2 2.2 0 0 0 12 9.8zM17.4 6.3a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"/></svg>
					</a>
				</li>
				<li>
					<a href="https://www.tiktok.com/@ossybrown" rel="noopener noreferrer" target="_blank" aria-label="TikTok">
						<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M14.8 3h2.2a6.6 6.6 0 0 0 4 3.8v2.3a8.7 8.7 0 0 1-4-1.1v7.4A6.6 6.6 0 1 1 10 9.1v2.4a4.2 4.2 0 1 0 3 4V3z"/></svg>
					</a>
				</li>
				<li>
					<a href="https://x.com/ossybrown" rel="noopener noreferrer" target="_blank" aria-label="X">
						<svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path fill="currentColor" d="M14.7 10.3 22 2h-2.2l-6.3 7.1L8.4 2H2.2l7.8 11.1L2 22h2.2l6.9-7.8L15.6 22h6.2l-7.1-11.7zm-2.4 2.8-.8-1.1-6.3-8.7h2.7l5.1 7 0.8 1.1 6.6 9.1h-2.7l-5.4-7.4z"/></svg>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/OssyBrown" rel="noopener noreferrer" target="_blank" aria-label="Facebook">
						<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H8v3h2v7h3v-7h2.6l.4-3H13v-2c0-.6.4-1 1-1z"/></svg>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/@OssyBrown" rel="noopener noreferrer" target="_blank" aria-label="YouTube">
						<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M23 12.2s0-3.3-.4-4.8c-.2-1.1-1.1-2-2.2-2.2C18.6 4.8 12 4.8 12 4.8s-6.6 0-8.4.4C2.5 5.4 1.6 6.3 1.4 7.4.9 8.9.9 12.2.9 12.2s0 3.3.4 4.8c.2 1.1 1.1 2 2.2 2.2 1.8.4 8.4.4 8.4.4s6.6 0 8.4-.4c1.1-.2 2-1.1 2.2-2.2.4-1.5.5-4.8.5-4.8zM9.8 15.5V8.9l6.4 3.3-6.4 3.3z"/></svg>
					</a>
				</li>
				<li>
					<a href="https://www.ossybrown.com" rel="noopener noreferrer" target="_blank" aria-label="Website">
						<svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true"><path fill="currentColor" d="M12 3a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm0 2a7 7 0 0 0 0 14V5zm1.5 1.1c1.9.4 3.6 1.5 4.7 3.1H13.5V6.1zm0 5.1h5.6A7 7 0 0 1 18 14h-4.5v-2.8zm0 4.8H17a7 7 0 0 1-3.5 2.7v-2.7z"/></svg>
					</a>
				</li>
			</ul>
		</div>
	</section>
</main>
