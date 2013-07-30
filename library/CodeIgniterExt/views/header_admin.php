<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php if ($this->addbg) { echo ' class="addbg"'; } ?>>
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php echo meta($this->metaInfos); ?>
<meta http-equiv="cache-control" content="no-cache, must-revalidate">
<?php 
$styleFiles = array(
	'admin/css/reset.css', 	'admin/css/zh-cn-system.css', 'admin/css/table_form.css',
	'admin/css/dialog.css', 'admin/css/style/zh-cn-styles1.css', 'common/calendar/jscal2.css',
	'common/calendar/border-radius.css', 'common/calendar/win2k.css'
);
$linkString = '';
foreach ($styleFiles as $styleFile) {
	$linkString .= link_tag($this->staticUrl . $styleFile);
}
echo $linkString; 
?>
<script src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/calendar/calendar.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/calendar/lang/en.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/formvalidator.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/formValidatorRegex.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/admin_common.js"></script>
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/dialog.js" language="javascript"></script>
</head>
<body>
<?php
$subnavString = '';
if (isset($this->showSubnav) && $this->showSubnav) {
	$subnavString .= '<div class="subnav"><div class="content-menu ib-a blue line-x">';
	$isCurrent = '';
	foreach ($this->appMenus as $appMenu) { 
		if ($appMenu['display'] > 2) continue;
		$isCurrentMenu = ($this->method == $appMenu['method']) ? 'class="on"' : '';
		$subnavString .= "<a href='{$appMenu['url']}' {$isCurrentMenu}><em>{$appMenu['name']}</em></a><span>|</span>";
	}
	$subnavString .= '</div></div>';
}
echo $subnavString;
?>
<style type="text/css">
	html{_overflow-y:scroll}
</style>