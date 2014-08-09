<?php
/**
 * 顶部模板文件（逸云科技）
 *
 * 显示所有的页面顶部 <head></head> 部分直到 #main。
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Lcgsx
 * @since Lcgsx 1.0
 */
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">                                                 <!--    不懂-->
    <meta name="viewport" content="width=device-width">                                            <!--    不懂-->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <style>
        .sub-menu {
            position: absolute;
            color: #000000;
            font-size: 12px;

            left: 0;
            right: 0;
            top: 100%;

            line-height: 2.5em;
            padding: 0 1em;
            background-color: #EAF3FC;
            border-bottom: 1px solid #CBD5D7;
            border-left: 1px solid #CBD5D7;
            border-right: 1px solid #CBD5D7;

            display: none;
        }
        .nav-menu>li:hover>.sub-menu {
            display: block;
        }

    </style>
    <?php wp_head(); ?>
</head>
<body>
    <div id="page" class="hfeed site">

        <header id="masthead" class="site-header" role="banner">
            <div class="header-main">

                <div id="header-adminbar">



                    <!--
                    <div class="pull-right">&nbsp;|&nbsp;</div>
                    <div class="pull-right">
                        <a href="javascript: setHome(location.origin">[设为首页]</a>
                        <a href="javascript: addFavorite(location.origin, '<?php bloginfo('wp_title')?>');">[加入收藏]</a>
                    </div>
                    -->

                </div>

                <div id="header-banner">

                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img  alt="<?php bloginfo( 'name' ); ?>" src="<?=get_template_directory_uri() ?>/images/rerere.jpg"/></a></h1>

                </div>

                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'menu' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                </nav>
                <nav id="secondary-navigation" class="site-navigation secondary-navigation" role="navigation">
                    乐从个体私营协会欢迎您的光临！
                </nav>
            </div>

        </header><!-- #masthead -->

        <div id="main" class="site-main">