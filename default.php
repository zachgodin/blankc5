<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
$tp = $this->getThemePath();
function getTheURL($url_id) {
	$opg = Page::getById($url_id);
	$url=Loader::helper('navigation'); 
	$canonical=$url->getCollectionURL($opg); 
	$canonical=preg_replace("/index.php\?cID=1$/","",$canonical); 
	echo $canonical;
}
function spaceToDash($string) {
    $string = strtolower($string);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
$page = Page::getCurrentPage();
$page_title = spaceToDash(strtolower($page->getCollectionName()));

?>

<div class="page-title container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
            	<h1><?=$page->getCollectionName()?></h1>
            </div>
		</div>
	</div>
</div>

	<div class="content whiteback <?=$page_title?>">
		<?php
			$m = new Area('Content');
			$m->enableGridContainer();
			$m->display($c);
		?>
	</div>

<!-- Example of a global content area -->
	<?php 
        $m = new GlobalArea('Content');
        $m->display($c);
    ?>


<?php
$this->inc('elements/footer.php');
?>