<?php
function print_head($page_title,$popup){ ?>
<head>
<!--Jiani Sun-->
	<title>CISC 282 |<?= $page_title?></title>
	<meta charset="utf-8"/>
	<meta name="author" content="Jiani Sun"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="/~17js46/a5/css/icons.css"> 	
	<link rel="stylesheet" href="/~17js46/a5/css/style.css"> 	
	<link rel="stylesheet" href="/~17js46/a5/css/responsive.css">
	<script src="/~17js46/a5/js/jquery-3.4.1.min.js"></script>
	<script src="/~17js46/a5/js/header-slideshow.js"></script>
	
	<?php if ($popup != ""): ?>
		<script src="/~17js46/a5/js/jquery.magnific-popup.min.js"></script>
		<script src="/~17js46/a5/thumbnail-gallery.js"></script>
	<?php endif; ?>
</head>
<?php
}
