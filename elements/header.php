<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $tp = $this->getThemePath(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"  />
    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#121212" />
   

    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

   
    <link rel="stylesheet" type="text/css" href="<?=$tp?>/grid.css">
    <link rel="stylesheet" type="text/css" href="<?=$tp?>/style.css">
    
    <?php Loader::element('header_required'); ?>
    </head>
    
    <?php 
        $c= Page::getCurrentPage();
        $u = new user();
        $g = Group::getByName('Administrators');

        if ($c->getCollectionID() == 1) { $pageclasses = "home"; } else { $pageclasses = "inner"; } 
        if ($c->isEditMode()) {	$pageclasses .= " editmode"; } 
        if ($u->inGroup($g)||$u->isSuperUser()) { $pageclasses .= " admin-logged-in"; }
    ?>

    <body class="<?=$pageclasses;?>">
        <div class="<?php echo $c->getPageWrapperClass()?>">
           
            <!--[if lte IE 8]>
                <div class="ienotice">
                    <p style="text-align: center; margin: 0;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> It appears that you are using an out-of-date web browser which may not be compatible with this website. Please upgrade your web browser to             
                    <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank" style="color: #FFF;">Firefox</a>, 
                    <a href="https://www.google.com/chrome" target="_blank" style="color: #FFF;">Chrome</a>,
                    or <a href="http://www.microsoft.com/ie" target="_blank" style="color: #FFF;">Latest Internet Explorer</a>. </p>
                </div>	
            <![endif]--> 
