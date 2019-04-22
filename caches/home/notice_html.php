<html>
	<head>
		<meta charset="utf-8" />
		<title>提示界面</title>
		<link rel="stylesheet" href="<?=$dir;?>/css/base.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/header.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/notice.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/footer.css" />
		<meta http-equiv="Refresh" content="2 ; <?=$url;?>" />	
	</head>

	<body>
		<div class="box clearFix">
			<!-- 头部 start -->
			<?php include '/www/web/bbs/public_html/caches/home/header_html.php';?>
			<!-- 头部 end -->





		<!--main start-->			
		<div class='key clearFix'>			
			<div class='key_cont yanzhengma clearFix'>
				<?php if($notice):?>
				<i class='loginchenggong_bg fl' ></i>
				<?php else: ?>
				<i class='key_cont_bg fl' ></i>
				<?php endif;?>
				<p class='key_cont_zi fl clearFix'>
					<i class='zi_red fl'><?=$msg;?></i><br />
					<a href='<?=$url;?>' class='zi_blue fl'>如果你的浏览器没有自动跳转，请点击此链接</a>
				</p>							
			</div>			
		</div>		
		<!--main end-->







			<!-- footer start -->
			<?php include '/www/web/bbs/public_html/caches/home/footer_html.php';?>
			<!-- footer end -->




		</div>
	</body>
</html>