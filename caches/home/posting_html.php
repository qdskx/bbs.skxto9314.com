<html>
	<head>
		<meta charset="utf-8" />
		<title><?=$title;?></title>
		<link rel="stylesheet" href="<?=$dir;?>/css/base.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/header.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/list.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/footer.css" />
		<link rel='stylesheet' href='<?=$dir;?>/css/posting.css' />
		<script type="text/JavaScript" src="<?=$dir;?>/ckeditor/ckeditor.js"></script>
	</head>

	<body>
		<div class="box clearFix">
			<!-- 头部 start -->
			<?php include '/www/web/bbs/public_html/caches/home/header_html.php';?>
			<!-- 头部 end -->



			<!-- 头部下边的一角 start -->
			<div class="list_talk clearFix">
				<i class="home"></i>
				<i class="gt">></i>
				<a href="#" class="forum">论坛</a>
				<i class="gt">></i>
				<a href="../index.php?bigid=<?=$bigCate[0]['cid'];?>" class="forum"><?=$bigCate[0]['classname'];?></a>
				<i class="gt">></i>
				<a href="./list.php?cid=<?=$smallCate[0]['cid'];?>" class="forum"><?=$smallCate[0]['classname'];?></a>
				<i class="gt">></i>
				<i class="forum">发表帖子</i>
			</div>
			<!-- 头部下边的一角 end -->

			



			<!--main start-->
			<div class="main">
				<div class="main-rt"><p>基本资料</p></div>
				<form action="posting.php?cid=<?=$smallCate[0]['cid'];?>" method="post">
					<input type="text" name="title" class="size2"/>
					<!-- <input type="text" name="title" id="subject" class="size2" value="" onblur="if($('tags')){relatekw('-1','-1');doane();}" onkeyup="strLenCalc(this, 'checklen', 80);" style="width: 25em" tabindex="1"> -->
					<i class="tit-col" id='checklen'> 还可输入 80 个字符</i>
					<!-- <script type="text/javascript">strLenCalc($('subject'), 'checklen', 80)</script> -->
					
				<div class="content">
					<textarea id="ckeditor" class="ckeditor" name='content'></textarea>
				</div>
				<div class="shou">
					<div class="shou1"><img src="../public/img/dot.gif">售价</div>
					<div class="shou2"></div>
						<div class="shou3">
							<i>售价：</i>
							
							<input type="text" name="price" class="size3" value="0" />
							
							<i class="wen">金钱</i><span>(最高 30 )<span>
						</div>
						<input type="text" name='verify' class='verify fl'/>
						<img src="../helper/code.php" class=" fl ver" id='img' onclick='this.src="../helper/code.php?"+Math.random()' />
						<a href="javascript:;"  id="btn" class='fl code'>看不清，换一张</a><br />
						<input type="submit" name="postSub" class="post_sub" value="发表帖子" />
					</form>
				</div>
			</div>
			<!--main end-->











			<!-- footer start -->
			<?php include '/www/web/bbs/public_html/caches/home/footer_html.php';?>
			<!-- footer end -->



		</div>
		<script>
			var oBtn= document.getElementById('btn');
			var oImg= document.getElementById('img');
			oBtn.onclick = function ()
			{
				oImg.src = '../helper/code.php?'+Math.random();
			}
		</script>
	</body>
</html>