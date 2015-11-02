<?php	
$hasgeneralalert = (!empty($PAGE->theme->settings->generalalert));
$hassnowalert = (!empty($PAGE->theme->settings->snowalert));
$isfrontpage = $PAGE->bodyid == "page-site-index";
?>

<?php if ($hasgeneralalert) {?>
	<div id="page-header-generalalert">
	<?php echo $PAGE->theme->settings->generalalert; ?>
	</div>
	<?php } ?>
	
	<?php if ($hassnowalert) {?>
	<div id="page-header-snowalert">
	<?php echo $PAGE->theme->settings->snowalert; ?>
	</div>
	<?php } ?>
