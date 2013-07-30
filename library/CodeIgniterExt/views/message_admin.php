<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->headerTitle; ?></title>
<?php 
	echo meta($this->metaInfos);
?>
<style type="text/css">
<!--
*{ padding:0; margin:0; font-size:12px}
a:link,a:visited{text-decoration:none;color:#0068a6}
a:hover,a:active{color:#ff6600;text-decoration: underline}
.showMsg{border: 1px solid #1e64c8; zoom:1; width:450px; height:172px;position:absolute;top:44%;left:50%;margin:-87px 0 0 -225px}
.showMsg h5{background-image: url(<?php echo $this->staticUrl; ?>admin/msg_img/msg.png);background-repeat: no-repeat; color:#fff; padding-left:35px; height:25px; line-height:26px;*line-height:28px; overflow:hidden; font-size:14px; text-align:left}
.showMsg .content{ padding:46px 12px 10px 45px; font-size:14px; height:64px; text-align:left}
.showMsg .bottom{ background:#e4ecf7; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center}
.showMsg .ok,.showMsg .guery{background: url(<?php echo $this->staticUrl; ?>admin/msg_img/msg_bg.png) no-repeat 0px -560px;}
.showMsg .guery{background-position: left -460px;}
-->
</style>
<script type="text/javaScript" src="<?php echo $this->staticUrl; ?>common/script/jquery-1.8.0.min.js"></script>
<script language="JavaScript" src="<?php echo $this->staticUrl; ?>common/script/admin_common.js"></script>
</head>
<body>
<div class="showMsg" style="text-align:center">
	<h5><?php echo $this->lang->line('message_tips');?></h5>
    <div class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px"><?php echo $this->message?></div>
    <div class="bottom">
    <?php if($this->urlForward=='goback' || $this->urlForward=='') {?>
	<a href="javascript:history.back();" >[<?php echo $this->lang->line('return_previous');?>]</a>
	<?php } elseif($this->urlForward=="close") {?>
	<input type="button" name="close" value="<?php echo $this->lang->line('close');?> " onClick="window.close();">
	<?php } elseif($this->urlForward=="blank") {?>
	
	<?php } elseif($this->urlForward) { ?>
	<a href="<?php echo $this->urlForward?>"><?php echo $this->lang->line('click_here');?></a>
	<script language="javascript">setTimeout("redirect('<?php echo $this->urlForward?>');", <?php echo $this->showTime; ?>);</script> 
	<?php }?>
	<?php if (!empty($this->returnjs)) { ?> <script style="text/javascript"><?php echo $this->returnjs;?></script><?php } ?>
	<?php if (!empty($dialog)):?><script style="text/javascript">window.top.right.location.reload();window.top.art.dialog({id:"<?php echo $dialog?>"}).close();</script><?php endif;?>
        </div>
</div>
<script style="text/javascript">
	function close_dialog() {
		window.top.right.location.reload();window.top.art.dialog({id:"<?php echo $dialog?>"}).close();
	}
</script>

</body>
</html>