<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8" />
    <title><?= $site->headline()->html() ?></title>
    <meta name="description" content="<?= $site->text() ?>">
    <meta name="author" content="<?= $site->author() ?>">
    
	<!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- CSS
    ================================================== -->
    <?= css(array('assets/css/reset.css',
              'assets/css/flex.css',
              'assets/css/main.css',
              'assets/css/font-awesome.min.css')) ?>
    
    <?= js('assets/js/jquery.js') ?>
    <?= js('@auto') ?>
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <?php if($site->googleVerify() != ''): ?><meta name="google-site-verification" content="<?php echo $site->googleVerify() ?>"><?php endif ?>
    
    <?php if($site->googleAnalytics() != ''): ?><?php snippet('analytics') ?><?php endif ?>
    
</head>
<body class="<?= $page->template() ?>">
<div class="site-gradient">&nbsp;</div>