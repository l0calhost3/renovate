<?php

$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'projects', 'contact'];

if (!in_array($page, $allowedPages, true)) {
		$page = 'home';
}

$siteTitle = [
		'home' => 'JDM Renovations | Premium Renovations',
		'projects' => 'JDM Renovations | Projects',
		'contact' => 'JDM Renovations | Contact',
][$page];

$siteDescription = 'Premium renovation work with bold design, clear structure, and a future-ready PHP foundation.';

$nav = [
		'home' => 'Home',
		'projects' => 'Projects',
		'contact' => 'Contact',
];

$stats = [
		['label' => 'Years experience', 'value' => '10+'],
		['label' => 'Completed jobs', 'value' => '200+'],
		['label' => 'Client satisfaction', 'value' => '100%'],
		['label' => 'Always reachable', 'value' => '24/7'],
];

$services = [
		[
				'title' => 'Bathrooms',
				'text' => 'End-to-end bathroom transformations with premium finishes.',
				'tag' => 'Bath',
		],
		[
				'title' => 'Tiling',
				'text' => 'Precise tile layouts, clean lines, and sharp details.',
				'tag' => 'Tile',
		],
		[
				'title' => 'Electrical work',
				'text' => 'Safe, tidy electrical upgrades for modern interiors.',
				'tag' => 'Power',
		],
		[
				'title' => 'Plumbing',
				'text' => 'Reliable plumbing and sanitary installs built to last.',
				'tag' => 'Flow',
		],
];

$projectCategories = [
		'all' => 'All projects',
		'bathroom' => 'Bathrooms',
		'tile' => 'Tiling',
		'electro' => 'Electrical',
		'plumbing' => 'Plumbing',
];

