<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel Blog Vue</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="Baloo &raquo; Feed" href="feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="Baloo &raquo; Comments Feed"
		href="comments/feed/index.html" />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "http:\/\/baloo.az-theme.net\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2" } };
		!function (a, b, c) { function d(a, b) { var c = String.fromCharCode; l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0); var d = k.toDataURL(); l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0); var e = k.toDataURL(); return d === e } function e(a) { var b; if (!l || !l.fillText) return !1; switch (l.textBaseline = "top", l.font = "600 32px Arial", a) { case "flag": return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b); case "emoji": return b = d([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340]), !b }return !1 } function f(a) { var c = b.createElement("script"); c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d"); for (j = Array("flag", "emoji"), c.supports = { everything: !0, everythingExceptFlag: !0 }, i = 0; i < j.length; i++)c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.everything || (h = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href="{{ asset('wp-includes/css/dist/block-library/style.minbb49.css?ver=5.2.2') }}"
		 type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href="{{ asset('wp-content/plugins/contact-form-7/includes/css/stylesbdeb.css?ver=5.1.3') }}"
		 type='text/css' media='all' />
	<link rel='stylesheet' id='baloo-googlefonts-css'
		href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A400%2C700%7COpen+Sans%3A400%2C400i&amp;subset=latin%2Clatin-ext'
		type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href="{{ asset('wp-content/themes/baloo/libs/bootstrap/bootstrapbb49.css?ver=5.2.2') }}"
		type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href="{{ asset('wp-content/themes/baloo/libs/font-awesome/css/allbb49.css?ver=5.2.2') }}"
		 type='text/css' media='all' />
    <link rel='stylesheet' id='chosen-css'
    href="{{ asset('wp-content/themes/baloo/libs/chosen/chosenbb49.css?ver=5.2.2') }}"
		type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css' 
    href="{{ asset('wp-content/themes/baloo/libs/owl/owl.carouselbb49.css?ver=5.2.2') }}"
		type='text/css' media='all' />
    <link rel='stylesheet' id='baloo-style-css'
    href="{{ asset('wp-content/themes/baloo/stylebb49.css?ver=5.2.2') }}"
     type='text/css'
		media='all' />
	<style id='baloo-style-inline-css' type='text/css'>
		body {
			color: #454545;
		}

		a {
			color: #8fb59e;
		}

		.baloo-button,
		button,
		.button,
		input[type='submit'] {
			background: #8fb59e;
		}

		.chosen-container .chosen-results li.highlighted {
			background-color: #8fb59e;
		}

		.sticky .post-title:before {
			color: #8fb59e;
		}

		.baloo-main-menu li a:hover {
			color: #8fb59e;
		}

		.baloo-pagination .nav-links .page-numbers:hover,
		.baloo-pagination .nav-links .page-numbers.current {
			background: #8fb59e;
		}

		.post-title a:hover {
			color: #8fb59e
		}

		.item-post-feature .post-cats a:hover {
			color: #8fb59e;
		}

		.widget ul li a:hover {
			color: #8fb59e;
		}

		.post-cats a {
			background: #8fb59e;
		}

		.tagcloud a:hover {
			background: #8fb59e;
			border-color: #8fb59e;
		}

		.baloo-social a:hover {
			color: #8fb59e;
		}

		.body_boxed {
			background-image: url(wp-content/uploads/2019/05/bg-body.jpg);
		}
	</style>
    <script type='text/javascript' 
    src="{{ asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp') }}"></script>
    <script type='text/javascript'
    src="{{ asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}"></script>
	<link rel='https://api.w.org/' href='wp-json/index.html' />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 5.2.2" />
	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-color: #ffffff;
		}
	</style>
</head>

