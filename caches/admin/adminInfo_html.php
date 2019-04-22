
<!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?=$title;?></title>
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminBase.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/G-index.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminInfo.css' />
	</head>
	<body>
		<div class='box clearFix'>
			<div class='top fl clearFix'>
				<div class='top1'></div>
				<div class='top2'></div>
				<div class='top3'></div>
				<div class='top-le'><i>Discuz!</i><br/>Control Panel</div>
				<div class='top-gang'></div>
				<ul class='nav clearFix'>
					<li><a href='adminInfo.php' class='onclick'>站点信息</a></li>
					<li><a href='adminUser.php'>用户管理</a></li>
					<li><a href='adminCate.php'>版块管理</a></li>
					<li><a href='adminPost.php'>帖子管理</a></li>
				</ul>
				<ul class='exit'>
					<li><p>你好, 创始人 </p>
						<em>&nbsp;&nbsp;
						<?php if(isset($_SESSION['username'])):?>
							<?=$_SESSION['username'];?>
						<?php else: ?>
						admin
						<?php endif;?>
						&nbsp;&nbsp;</em>
					<a href="adminLoginout.php">[退出]</a>
					<a href='../index.php'><img src="<?=$dir;?>/img/nav.jpg"></a>
					</li>
				</ul>
			</div>
			<div class='left clearFix'>
				<ul class='nav-le clearFix'>
					<li class='on1'><a href="adminInfo.php"><img src='<?=$dir;?>/img/dot.gif'>站点信息</a></li>
					<li><a href="adminLink.php"><img src='<?=$dir;?>/img/dot.gif'>友情链接</a></li>
					<li class='bottom'>Powered by <a href="#">phpxy</a> V2© 2012, <a href="#">phpxy</a> Inc.</li>
				</ul>
			</div>
		<!--  左边 结束   -->
		<!--  右边 开始   -->
		<!-- <?php include '../config/config.php';?> -->
		<form action="adminInfo.php" method="post" enctype="multipart/form-data">
			<div class='right clearFix'>
				<div class='r-top'>站点信息</div>
				<div class='r1'>
				
						<p class='title'>站点名称:</p><br/>
						<input type='text' name="WEB_NAME" value="<?=WEB_NAME;?>" />
						<p class='zhu'>站点名称，将显示在浏览器窗口标题等位置</p>
					
				</div>
				<div class='r1 r2'>
					
						<p class='title'>网站名称:</p><br/>
						<input type='text' name="WEB_BTM" value="<?=WEB_BTM;?>">
						<p class='zhu'>网站名称，将显示在页面底部的联系方式处</p>
					
				</div>
				<div class='r1 r2'>
					
						<p class='title'>网站 URL:</p><br/>
						<input type='text' name="WEB_URL" value="<?=WEB_URL;?>">
						<p class='zhu'>网站 URL，将作为链接显示在页面底部</p>
					
				</div>
				<div class='r1 r2'>
					
					    <p class='title'>网站备案信息代码:</p><br/>
					    <input type='text' name="WEB_ICP" value="<?=WEB_ICP;?>"/>
						<p class='zhu'>页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入你的授权码，它将显示在页面底部，如果没有请留空</p>
					
				</div>
				<div class='r3'><p>关闭站点</p></div>
				<div class='r4'>
					
					<p class='title1'>关闭站点</p><br/>
					<input type='radio' name="WEB_ISCLOSE" id='yes' value='true' <?php if(WEB_ISCLOSE == 'true'):?>checked<?php endif;?> />
					<label for='yes'>是</label>
					<input type='radio' name="WEB_ISCLOSE" id='no' value='false' <?php if(WEB_ISCLOSE == 'false'):?>checked<?php endif;?>/>
					<label for='no'>否</label>
					<p class='zhu'>暂时将站点关闭，其他人无法访问，但不影响管理员访问</p>
				
				</div>

<!-- 				<div class='r4'>
					
					<p class='title1'><a href="adminInfo.php?del_cache=1">删除缓存</a></p><br/>
					<p class='zhu'>删除站点的缓存记录,但不影响用户访问</p>
				
				</div> -->
				
					<input type='submit' name='sub_info' value='提交' class='submit'>
				
			</div>
		</form>
		<!--  右边 结束   -->
		</div>
	
	
	</body>
</html>