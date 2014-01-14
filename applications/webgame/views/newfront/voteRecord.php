<!DOCTYPE html>
<html lang="en">
<head>
<title>vote</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
<?php if (!empty($this->message)) { echo '<div id="light" class="white_content"><h1 class="red">' . $this->message . '</h1></div>'; } ?>

<div id="light1" class="white_content1">
	<h1>玩家调查结果（共 <?php echo $this->sum; ?> 个玩家）</h1>
<?php foreach ($this->infos as $info) { echo '<h1 class="red">' . $this->voteElements[$info['element']] . '共 ' . $info['elemcount'] . ' 票，占' . round($info['elemcount'] / $this->sum, 3) * 100  . '%</h1>'; } ?>
	<a class="fr" href = "javascript:void(0)" onclick = "document.getElementById('light1').style.display='none';document.getElementById('fade1').style.display='none'">【关闭】</a>
</div> 
</body>
</html>

