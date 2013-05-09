<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<div id="header">

		<header id="header-inner" class="inner">

			<hgroup>
				<?php $nlt_logo_url = nlt_opt('logo_url'); ?>
				<?php if( ! empty( $nlt_logo_url ) ) : ?>
				<h1 class="site-logo"><a href="<?php echo esc_attr( home_url( '/' ) ); ?>"><img src="<?php echo $nlt_logo_url; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ); ?>" /></a></h1>
				<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_attr( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ) ?></a></h1>
				<h4 class="site-description"><?php bloginfo( 'description' );?></h4>
				<?php endif; ?>
			</hgroup>

		</header><!-- #header-inner -->

	</div><!-- #header -->

	<div id="nav">

		<nav id="nav-inner" class="inner">

			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary' ) ); ?>

			<div id="nav-sns">
				<?php $nlt_sns_fb = nlt_opt('sns_fb'); if( ! empty( $nlt_sns_fb ) ) : ?><a class="btn-sns btn-sns-fb" href="<?php echo $nlt_sns_fb; ?>" target="_blank" rel="nofollow">Facebook</a><?php endif; ?>
				<?php $nlt_sns_tw = nlt_opt('sns_tw'); if( ! empty( $nlt_sns_tw ) ) : ?><a class="btn-sns btn-sns-tw" href="<?php echo $nlt_sns_tw; ?>" target="_blank" rel="nofollow">Twitter</a><?php endif; ?>
				<?php $nlt_sns_wb = nlt_opt('sns_wb'); if( ! empty( $nlt_sns_wb ) ) : ?><a class="btn-sns btn-sns-wb" href="<?php echo $nlt_sns_si; ?>" target="_blank" rel="nofollow">Weibo</a><?php endif; ?>
				<?php $nlt_sns_rs = nlt_opt('sns_rs'); ?><a class="btn-sns btn-sns-rss" href="<?php if( ! empty( $nlt_sns_rs ) ) : ?><?php echo $nlt_sns_rs; ?><?php else : ?><?php echo get_feed_link( 'feed' ); ?><?php endif; ?>" target="_blank" rel="nofollow">RSS</a>
			</div>

		</nav><!-- #nav-inner -->

	</div><!-- #nav -->

	<div id="main">

		<div id="content" class="inner">
