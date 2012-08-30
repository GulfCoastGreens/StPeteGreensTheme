<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>



/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>

body {
	background: #000000 url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/water-back.png)  top left;
}

.elgg-page-default {
	min-width: 998px;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/whale.png)  top right;
	background-repeat:no-repeat;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
				background-color:#fff;
				opacity:0.8;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
}

.elgg-page-body	{
	border-bottom:none;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/3fish.png)  top left;
	background-repeat:no-repeat;
}


/***** TOPBAR ******/
.elgg-page-topbar {
	background: #333333 url(<?php echo elgg_get_site_url(); ?>_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 9000;
}
.elgg-page-topbar > .elgg-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/sidebar_background.png) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/two_sidebar_background.gif) repeat-y right top;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head xxx {
	padding-bottom: 3px;
	border-bottom: 3px solid #000;
	margin-bottom: 10px;
}

.elgg-main > .elgg-head {
	padding: 4px;
	margin-bottom: 10px;
	background-color:#008080;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;	
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/seatheme/graphics/sandyfloor.png)  top left;
	height:224px;
}
.elgg-page-footer a:hover {
	color: #666;
}

.elgg-heading-site, .elgg-heading-site:hover {
	color:#ffffff;
}