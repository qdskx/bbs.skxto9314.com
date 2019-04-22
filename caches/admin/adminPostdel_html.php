<!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?=$title;?></title>
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminBase.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/G-index.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminPostdel.css' />
		<style>
			.left .nav-le .bottom{
				margin-top:420px;
			}
		</style>
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
					<li><a href='adminInfo.php'>站点信息</a></li>
					<li><a href='adminUser.php'>用户管理</a></li>
					<li><a href='adminCate.php'>版块管理</a></li>
					<li><a href='adminPost.php' class='onclick'>帖子管理</a></li>
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
					<a href="adminLoginout.php" target='_blank'>[退出]</a>
					<a href='../index.php'><img src="<?=$dir;?>/img/nav.jpg"></a>
					</li>
				</ul>
			</div>
			<div class='left clearFix'>
				<ul class='nav-le clearFix'>
					<li><a href="adminPost.php"><img src='<?=$dir;?>/img/dot.gif'>帖子管理</a></li>
					<li class='on1'><a href="adminPostdel.php"><img src='<?=$dir;?>/img/dot.gif'>帖子回收站</a></li>
					<li><a href="adminRecycle.php"><img src='<?=$dir;?>/img/dot.gif'>回帖管理</a></li>
					<li><a href="adminRecycledel.php"><img src='<?=$dir;?>/img/dot.gif'>回帖回收站</a></li>
					<li class='bottom'>Powered by <a href="#">phpxy</a> V2© 2012, <a href="#">phpxy</a> Inc.</li>
				</ul>
			
			</div>
			<div class='right clearFix'>
				<div class='r-top'>帖子回收站</div>
				<div class='r1'>
					<?php if(!empty($paging) && !empty($paging['count'])):?>
					<p>主题数：
						<?=$paging['count'];?>
					</p>
					<?php else: ?>
					<p>主题数：0</p>
					<?php endif;?>
				</div>
				<ul class='r2 clearFix'>
					<li style='margin-left:65px'>主题</li>
					<li style='margin-left:111px'>版块</li>
					<li style='margin-left:204px'>作者</li>
					<li style='margin-left:303px'>回复/查看</li>
				</ul>
				<form action="adminPostdel.php" method="post" enctype="multipart/form-data" class="clearFix">
				<?php if(!empty($paging) && !empty($paging['data'])):?>
				<?php foreach($paging['data'] as $value):?>
					<div class='r3' >
						<input type='checkbox' name='tid[]' value="<?=$value['tid'];?>" style="margin-left:9px;">
						<p class='b1'><?=$value['title'];?></p>
						<p class='b2'><?=$value['classname'];?></p>
						<p class='b3'><a href='#'><?=$value['username'];?></a><br/><i><?php echo date('Y-m-d H:i:s' , $value['postime']);?></i><p>
						<p class='b4'><?=$value['replycount'];?> / <?=$value['views'];?></p>
					</div>
				<?php endforeach;?>
				<?php endif;?>
					<input type='submit' name='sub_del' value='删除主题' class='submit' />
				    <input type='submit' name='sub_recover' value='恢复主题' class='submit' />


					<!-- 分页 start -->
					<div class='page fr clearFix'>
						<form action="adminPostdel.php?page=<?=$paging['page'];?>" method='post' class='fr clearFix'>
							<input type="text" name='page_num' value='1' class="page_num fl" />

							<input type="submit" name='sub_page' value='GO' class='sub_page fl' />	

							
							<i class='page_mar fl'><?=$paging['page'];?></i>	

							<a href='adminPostdel.php?page=1' class='page_mar fl'>首页</i>	


							<a href="adminPostdel.php?page=<?=$paging['prev'];?>" class='page_mar fl'>上一页</a>		



							<a href="adminPostdel.php?page=<?=$paging['next'];?>" class='page_mar fl'>下一页</a>


							
							<a href="adminPostdel.php?page=<?=$paging['pageCount'];?>" class='page_mar fl'>尾页</a>	


							<i class='page_mar fl'>共有<?=$paging['count'];?>条记录 </i>					
							<i class='page_mar fl'> 
								每页显示<?=$paging['num'];?>条,
								本页<?=$paging['count'] == 0 ? 0 : $paging['offset'] + 1;;?>-<?=$paging['offset']+$paging['num'] > $paging['count'] ? $paging['count'] : $paging['offset']+$paging['num'];?>条 
							</i>	

							<i class='page_mar fl'> 1/<?=$paging['pageCount'];?>页 </i>
						</form>
					</div>
					<!-- 分页 end -->							    
				</form>
			
			</div>
		</div>
	
	
	</body>
</html>