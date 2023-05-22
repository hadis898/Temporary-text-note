<?php
// set to false to hide individual menu items
$allow_copy = true;
$allow_delete = true;
$allow_download = true;
$allow_view = true; // requires $allow_menu = true
$allow_new = true;
$allow_mono = true;

// if the notelist files isn't there then automatically set allow_notelist to false
if(!file_exists('notelist.php')) {$allow_noteslist = false; }

 ?>
<script src="modules/js/menu.min.js"></script>
<link rel="stylesheet" href="modules/css/menu.min.css">
<div class="footer">
	<div class="navbar" id="navbar">
		<a id="menuButton" style="font-size:15px;" class="icon" onclick="navbarResponsive()">&#9776;</a>
		<?php if($allow_view) echo "<a onclick='toggleView(this)' id='a_view' class='active'>预览编辑</a>".PHP_EOL; ?>
		<?php if($allow_copy) echo "<a onclick='toggleModal_Copy();navbarResponsive();' title='copy note url or content'>复制文本</a>".PHP_EOL; ?>
		<?php if($allow_download) echo "<a onclick='downloadFile();navbarResponsive();'>下载文本</a>".PHP_EOL; ?>
		<?php if($allow_mono) echo "<a onclick='toggleMonospace(this);navbarResponsive();' title='monospace font on/off'>字体大小</a>".PHP_EOL; ?>
		<?php if($allow_password) echo "<a onclick='toggleModal_Password();'>设置密码</a>".PHP_EOL; ?>
		<?php if($allow_delete) echo "<a onclick='navbarResponsive();deleteFile()'>删除文本</a>".PHP_EOL; ?>
		<?php if($allow_new) echo "<a href=" . $base_url . "/>新建文本</a>".PHP_EOL; ?>
		<?php if($allow_noteslist) echo "<a href='notelist.php'>管理列表</a>".PHP_EOL; ?>
		<?php if($allow_noteslist) echo "<a href='about.html'>关于</a>".PHP_EOL; ?>
	</div>
</div>
<?php if($allow_copy) include 'modules/copy.php' ?>
<?php if ($allow_view) echo "<script src='modules/js/view.min.js'></script>".PHP_EOL; ?>
