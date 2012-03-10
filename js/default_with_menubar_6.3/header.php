<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if ( !empty($withcomments) && !is_single() ) {
?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top; border: none; }
<?php } else { // No sidebar ?>
	#page { background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top; border: none; }
<?php } ?>

</style>
	<script typr="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>

<!-- 加载菜单效果的 JavaScriot -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>

<?php wp_head(); ?>
</head>
<body>
<div id="page">

<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>

<!-- 分类菜单 START -->
<div id="menubar">
	<ul id="menus" class="menus">
		<?php
			if (is_home()) {
				$home_menu_class = 'current-cat';
			} else {
				$home_menu_class = 'cat-item';
			}
		?>
		<li class="<?php echo($home_menu_class); ?>">
			<a title="<?php _e('Home', 'default'); ?>" href="<?php echo get_settings('home'); ?>/"><?php _e('Home', 'default'); ?></a>
		</li>
		<?php wp_list_categories('depth=2&title_li=0&orderby=name&show_count=0'); ?>
	</ul>
</div>
<!-- 分类菜单 END -->
<div style="clear:both;"></div>

<hr />
