<?php defined('C5_EXECUTE') or die(_("Access Denied.")); $this->inc('elements/header.php'); $tp = $this->getThemePath(); function spaceToDash($string) { $string = strtolower($string); $string = preg_replace("/[^a-z0-9_\s-]/", "", $string); $string = preg_replace("/[\s-]+/", " ", $string); $string = preg_replace("/[\s_]/", "-", $string); return $string; } $page = Page::getCurrentPage();
$page_title = spaceToDash(strtolower($page->getCollectionName())); ?>

<div class="page-title">
  <h1><?=$page->getCollectionName()?></h1>
  <?php $m = new GlobalArea('Page Title'); $m->display($c); ?>
</div>

	<div class="pg-content pg-<?=$page_title?>">
		<?php
			$m = new Area('Content');
			$m->enableGridContainer();
			$m->display($c);
		?>
	</div>

<?php $this->inc('elements/footer.php'); ?>
