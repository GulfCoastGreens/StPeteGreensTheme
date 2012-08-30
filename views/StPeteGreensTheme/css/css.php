<?php
/*
 * 	This is a php file, yet it contains css
 * 	This is normal for Elgg, it's part of the views system
 * 	Simply add your css rules to this file
 * 	Remember to clear your cache, or you may not see the changes right away
 * 	Cache can be cleared using the button on the administration page
 * 	or by visiting <your_url>/upgrade.php
 * 
 * 	For your reference, the full elgg default css is included
 * 	in views/seatheme/reference
 * 
 * 	It is spread over a number of php files, but they are structured by what
 * 	the css is affecting.
 * 
 * 	Remember that themes and other plugins also override the default css
 * 	if you find that your changes aren't working check the order of the plugins
 * 	and check your $priority setting in start.php
 * 
 * 	(also check that you're creating/modifying the correct rules)
 */
?>


/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}

.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
}

.elgg-page-header {
	position: relative;
	background-repeat:repeat-x;
	background-position:left top; */
	
}

a.elgg-heading-site {
	font-family: "Amienne Bold", Georgia, times, serif;
	text-decoration: none;
}

.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/sidebar_background.png) repeat-y right top;
	
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
	opacity:0.5;
}


.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

.elgg-page-default {
	min-width: 998px;
}

.elgg-page-footer {
	min-width: 998px;
}

.elgg-module-featured > .elgg-head {
	padding: 5px;
	background-color: #008080;
}

div.seatheme_example_rule {
	display: block;
	width: 200px;
	height: 200px;
	background-color: #ff0000;
}

a.elgg-topbar-logo img	{
	display:none;
}

li.elgg-menu-item-elgg-logo	{
	display:none;
}

.front-page-intro	{
	width:350px;
	height:500px;
	padding:20px;
	background:#FFF;
	opacity:0.8;
}

h2.elgg-heading-main	{
	color:#FFF;
}

div#profile-owner-block	{
	background-color:#008080 !important;
}



