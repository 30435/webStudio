<?php echo $this->load->view('header1'); ?>
<h1>您进入了====<?php echo $this->webgameInfo['name']; ?>==<?php echo $this->serverInfo['name']; ?></h1>
<div id="contentBox">
	<iframe id="gameIframe"  src="<?php echo $this->playurl?>" frameborder="0" scrolling="no" height="100%" width="100%" style="_width:99%;background:#000;"></iframe>
</div>
</body>
</html>