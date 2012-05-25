<?php $section = $_GET['section']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Custom jQuery Accordion</title>
<link href="stylesheets/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
<!--[if lt IE 7]>
<link href="stylesheets/screen-ie6.css" type="text/css" rel="stylesheet" media="screen,projection" />
<![endif]-->
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery-scrollTo.js"></script>
<script type="text/javascript" src="scripts/accordion.js"></script>
</head>

<body id="customAccordion">
<div id="container">
	<div id="content">
		<h1>Custom jQuery Accordion</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div id="sidebar">
		<ul id="accordion">
			<li<?php if($section == '' || $section == 'recent'): ?> class="current"<?php endif; ?>>
				<a href="?section=recent" class="heading">Recent Entries</a>
				<ul id="recent">
					<li><span class="date">01.19.2009</span> <a href="#">Recent Entry Title</a></li>
					<li><span class="date">01.15.2009</span> <a href="#">Recent Entry Title</a></li>
					<li><span class="date">01.13.2009</span> <a href="#">Recent Entry Title</a></li>
					<li><span class="date">01.11.2009</span> <a href="#">Recent Entry Title</a></li>
					<li><span class="date">01.10.2009</span> <a href="#">Recent Entry Title</a></li>
				</ul>
			</li>
			<li<?php if($section == 'popular'): ?> class="current"<?php endif; ?>>
				<a href="?section=popular" class="heading">Popular Entries</a>
				<ul id="popular">
					<li><span class="date">08.16.2008</span> <a href="#">Popular Entry Title</a></li>
					<li><span class="date">06.12.2008</span> <a href="#">Popular Entry Title</a></li>
					<li><span class="date">04.12.2008</span> <a href="#">Popular Entry Title</a></li>
					<li><span class="date">06.12.2007</span> <a href="#">Popular Entry Title</a></li>
					<li><span class="date">03.12.2007</span> <a href="#">Popular Entry Title</a></li>
				</ul>
			</li>
			<li<?php if($section == 'categories'): ?> class="current"<?php endif; ?>>
				<a href="?section=categories" class="heading">Categories</a>
				<ul id="categories">
					<li><a href="#">Category Name</a> <span class="count">7</span></li>
					<li><a href="#">Category Name</a> <span class="count">4</span></li>
					<li><a href="#">Category Name</a> <span class="count">15</span></li>
					<li><a href="#">Category Name</a> <span class="count">29</span></li>
					<li><a href="#">Category Name</a> <span class="count">8</span></li>
				</ul>
			</li>
			<li<?php if($section == 'archive'): ?> class="current"<?php endif; ?>>
				<a href="?section=archive" class="heading">Archive</a>
				<ul id="archive">
					<li><a href="#">January 2009</a> <span class="count">4</span></li>
					<li><a href="#">December 2008</a> <span class="count">14</span></li>
					<li><a href="#">November 2008</a> <span class="count">12</span></li>
					<li><a href="#">October 2008</a> <span class="count">8</span></li>
					<li><a href="#">September 2008</a> <span class="count">18</span></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
</body>
</html>
