<?php echo doctype(); ?>
<!--[if lt IE 7]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]><html xmlns:wb="http://open.weibo.com/wb" class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html xmlns:wb="http://open.weibo.com/wb" class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title><?php echo $this->metaDatas['title']; ?></title>
<meta content="<?php echo $this->metaDatas['keywords']; ?>" name="Keywords"> 
<meta content="<?php echo $this->metaDatas['description']; ?>" name="Description">
<!-- [if lte IE 8]>
<meta http-equiv="X-UA-Compatible" content="IE=7,chrome=1" />
<![endif]-->
<script type="text/javascript">
	var _loginUser = 'basic';
    var _config = '';
</script>
<link href="<?php echo $this->staticUrl; ?>bookbar/css/core.packed.css?201301311453" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>bookbar/css/jquery-ui-1.8.16.custom.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->staticUrl; ?>bookbar/css/model.packed.css?201302270930" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/release/plugin.js?201211010520"></script>
<script type="text/javascript" src="http://img.motieimg.com/_resources/js/release/Motie.core.packed.js?201309021552"></script>
<script type="text/javascript">
	$(function(){
		Mo.init.InitAll();
		Mo.core.collect();
	})
</script>