<body class="home blog custom-background body_boxed">
	<div class="body-overlay"></div>
	<div class="baloo-navsidebar nav-siderbar">
		<div class="logo-navbar">
			<a href="index.html">
				<img src="wp-content/uploads/2019/05/logo.png" alt="Baloo" />
			</a>
		</div>
		<div class="main-content-navsidebar">
			<div id="baloo_about_me-3" class="widget baloo_categories_widget">
				<div class="baloo-widget-content baloo-about-me">
					<div class="about-image"><img src="wp-content/uploads/2019/05/about.jpg" alt="About image" /></div>
					<div class="about-info">
						<h4 class="widget-title">About Me</h4>
						<div class="about-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
							ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. ,,</div>
						<div class="ab-signature"><img src="wp-content/uploads/2019/05/baloo-signature.png"
								alt="Signature image" /></div>
					</div>
				</div>
			</div>
			<div id="mc4wp_form_widget-2" class="widget widget_mc4wp_form_widget">
				<h4 class="widget-title">Newsletter</h4>
				<script>(function () {
						if (!window.mc4wp) {
							window.mc4wp = {
								listeners: [],
								forms: {
									on: function (event, callback) {
										window.mc4wp.listeners.push({
											event: event,
											callback: callback
										});
									}
								}
							}
						}
					})();
				</script><!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
				<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-183" method="post" data-id="183"
					data-name="Newsletter">
					<div class="mc4wp-form-fields">
						<div class="baloo-newsletter">
							<label>Subscribe to the Baloo newsletter to receive timely updates from newsletter to
								receive timely updates from texts would hardly be possible even now.</label>
							<div class="form-newsletter">
								<input type="email" name="EMAIL" placeholder="Your email address" required />
								<button type="submit" value="Sign up">Sign up</button>
							</div>
						</div>
					</div><label style="display: none !important;">Leave this field empty if you're human: <input
							type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
							autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp"
						value="1567485454" /><input type="hidden" name="_mc4wp_form_id" value="183" /><input
						type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
					<div class="mc4wp-response"></div>
				</form><!-- / Mailchimp for WordPress Plugin -->
			</div>
			<div id="baloo_latest_posts_widget-5" class="widget baloo_latest_posts_widget">
				<h4 class="widget-title">Latest Posts</h4>
				<div class="baloo-post-widget list">

					<div class="list-post-thumb">
						<div class="post-item">
							<div class="post-format">
								<figure><img src="wp-content/uploads/2019/05/iryna-ogarkova-447661-unsplash-585x390.jpg"
										alt="21 Crazy-Fast Dessert Recipes That Crush Sugar" /></figure>
							</div>
							<div class="post-info">
								<h3 class="post-title"><a
										href="21-crazy-fast-dessert-recipes-that-crush-sugar/index.html">21 Crazy-Fast
										Dessert Recipes That Crush Sugar</a></h3>
								<div class="post-meta">
									<div class="ath-post">
										<span>by</span> admin </div>
									<div class="date-post">
										<span class="post-date">May 22, 2019</span>
									</div>
									<div class="comment-number">
										No Comments </div>
								</div>
							</div>
						</div>
						<div class="post-item">
							<div class="post-format">
								<figure><img src="wp-content/uploads/2019/05/jannis-brandt-256862-unsplash1-585x390.jpg"
										alt="How to Take the Perfect Selfie, According to a Celebrity" /></figure>
							</div>
							<div class="post-info">
								<h3 class="post-title"><a
										href="how-to-take-the-perfect-selfie-according-to-a-celebrity/index.html">How to
										Take the Perfect Selfie, According to a Celebrity</a></h3>
								<div class="post-meta">
									<div class="ath-post">
										<span>by</span> admin </div>
									<div class="date-post">
										<span class="post-date">May 22, 2019</span>
									</div>
									<div class="comment-number">
										No Comments </div>
								</div>
							</div>
						</div>
						<div class="post-item">
							<div class="post-format">
								<figure><img src="wp-content/uploads/2019/05/brooke-lark-158017-unsplash-585x390.jpg"
										alt="What to Make For Dinner Every Night This Month" /></figure>
							</div>
							<div class="post-info">
								<h3 class="post-title"><a
										href="what-to-make-for-dinner-every-night-this-month/index.html">What to Make
										For Dinner Every Night This Month</a></h3>
								<div class="post-meta">
									<div class="ath-post">
										<span>by</span> admin </div>
									<div class="date-post">
										<span class="post-date">May 22, 2019</span>
									</div>
									<div class="comment-number">
										No Comments </div>
								</div>
							</div>
						</div>
						<div class="post-item">
							<div class="post-format">
								<figure><img src="wp-content/uploads/2019/05/brooke-lark-96398-unsplash-585x390.jpg"
										alt="Self-healing Material That Can Carry Current May Advance Robotics" />
								</figure>
							</div>
							<div class="post-info">
								<h3 class="post-title"><a
										href="self-healing-material-that-can-carry-current-may-advance-robotics/index.html">Self-healing
										Material That Can Carry Current May Advance Robotics</a></h3>
								<div class="post-meta">
									<div class="ath-post">
										<span>by</span> admin </div>
									<div class="date-post">
										<span class="post-date">May 22, 2019</span>
									</div>
									<div class="comment-number">
										No Comments </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="baloo-menu-touch">
		<div class="logo-navbar">
			<a href="index.html">
				<img src="wp-content/uploads/2019/05/logo.png" alt="Baloo" />
			</a>
		</div>
		<div class="maine-menu-vertical">
			<ul id="menu-main-menu" class="baloo-main-menu">
				<li id="menu-item-133"
					class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-133 dropdown active">
					<a title="Home" href="index.html" data-toggle="dropdown" aria-haspopup="true">Home <span
							class="caret"></span></a>
					<ul role="menu" class="sub-menu">
						<li id="menu-item-136"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-136"><a
								title="Body Boxed Color"
								href="index25b0.html?layout_boxed=yes&amp;type_boxed=color">Body Boxed Color</a></li>
						<li id="menu-item-137"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137"><a
								title="Body Boxed Image"
								href="indexe59f.html?layout_boxed=yes&amp;type_boxed=image">Body Boxed Image</a></li>
						<li id="menu-item-140"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a
								title="Mixed Layout" href="index1676.html?layout=mix&amp;sidebar=no&amp;limit=8">Mixed
								Layout</a></li>
						<li id="menu-item-141"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a
								title="Mixed with Sidebar"
								href="index555f.html?layout=mix&amp;sidebar=yes&amp;limit=6">Mixed with Sidebar</a></li>
						<li id="menu-item-142"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a
								title="List Layout" href="index5dcc.html?layout=list&amp;sidebar=no&amp;limit=9">List
								Layout</a></li>
						<li id="menu-item-144"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a
								title="List width Sidebar"
								href="index0627.html?layout=list&amp;sidebar=yes&amp;limit=6">List width Sidebar</a>
						</li>
						<li id="menu-item-145"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145"><a
								title="Masonry Layout"
								href="indexd3ac.html?layout=masonry&amp;sidebar=no&amp;limit=9">Masonry Layout</a></li>
						<li id="menu-item-146"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-146"><a
								title="Masonry with Sidebar"
								href="index1435.html?layout=masonry&amp;sidebar=yes&amp;limit=9">Masonry with
								Sidebar</a></li>
						<li id="menu-item-147"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147"><a
								title="Grid Layout"
								href="index490b.html?layout=3cols_grid&amp;sidebar=no&amp;limit=9">Grid Layout</a></li>
						<li id="menu-item-148"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-148"><a
								title="Gird width Sidebar"
								href="index2567.html?layout=3cols_grid&amp;sidebar=yes&amp;limit=9">Gird width
								Sidebar</a></li>
						<li id="menu-item-149"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-149"><a
								title="Grid 2 Column Layout"
								href="index82ad.html?layout=2cols_grid&amp;sidebar=yes&amp;limit=9">Grid 2 Column
								Layout</a></li>
					</ul>
				</li>
				<li id="menu-item-150"
					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-150 dropdown">
					<a title="Post Type" href="#" data-toggle="dropdown" aria-haspopup="true">Post Type <span
							class="caret"></span></a>
					<ul role="menu" class="sub-menu">
						<li id="menu-item-155"
							class="menu-item menu-item-type-post_type menu-item-object-post menu-item-155"><a
								title="Standard Post"
								href="egyptair-flight-crashes-with-66-people-on-board-3/index.html">Standard Post</a>
						</li>
						<li id="menu-item-156"
							class="menu-item menu-item-type-post_type menu-item-object-post menu-item-156"><a
								title="Audio Post"
								href="here-are-the-15-best-bralettes-for-summer-you-can-get-for-under-200/index.html">Audio
								Post</a></li>
						<li id="menu-item-157"
							class="menu-item menu-item-type-post_type menu-item-object-post menu-item-157"><a
								title="Video Post"
								href="the-driving-forces-powering-mens-fashion-today/index.html">Video Post</a></li>
						<li id="menu-item-158"
							class="menu-item menu-item-type-post_type menu-item-object-post menu-item-158"><a
								title="Gallery Post"
								href="angelina-jolie-has-found-the-perfect-summer-office-uniform/index.html">Gallery
								Post</a></li>
					</ul>
				</li>
				<li id="menu-item-151"
					class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151"><a
						title="Lifestyle" href="category/lifestyle/index.html">Lifestyle</a></li>
				<li id="menu-item-153"
					class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-153"><a title="Travel"
						href="category/travel/index.html">Travel</a></li>
				<li id="menu-item-134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a
						title="About" href="about/index.html">About</a></li>
				<li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a
						title="Contact" href="contact/index.html">Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="main-wrapper-boxed">
		<header id="baloo-header" class="header">
			<div class="container">
				<div class="baloo-logo">
					<h1>
						<a href="index.html">
							<img src="wp-content/uploads/2019/05/logo.png" alt="Baloo" />
						</a>
					</h1>
				</div>
				<div class="header-content has_navbar">
					<div class="navbar-col navbar-left">
						<a href="javascript:void(0)" class="navbar-touch d-none d-lg-block">
							<div class="navbar-toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<a href="javascript:void(0)" class="d-lg-none menu-touch">
							<div class="navbar-toggle">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
					</div>
					<div class="navbar-main">
						<div id="nav-wrapper" class="nav-main main-menu-horizontal">
							<ul id="menu-main-menu-1" class="baloo-main-menu">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children menu-item-133 dropdown active">
									<a title="Home" href="index.html" data-toggle="dropdown" aria-haspopup="true">Home
										<span class="caret"></span></a>
									<ul role="menu" class="sub-menu">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-136">
											<a title="Body Boxed Color"
												href="index25b0.html?layout_boxed=yes&amp;type_boxed=color">Body Boxed
												Color</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137">
											<a title="Body Boxed Image"
												href="indexe59f.html?layout_boxed=yes&amp;type_boxed=image">Body Boxed
												Image</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140">
											<a title="Mixed Layout"
												href="index1676.html?layout=mix&amp;sidebar=no&amp;limit=8">Mixed
												Layout</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141">
											<a title="Mixed with Sidebar"
												href="index555f.html?layout=mix&amp;sidebar=yes&amp;limit=6">Mixed with
												Sidebar</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142">
											<a title="List Layout"
												href="index5dcc.html?layout=list&amp;sidebar=no&amp;limit=9">List
												Layout</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144">
											<a title="List width Sidebar"
												href="index0627.html?layout=list&amp;sidebar=yes&amp;limit=6">List width
												Sidebar</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-145">
											<a title="Masonry Layout"
												href="indexd3ac.html?layout=masonry&amp;sidebar=no&amp;limit=9">Masonry
												Layout</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-146">
											<a title="Masonry with Sidebar"
												href="index1435.html?layout=masonry&amp;sidebar=yes&amp;limit=9">Masonry
												with Sidebar</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-147">
											<a title="Grid Layout"
												href="index490b.html?layout=3cols_grid&amp;sidebar=no&amp;limit=9">Grid
												Layout</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-148">
											<a title="Gird width Sidebar"
												href="index2567.html?layout=3cols_grid&amp;sidebar=yes&amp;limit=9">Gird
												width Sidebar</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-149">
											<a title="Grid 2 Column Layout"
												href="index82ad.html?layout=2cols_grid&amp;sidebar=yes&amp;limit=9">Grid
												2 Column Layout</a></li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-150 dropdown">
									<a title="Post Type" href="#" data-toggle="dropdown" aria-haspopup="true">Post Type
										<span class="caret"></span></a>
									<ul role="menu" class="sub-menu">
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-155">
											<a title="Standard Post"
												href="egyptair-flight-crashes-with-66-people-on-board-3/index.html">Standard
												Post</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-156">
											<a title="Audio Post"
												href="here-are-the-15-best-bralettes-for-summer-you-can-get-for-under-200/index.html">Audio
												Post</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-157">
											<a title="Video Post"
												href="the-driving-forces-powering-mens-fashion-today/index.html">Video
												Post</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-post menu-item-158">
											<a title="Gallery Post"
												href="angelina-jolie-has-found-the-perfect-summer-office-uniform/index.html">Gallery
												Post</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151"><a
										title="Lifestyle" href="category/lifestyle/index.html">Lifestyle</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-153"><a
										title="Travel" href="category/travel/index.html">Travel</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134"><a
										title="About" href="about/index.html">About</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a
										title="Contact" href="contact/index.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="navbar-col navbar-end">
						<a href="javascript:void(0)" class="navbar-touch nav-right d-lg-none">
							<div class="navbar-toggle">
								<span></span>
							</div>
						</a>
						<a class="navbar-search" href="javascript:void(0)"><i class="fas fa-search"></i></a>
						<div class="nav-search-hear">
							<form role="search" method="get" class="searchform" action="http://baloo.az-theme.net/">
								<input type="text" class="text" placeholder="Search &amp; hit enter..." name="s" />
							</form> <a href="javascript:void(0)" class="close-search"><i class="fas fa-times"></i></a>
						</div>
					</div>
				</div>
			</div>
        </header>
        <main class="">
            @yield('content')
        </main>
		
		<footer id="baloo-footer">
			<div class="main-footer">
				<div class="container">
					<div class="logo-footer">
						<img src="wp-content/uploads/2019/05/logo-ft.png" alt="Baloo" />
					</div>
					<div class="copyright">&copy; Copyright 2019 - baloo. All Rights Reserved. Designed &amp; developed
						by AZ-Theme.</div>
					<div class="footer-social baloo-social">
						<a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
						<a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
						<a href="http://pinterest.com/"><i class="fab fa-pinterest"></i></a>
						<a href="http://instagram.com/"><i class="fab fa-instagram"></i></a>

					</div>
				</div>
			</div>
		</footer>
	</div>
	<script>(function () {
			function addEventListener(element, event, handler) {
				if (element.addEventListener) {
					element.addEventListener(event, handler, false);
				} else if (element.attachEvent) {
					element.attachEvent('on' + event, handler);
				}
			} function maybePrefixUrlField() {
				if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
					this.value = "http://" + this.value;
				}
			}

			var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
			if (urlFields && urlFields.length > 0) {
				for (var j = 0; j < urlFields.length; j++) {
					addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
				}
			}/* test if browser supports date fields */
			var testInput = document.createElement('input');
			testInput.setAttribute('type', 'date');
			if (testInput.type !== 'date') {

				/* add placeholder & pattern to all date fields */
				var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
				for (var i = 0; i < dateFields.length; i++) {
					if (!dateFields[i].placeholder) {
						dateFields[i].placeholder = 'YYYY-MM-DD';
					}
					if (!dateFields[i].pattern) {
						dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
					}
				}
			}

		})();</script>
	
	 
     <script type='text/javascript'
     src="{{ asset('wp-content/themes/baloo/libs/owl/owl.carouselbb49.js?ver=5.2.2') }}"
    ></script>
    <script type='text/javascript' 
    src="{{ asset('wp-content/themes/baloo/libs/chosen/chosenbb49.js?ver=5.2.2') }}"
    ></script>
    <script type='text/javascript'
    src="{{ asset('wp-content/themes/baloo/libs/sticky-sidebar/sticky-sidebarbb49.js?ver=5.2.2') }}"
	></script>
    <script type='text/javascript'
    src="{{ asset('wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0') }}"
    ></script>
    <script type='text/javascript' 
    src="{{ asset('wp-content/themes/baloo/libs/isotope/isotope.pkgdbb49.js?ver=5.2.2') }}"
    ></script>
    <script type='text/javascript'
    src="{{ asset('wp-content/themes/baloo/assets/js/baloo-blog-masonrybb49.js?ver=5.2.2') }}"
     ></script>
    <script type='text/javascript'
    src="{{ asset('wp-content/themes/baloo/assets/js/baloo-scriptsbb49.js?ver=5.2.2') }}"
     ></script>
    <script type='text/javascript'
    src="{{ asset('wp-includes/js/wp-embed.minbb49.js?ver=5.2.2') }}"
   ></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://baloo.az-theme.net/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.5.2'></script>
<![endif]-->
</body>


</html>