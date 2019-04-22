<html>
	<head>
		<meta charset="utf-8" />
		<title><?=$title;?></title>
		<link rel="stylesheet" href="<?=$dir;?>/css/base.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/header.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/list.css" />
		<link rel="stylesheet" href="<?=$dir;?>/css/footer.css" />
		<link rel='stylesheet' href='<?=$dir;?>/css/returnCard.css' />
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
				<a href="list.php?cid=<?=$smallCate[0]['cid'];?>" class="forum"><?=$smallCate[0]['classname'];?></a>
				<i class="gt">></i>
				<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>"><?=$postInfo[0]['title'];?></a>
			</div>
			<!-- 头部下边的一角 end -->


			<div class='return_top clearFix'>
				<a href="./posting.php?cid=<?=$smallCate[0]['cid'];?>" class='fl post_pic'>
					<img src="<?=$dir;?>/img/post.png" alt="">
				</a>
				<a href="./returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$_GET['tid'];?>#reply" class='fl'>
					<img src="<?=$dir;?>/img/reply.png" alt="">
				</a>
				<?php if(empty($_SERVER['HTTP_REFERER'])):?>
				<a href="./list.php?cid=<?=$smallCate[0]['cid'];?>" class='mid_right fr clearFix'>
				<?php else: ?>
				<a href="<?=$url;?>" class='mid_right fr clearFix'>
				<?php endif;?>
					<i class='arw_l fl'></i>
					返回列表
				</a>
			</div>






			<!--main start-->
			<div class="main clearFix">
				<?php if(isset($_SESSION['uid']) && $_SESSION['undertype'] == 1):?>
				<div class="main-top">
					<p>
						<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&isdel=1">删除主题</a><span>|</span>
						<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&istop=1">置顶</a><span>|</span>
						<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&ishighlight=1">高亮</a><span>|</span>
						<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&essence=1">精华</a><span>|</span>
						<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&istop=0">取消置顶</a><span>|</span>	
					</p>
				</div>
				<?php endif;?>
				<!--  上半部分发帖  s-->
				<?php if(isset($_SESSION['uid']) && $_SESSION['undertype'] == 1):?>
				<div class="main-up fl clearFix">
				<?php else: ?>
				<div class="main-up fl clearFix" style='margin-top: 10px;'>
				<?php endif;?>
					<div class="up-left">
						<div class="up-le1">
							<p>查看:
								<span> <?=$postInfo[0]['views'];?></span> 
								<i>|</i> 回复: 
								<span><?=$postInfo[0]['replycount'];?></span>
							</p>
							<a href="#" class="le1-wen" ><?=$postInfo[0]['username'];?></a>
						</div>
						<div class="up-le2">
							<a href="#">
								<?php if(!empty($postInfo[0]['pic'])):?>
								<img src="<?=$postInfo[0]['pic'];?>">
								<?php else: ?>
								<img src="../public/img/avatar.gif" alt="">
								<?php endif;?>
								</a>
								
							<?php if($postInfo[0]['undertype'] == 1):?>
							<p>管理员</p>
							<?php else: ?>
							<p>普通用户</p>
							<?php endif;?>
							<p class="pos2"><?php echo userGrade($postInfo[0]['grade']);?></p>
						</div>								
					</div>
					<div class="up-r clearFix">
						<ul class="up-rtop cl">
							<li class='up-top fl'>
								<?=$postInfo[0]['title'];?>
							</li><br />
							<li class="rtop-le clearFix">
								<img src="<?=$dir;?>/img/online_supermod.gif" class="fl"/>
								<p>发表于<?php echo getFormatTime($postInfo[0]['postime']);?></p>
							</li>
							<ul class="rtop-r fr clearFix">
								<li class="rtop-r1 fr clearFix">
									<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$prev_tid;?>">
										<img src="<?=$dir;?>/img/thread-prev.png">
									</a>
									<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$next_tid;?>">
										<img src="<?=$dir;?>/img/thread-next.png" class="fr">
									</a>
								</li>
								<li class="rtop-r2 fr">
									<form action="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&" method="post" class="clearFix">
										
										<p>楼主  电梯直达&nbsp;</p>
										<!-- <input type="text" name="write"/> -->
										
										<!-- <img src="<?=$dir;?>/img/fj_btn.png" class="rtop-bimg2 fr"/> -->
											
										<!-- <input type="submit" name='subElevator' class="sub_elevator fr"/> -->

										<input id="louceng" type="text" title="跳转到指定楼层" name='floor'/>
										<a href="javascript:;" id="fj_btn" class="sub_elevator fr" title="跳转到指定楼层">
											<img src="<?=$dir;?>/img/fj_btn.png" onclick="golouceng()" alt="跳转到指定楼层" class="rtop-bimg2" />
										</a>
										<script>
											function golouceng(){
												location.href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>#elevator_"+document.getElementById('louceng').value;
											}
										</script>
									</form>
								</li>
							</ul>
						</ul>
						<div class="up-mid">
							<?php if($postInfo[0]['price'] == 0 ):?>
								<?=$postInfo[0]['content'];?>
							<?php else: ?>
								<?php if(empty($_SESSION['uid'])):?>
									<div class='displayed clearFix'>
										<i class='fl'></i>
										本主题需要向作者支付
										<cite><?=$postInfo[0]['price'];?>金钱</cite>
										才能浏览
										<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&purchase=1" class='fr'>购买主题</a>
										<strong class="fr"></strong>
									</div>
								<?php elseif(isset($_SESSION['uid']) && $_SESSION['undertype'] == 1):?>
									<div class='displayed clearFix'>
										<i class='fl'></i>
										付费主题,价格:
										<cite><?=$postInfo[0]['price'];?>金钱</cite>
									</div>
									<?=$postInfo[0]['content'];?>
								<?php elseif(isset($_SESSION['uid']) && $_SESSION['uid'] == $postInfo[0]['authorid']):?>
									<div class='displayed clearFix'>
										<i class='fl'></i>
										您发表的付费主题,价格:
										<cite><?=$postInfo[0]['price'];?>金钱</cite>
									</div>
									<?=$postInfo[0]['content'];?>
								<?php elseif(isset($_SESSION['uid']) && $_SESSION['undertype'] <> 1):?>
									<?php if(!empty($isPurchase)):?>
										<div class='displayed clearFix' style='margin-bottom: 18px;'>
											<i class='fl'></i>
											付费主题,价格:
											<cite><?=$postInfo[0]['price'];?>金钱</cite> 您已购买过此主题
										</div>
										<?=$postInfo[0]['content'];?>	
									<?php else: ?>
										<div class='displayed clearFix'>
											<i class='fl'></i>
											本主题需要向作者支付
											<cite><?=$postInfo[0]['price'];?>金钱</cite>
											才能浏览
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&purchase=1" class='fr'>购买主题</a>
											<strong class="fr"></strong>
										</div>	
									<?php endif;?>
								<?php endif;?>
							<?php endif;?>
							<?php if($postInfo[0]['essence'] != 0):?>
							<p style='margin-top: 85px;margin-left: 330px;'>本主题已加入精华</p>
							<?php endif;?>							
						</div>
						<ul class="up-rb">
							<li class="rb-le">
								<img src="<?=$dir;?>/img/fastreply.gif"/>
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>#reply">回复</a>
							</li>
						</ul>
					</div>
				</div>
				<!--  上半部分发帖          e-->


				<!--  回帖部分  Start -->
				<?php if(!empty($paging) && !empty($paging['data'])):?>
				<?php foreach($paging['data'] as $key => $val):?>
					<?php if($paging['page'] == 1 || is_null($paging['page'])):?>
						<a id="elevator_<?php echo setFloor($key);?>"></a>
					<?php else: ?>
						<a id="page=2&elevator_<?php echo setFloor($key+$paging['offset']);?>"></a>
					<?php endif;?>
				<div class="main-up clearFix fl">
				<!--  回帖人信息部分  s-->
					<div class="up-left">
						<div class="up-le1">
							<p>查看:
								<span> <?=$val['views'];?></span> 
								<i>|</i> 回复: 
								<span><?=$val['replycount'];?></span>
							</p>
							<a href="#" class="le1-wen" ><?=$val['username'];?></a>
						</div>
						<div class="up-le2">
							<a href="#"><img src="<?=$val['pic'];?>"></a>
							<?php if($val['undertype'] == 1):?>
							<p>管理员</p>
							<?php else: ?>
							<p>普通用户</p>
							<?php endif;?>
							<p class="pos2"><?php echo userGrade($val['grade']);?></p>
						</div>								
					</div>
					<!-- 回帖人信息部分 End -->
					<!-- 回帖内容 Start -->
					<div class="up-r clearFix">
						<ul class="up-rtop cl" style='height:25px;'>
							<li class="rtop-le clearFix">
								<img src="<?=$dir;?>/img/online_supermod.gif" class="fl"/>
								<p>发表于<?php echo getFormatTime($val['postime']);?></p>
							</li>
							<li>
								<i class='fr' style='margin-top:-15px;margin-right: 20px;'>
									<?php if($paging['page'] == 1 || is_null($paging['page'])):?>
									<?php echo storey($key);?>
									<?php else: ?>
									<?php echo storey($key+$paging['offset']);?>
									<?php endif;?>
								</i>
							</li>
						</ul>
						<div class="up-mid">
							<?php if($val['isdisplay'] == 1):?>
							<div class='displayed clearFix'>
								<i class='fl'></i>
								提示：<b>该贴已被管理员屏蔽</b>
							</div>
							<?php else: ?>
								<?=$val['content'];?>
							<?php endif;?>							
						</div>
						<ul class="up-rb">
							<li class="rb-le">
								<img src="<?=$dir;?>/img/fastreply.gif"/>
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>#reply">回复</a>
							</li>
							<?php if(isset($_SESSION['username']) && $_SESSION['undertype'] == 1):?>
							<li class="rb-r fr">
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>&replydel=1">删除</a>
								<span>|</span>
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>&replytop=1">置顶</a>
								<?php if($val['isdisplay'] == 0):?>
								<span>|</span>
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>&isdisplay=1">屏蔽</a>	
								<?php endif;?>			
								<span>|</span>
								<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>&replytop=0">取消置顶</a>
							</li>
							<?php elseif(isset($_SESSION['uid']) && $_SESSION['uid'] == $postInfo[0]['authorid'] && $val['isdisplay'] == 0):?>
								<li class="rb-r fr" style='width:105px;'>
									<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$val['tid'];?>&isdisplay=1">屏蔽</a>
								</li>					
							<?php endif;?>
						</ul>
					</div>
					<!-- 回帖内容 End -->
				</div>
					<!-- 如果评论下边还有评论的话 Start-->
					<?php if($val['replycount'] != 0):?>
					
					<?php 
						$reRetid = $val['tid'];

						$elseTable = DB_PREFIX . 'details';
						$table = DB_PREFIX . 'user' . ',' . DB_PREFIX . 'details';
						$fields = 'tid';
						$elseWhere = "tidtype = 0 and isdel = 0 and replyid = $reRetid";
						$where = "tidtype = 0 and isdel = 0 and replyid = $reRetid and authorid = uid order by postime desc ";

						$pagingReply = lit($link , $elseTable , $table , $fields , $elseWhere , $where , 3);
						
					?>
						<?php if(!empty($pagingReply) && !empty($pagingReply['data'])):?>
							<?php foreach($pagingReply['data'] as $k => $v):?>	
							<div class="main-up clearFix fl" style='margin-left:60px;width:898px;'>
								<!--  回帖人信息部分  s-->
								<div class="up-left">
									<div class="up-le1">
										<p>查看:
											<span> <?=$v['views'];?></span> 
											<i>|</i> 回复: 
											<span><?=$v['replycount'];?></span>
										</p>
										<a href="#" class="le1-wen" ><?=$v['username'];?></a>
									</div>
									<div class="up-le2">
										<a href="#"><img src="<?=$v['pic'];?>"></a>
										<?php if($v['undertype'] == 1):?>
										<p>管理员</p>
										<?php else: ?>
										<p>普通用户</p>
										<?php endif;?>
										<p class="pos2"><?php echo userGrade($v['grade']);?></p>
									</div>								
								</div>
								<!-- 回帖人信息部分 End -->
								<!-- 回帖内容 Start -->
								<div class="up-r clearFix" style='width:737px;'>
									<ul class="up-rtop cl" style='width:700px;height:25px;margin-left: 20px;'>
										<li class="rtop-le clearFix">
											<img src="<?=$dir;?>/img/online_supermod.gif" class="fl"/>
											<p>发表于<?php echo getFormatTime($v['postime']);?></p>
										</li>
										<!-- <li>
											<i class='fr' style='margin-top:-15px;margin-right: 120px;'>
												<?php if($paging['page'] == 1 || is_null($paging['page'])):?>
												<?php echo storey($k);?>
												<?php else: ?>
												<?php echo storey($k+$paging['offset']);?>
												<?php endif;?>
											</i>
										</li> -->
									</ul>
									<div class="up-mid" style='margin-left: 20px;'>
										<?php if($v['isdisplay'] == 1):?>
										<div class='displayed clearFix' style='width:615px;'>
											<i class='fl'></i>
											提示：<b>该贴已被管理员屏蔽</b>
										</div>
										<?php else: ?>
											<?=$v['content'];?>
										<?php endif;?>					
									</div>
									<ul class="up-rb" style='width:700px;margin-left: 20px;'>
										<li class="rb-le">
											<img src="<?=$dir;?>/img/fastreply.gif"/>
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$v['tid'];?>#reply">回复</a>
										</li>
										<?php if(isset($_SESSION['username']) && $_SESSION['undertype'] == 1):?>
										<li class="rb-r fr" style='width:180px;'>
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$v['tid'];?>&replydel=1">删除</a>
											<span>|</span>
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$v['tid'];?>&replytop=1">置顶</a>
											<?php if($v['isdisplay'] == 0):?>
											<span>|</span>
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$v['tid'];?>&isdisplay=1">屏蔽</a>	
											<?php endif;?>			
											<span>|</span>
											<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$v['tid'];?>&replytop=0">取消置顶</a>
										</li>
										<?php endif;?>
									</ul>
								</div>
								<!-- 回帖内容 End -->
							</div>
							<?php endforeach;?>
						<?php endif;?>
					<?php endif;?>	
					<!-- 如果评论下边还有评论的话 End-->
				<?php endforeach;?>
				<?php endif;?>
				<!--  上半部分发帖          e-->
				<!--  回帖部分          e-->


				<div class='return_top fl clearFix' style='margin-top:10px;'>
					<a href="posting.php?cid=<?=$smallCate[0]['cid'];?>" class='fl post_pic'>
						<img src="<?=$dir;?>/img/post.png" alt="">
					</a>
					<a href="
					returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>#reply" class='fl'>
						<img src="<?=$dir;?>/img/reply.png" alt="">
					</a>
					<?php if(empty($_SERVER['HTTP_REFERER'])):?>
					<a href="list.php?cid=<?=$smallCate[0]['cid'];?>" class='mid_right fr clearFix'>
					<?php else: ?>
					<a href="<?=$url;?>" class='mid_right fr clearFix'>
					<?php endif;?>
						<i class='arw_l fl'></i>
						返回列表
					</a>
				</div>






					<!-- 分页 start -->
					<div class='page clearFix fl' style='margin-top: 15px;margin-bottom: 15px;'>
						<form action="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&page=<?=$paging['page'];?>" method='post' class='fr clearFix'>
							<input type="text" name='page_num' value='1' class="page_num fl" />

							<input type="submit" name='sub_page' value='GO' class='sub_page fl' />	

							
							<i class='page_mar fl'><?=$paging['page'];?></i>	

							<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&page=1" class='page_mar fl'>首页</i>	


							<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&page=<?=$paging['prev'];?>" class='page_mar fl'>上一页</a>		



							<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&page=<?=$paging['next'];?>" class='page_mar fl'>下一页</a>


							
							<a href="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>&page=<?=$paging['pageCount'];?>" class='page_mar fl'>尾页</a>	


							<i class='page_mar fl'>共有<?=$paging['count'];?>条记录 </i>					
							<i class='page_mar fl'> 
								每页显示<?=$paging['num'];?>条,
								本页<?=$paging['count'] == 0 ? 0 : $paging['offset'] + 1;;?>-<?=$paging['offset']+$paging['num'] > $paging['count'] ? $paging['count'] : $paging['offset']+$paging['num'];?>条 
							</i>	

							<i class='page_mar fl'> 1/<?=$paging['pageCount'];?>页 </i>
						</form>
					</div>
					<!-- 分页 end -->






				<!--  下半部分发帖          s-->		
				<div class="main-bot fl">
					<div class="up-le2">
						<?php if(isset($_SESSION['uid'])):?>
							<a href=""><img src="<?=$_SESSION['pic'];?>" alt="" style="margin-top: 10px;"></a>
							<p><?=$_SESSION['username'];?></p>
							<?php if($_SESSION['undertype'] == 1):?>
							<p>管理员</p>
							<?php else: ?>
							<p>普通用户</p>
							<?php endif;?>
							<p class="pos2"><?php echo userGrade($_SESSION['grade']);?></p>
						<?php else: ?>
							<a href=""><img src="<?=$dir;?>/img/avatar.gif" style="margin-top: 10px;"></a>
						<?php endif;?>
					</div>
					<a name='reply'></a>
					<form action="returnCard.php?cid=<?=$smallCate[0]['cid'];?>&tid=<?=$postInfo[0]['tid'];?>" method="post">
						<div class="bot-r">
							<textarea id="ckeditor" class="ckeditor" name='content'></textarea>

							<!-- <textarea id="taContent" name='content' rows="3"  maxlength="20" onchange="this.value=this.value.substring(0, 20)" onkeydown="this.value=this.value.substring(0, 20)" onkeyup="this.value=this.value.substring(0, 20)" ></textarea> -->

							<input type="text" name='verify' class='verify fl'/>
							<img src="../helper/code.php" class=" fl ver" id='img' onclick='this.src="../helper/code.php?"+Math.random()' />
							<a href="javascript:;"  id="btn" class='fl code'>看不清，换一张</a><br />
							<input type="submit" name='subReply' value="发表回复" class="return_sub"/>
						</div>	
					</form>
				</div>
				<!--  下半部分发帖  End -->

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