$projects = [
	['category' => 'bathroom', 'title' => 'Modern bathroom renovation', 'description' => 'A calm, bright bathroom with premium tile alignment and a clean walk-in layout.', 'image' => 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Modern bathroom renovation'],
	['category' => 'tile', 'title' => 'Luxury tile work', 'description' => 'Large-format tiles with sharp seams and a polished, hotel-like finish.', 'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Luxury tile work'],
	['category' => 'tile', 'title' => 'Kitchen tiling', 'description' => 'Straight tile lines and subtle contrast for a sharper interior rhythm.', 'image' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Kitchen tiling'],
	['category' => 'bathroom', 'title' => 'Warm bathroom interior', 'description' => 'A warmer bathroom palette with soft lighting and quiet textures.', 'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Warm bathroom interior'],
	['category' => 'bathroom', 'title' => 'Bathroom floor renovation', 'description' => 'Floor-first planning with durable finishes and a solid visual base.', 'image' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Bathroom floor renovation'],
	['category' => 'plumbing', 'title' => 'Plumbing installation', 'description' => 'Reliable plumbing work hidden neatly behind a finished wall layout.', 'image' => 'https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Plumbing installation'],
	['category' => 'electro', 'title' => 'Electrical cabinet upgrade', 'description' => 'An upgraded board with better order, safety, and future service access.', 'image' => 'https://images.unsplash.com/photo-1502005097973-6a7082348e28?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Electrical cabinet upgrade'],
	['category' => 'electro', 'title' => 'Hidden lighting', 'description' => 'Subtle lighting details that make the room feel more finished and more expensive.', 'image' => 'https://images.unsplash.com/photo-1513694203232-719a280e022f?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Hidden lighting'],
	['category' => 'plumbing', 'title' => 'Pipework renovation', 'description' => 'Practical pipework that disappears into a cleaner and calmer interior.', 'image' => 'https://images.unsplash.com/photo-1523413459377-9c2c0e9f5d9e?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Pipework renovation'],
	['category' => 'bathroom', 'title' => 'Walk-in shower bathroom', 'description' => 'Open shower composition with clear geometry and a luxury feel.', 'image' => 'https://images.unsplash.com/photo-1552321554-5fefe8c9ef14?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Walk-in shower bathroom'],
	['category' => 'tile', 'title' => 'Modern tile interior', 'description' => 'A more expressive tile scene with a balanced, modern tone.', 'image' => 'https://images.unsplash.com/photo-1560184897-ae75f418493e?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Modern tile interior'],
	['category' => 'electro', 'title' => 'Electrical detail', 'description' => 'Close-up electrical finish detail with a neat, controlled look.', 'image' => 'https://images.unsplash.com/photo-1527576539890-dfa815648363?auto=format&fit=crop&w=1400&q=80', 'alt' => 'Electrical detail'],
];

$process = [
		['step' => '01', 'title' => 'Consultation', 'text' => 'We define the goal, the room, and the right scope quickly.'],
		['step' => '02', 'title' => 'Build', 'text' => 'We execute the job cleanly, with discipline and visual care.'],
		['step' => '03', 'title' => 'Finish', 'text' => 'We deliver a finished result that feels calm and premium.'],
];

$testimonials = [
		['quote' => 'The work felt organized and the final look was much better than expected.', 'name' => 'Private client'],
		['quote' => 'Clear communication, neat execution, and a truly premium finish.', 'name' => 'Renovation owner'],
];

function current_page(string $page, string $target): bool
{
		return $page === $target;
}

function nav_link(string $label, string $target, string $page): string
{
		$active = current_page($page, $target) ? ' is-active' : '';
		return sprintf('<a class="nav-link%s" href="renovate.php?page=%s">%s</a>', $active, htmlspecialchars($target, ENT_QUOTES), htmlspecialchars($label, ENT_QUOTES));
}

function render_header(string $page, string $siteTitle, string $siteDescription, array $nav): void
{
		?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= htmlspecialchars($siteTitle, ENT_QUOTES) ?></title>
	<meta name="description" content="<?= htmlspecialchars($siteDescription, ENT_QUOTES) ?>" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@500;600;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="style/style.css" />
</head>
<body class="page-<?= htmlspecialchars($page, ENT_QUOTES) ?>">
	<div class="page-shell">
		<header class="site-header">
			<a class="brand" href="renovate.php?page=home" aria-label="JDM Renovations home">
				<img src="images/logo.png" alt="JDM Renovations logo" class="brand-logo" />
			</a>
			<button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false">
				<span></span><span></span><span></span>
			</button>
			<nav class="site-nav" id="site-nav">
				<?= nav_link($nav['home'], 'home', $page) ?>
				<?= nav_link($nav['projects'], 'projects', $page) ?>
				<?= nav_link($nav['contact'], 'contact', $page) ?>
			</nav>
			<a class="header-cta" href="renovate.php?page=contact">Request a quote</a>
		</header>
		<?php
}

function render_footer(): void
{
		?>
		<footer class="site-footer">
			<div>
				<img src="images/logo.png" alt="JDM Renovations logo" class="footer-logo" />
				<p>Premium renovation work built for future expansion.</p>
			</div>
			<div>
				<strong>Contact</strong>
				<a href="tel:+31684351624">+31 684351624</a>
				<a href="mailto:jdmgroep@gmail.com">jdmgroep@gmail.com</a>
			</div>
			<div>
				<strong>Location</strong>
				<span>Holland</span>
				<span>Available for private and commercial work</span>
			</div>
		</footer>
	</div>
	<script src="script/script.js"></script>
</body>
</html>
		<?php
}

render_header($page, $siteTitle, $siteDescription, $nav);

if ($page === 'home') {
		?>
		<main class="main-content">
			<section class="hero-block">
				<div class="hero-copy reveal">
					<p class="eyebrow">Renovations with edge</p>
					<h1>Bold renovation design with a clean PHP structure.</h1>
					<p class="lead">A future-ready site for JDM Renovations: strong visuals now, database-ready later.</p>
					<div class="hero-actions">
						<a class="button button-primary" href="renovate.php?page=projects">View projects</a>
						<a class="button button-secondary" href="renovate.php?page=contact">Contact us</a>
					</div>
				</div>
				<div class="hero-panel reveal">
					<div class="hero-panel-card">
						<span>Featured finish</span>
						<strong>Luxury interiors</strong>
					</div>
				</div>
			</section>

			<section class="stats-strip reveal">
				<?php foreach ($stats as $stat): ?>
					<article>
						<strong><?= htmlspecialchars($stat['value'], ENT_QUOTES) ?></strong>
						<span><?= htmlspecialchars($stat['label'], ENT_QUOTES) ?></span>
					</article>
				<?php endforeach; ?>
			</section>

			<section class="about-grid">
				<div class="about-text reveal">
					<p class="eyebrow">Why JDM</p>
					<h2>High-impact presentation, simple future maintenance.</h2>
					<p>Everything is now organized as PHP data and reusable layout blocks, so you can plug in a database later without rebuilding the whole site.</p>
				</div>
				<div class="about-visual reveal"></div>
			</section>

			<section class="services-grid">
				<?php foreach ($services as $service): ?>
					<article class="service-card reveal">
						<span class="service-tag"><?= htmlspecialchars($service['tag'], ENT_QUOTES) ?></span>
						<h3><?= htmlspecialchars($service['title'], ENT_QUOTES) ?></h3>
						<p><?= htmlspecialchars($service['text'], ENT_QUOTES) ?></p>
					</article>
				<?php endforeach; ?>
			</section>

			<section class="process-grid">
				<?php foreach ($process as $item): ?>
					<article class="process-card reveal">
						<span><?= htmlspecialchars($item['step'], ENT_QUOTES) ?></span>
						<h3><?= htmlspecialchars($item['title'], ENT_QUOTES) ?></h3>
						<p><?= htmlspecialchars($item['text'], ENT_QUOTES) ?></p>
					</article>
				<?php endforeach; ?>
			</section>

			<section class="cta-banner reveal">
				<div>
					<p class="eyebrow">Ready when you are</p>
					<h2>Let us turn the next renovation into a clean, premium result.</h2>
				</div>
				<a class="button button-primary" href="renovate.php?page=contact">Start a project</a>
			</section>
		</main>
		<?php
}

if ($page === 'projects') {
		?>
		<main class="main-content projects-page">
			<section class="page-hero reveal">
				<p class="eyebrow">Projects</p>
				<h1>Photo-first filtering for real work samples.</h1>
				<p class="lead">All projects show every photo by default. Click a category and only that photo set stays visible.</p>
			</section>

			<section class="filter-row reveal" aria-label="Project filters">
				<button class="filter-chip is-active" type="button" data-filter="all">Alle projecten</button>
				<button class="filter-chip" type="button" data-filter="bathroom">Badkamers</button>
				<button class="filter-chip" type="button" data-filter="tile">Tegelwerk</button>
				<button class="filter-chip" type="button" data-filter="electro">Elektra</button>
				<button class="filter-chip" type="button" data-filter="plumbing">Loodgieterswerk</button>
			</section>

			<section class="project-grid reveal" data-project-grid>
				<?php foreach ($projects as $project): ?>
					<button
						type="button"
						class="project-card"
						data-category="<?= htmlspecialchars($project['category'], ENT_QUOTES) ?>"
						data-title="<?= htmlspecialchars($project['title'], ENT_QUOTES) ?>"
						data-description="<?= htmlspecialchars($project['description'], ENT_QUOTES) ?>"
						data-image="<?= htmlspecialchars($project['image'], ENT_QUOTES) ?>"
						data-alt="<?= htmlspecialchars($project['alt'], ENT_QUOTES) ?>"
					>
						<img src="<?= htmlspecialchars($project['image'], ENT_QUOTES) ?>" alt="<?= htmlspecialchars($project['alt'], ENT_QUOTES) ?>" />
					</button>
				<?php endforeach; ?>
			</section>

			<div class="filter-status reveal" aria-live="polite">Show all projects</div>

			<div class="project-modal" hidden>
				<div class="project-modal-backdrop" data-close-modal></div>
				<div class="project-modal-card" role="dialog" aria-modal="true" aria-labelledby="project-modal-title">
					<button class="project-modal-close" type="button" data-close-modal aria-label="Close project details">×</button>
					<img class="project-modal-image" src="" alt="" />
					<div class="project-modal-copy">
						<p class="eyebrow">Project detail</p>
						<h2 id="project-modal-title"></h2>
						<p class="project-modal-description"></p>
					</div>
				</div>
			</div>
		</main>
		<?php
}

if ($page === 'contact') {
		?>
		<main class="main-content contact-page">
			<section class="page-hero reveal">
				<p class="eyebrow">Contact</p>
				<h1>Tell us what you want to build next.</h1>
				<p class="lead">This page is ready for a future form submission to a database or CRM.</p>
			</section>

			<section class="contact-layout">
				<div class="contact-panel reveal">
					<h2>Direct contact</h2>
					<a href="tel:+31684351624">+31 684351624</a>
					<a href="mailto:jdmgroep@gmail.com">jdmgroep@gmail.com</a>
					<span>Holland</span>
				</div>
				<form class="contact-form reveal">
					<label>
						Name
						<input type="text" name="name" placeholder="Your name" />
					</label>
					<label>
						Email
						<input type="email" name="email" placeholder="Your email" />
					</label>
					<label>
						Message
						<textarea name="message" rows="6" placeholder="What do you want to build?"></textarea>
					</label>
					<button class="button button-primary" type="submit">Send request</button>
				</form>
			</section>

			<section class="testimonial-grid">
				<?php foreach ($testimonials as $testimonial): ?>
					<blockquote class="testimonial-card reveal">
						<p><?= htmlspecialchars($testimonial['quote'], ENT_QUOTES) ?></p>
						<cite><?= htmlspecialchars($testimonial['name'], ENT_QUOTES) ?></cite>
					</blockquote>
				<?php endforeach; ?>
			</section>
		</main>
		<?php
}

render_footer();

