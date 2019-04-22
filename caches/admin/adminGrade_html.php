<!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title><?=$title;?></title>
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminBase.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/G-index.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminGrade.css' />
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
					<li><a href='adminUser.php' class='onclick'>用户管理</a></li>
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
					<li class='on1'><a href="adminUser.php"><img src='<?=$dir;?>/img/dot.gif'>编辑用户</a></li>
					<li><a href="adminIp.php"><img src='<?=$dir;?>/img/dot.gif'>禁止IP</a></li>
					<li class='bottom'>Powered by <a href="#">phpxy</a> V2© 2012, <a href="#">phpxy</a> Inc.</li>
				</ul>
			</div>
			

			<?php if(!empty($Details)):?>
			<?php foreach($Details as $value):?>
			<form action="adminGrade.php?uid=<?=$value['uid'];?>" method="post" enctype="multipart/form-data">

				<div class='right clearFix'>
					<?php if($value['undertype'] == 1):?>
					<div class='r-top'>编辑管理员 - <?=$value['username'];?> 等级 - <?php echo userGrade($value['grade']);?></div>
					<?php else: ?>
					<div class='r-top'>编辑普通用户 - <?=$value['username'];?> 等级 - <?php echo userGrade($value['grade']);?></div>
					<?php endif;?>
					<ul class="r1">
						<li class="bol">用户名</li>
						<li><?=$value['username'];?></li>
					</ul>
					 <ul class="r2">
						<li class="bol r2_a">头像</li>
						<li class="r2_b"><img src="<?=$value['pic'];?>"></li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">新密码</li>
						<li class="r3_b">
							<input type="password" name="newpass" value='' class="r3_input"/>
							<p>如果不更改密码此处请留空</p>
						</li>
					</ul>
					<ul class="r3">
					    <li class="bol r3_a">清除用户安全提问</li>
						<li class="mar1">
							<input type='radio' name='switch' id='yes' value='tes' ><label for='yes'>是</label>
							<input type='radio' name='switch' id='no' value='no' checked><label for='no'>否</label>
						</li>
						<p class="mar2">选择“是”将清除用户安全提问，该用户将不需要回答安全提问即可登录；选择“否”为不改变用户的安全提问设置</p>					
					</ul>
					<ul class="r3">
					    <li class="bol r3_a">锁定当前用户</li>
						<li class="mar1">
							<!-- <?php if($value['allowlogin'] == 0):?>
							<input type='radio' name='lock' id='yes' value='1' checked>
							<label for='yes'>是</label>
							<input type='radio' name='lock' id='no' value='0' >
							<label for='no'>否</label>
							<?php else: ?>
							<input type='radio' name='lock' id='yes' value='1' >
							<label for='yes'>是</label>
							<input type='radio' name='lock' id='no' value='0' checked>
							<label for='no'>否</label>
							<?php endif;?> -->
							<input type='radio' name='lock' id='yes' value='1' >
							<label for='yes'>是</label>
							<input type='radio' name='lock' id='no' value='0' checked />
							<label for='no'>否</label>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">Email:</li>
						<li class="r3_b">
							<input type="text" name="email" value="<?=$value['email'];?>" class="r3_input"/>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">注册IP:</li>
						<li class="r3_b">
							<input type="text" name="regip" value="<?php echo long2ip($value['regip']);?>" class="r3_input"/>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">注册时间:</li>
						<li class="r3_b">
							<input type="text" name="regtime" value="<?php echo date('Y-m-d H:i:s' , $value['regtime']);?>" class="r3_input"/>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">上次访问:</li>
						<li class="r3_b">
							<input type="text" name="visited" value="<?php echo date('Y-m-d H:i:s' , $value['lastime']);?>" class="r3_input"/>
						</li>
					</ul>
					<div class='r4' id="grade"><p>积分奖惩</p></div>
					<ul class="r3">
						<li class="bol r3_a">积分:</li>
						<li class="r3_b">
							<input type="text" name="grade" value="<?=$value['grade'];?>" class="r3_input"/>
						</li>
					</ul>
				 	<div class='r4'><p>论坛选项</p></div>
					<ul class="r5">
						<li class="bol r5_a">签名:</li>
						<li class="r5_b">
							<input type="text" name="autograph"  value="<?php echo htmlspecialchars($value['autograph']);?>" class="r5_input"/>
						</li>
					</ul>
					<div class='r4'><p>用户栏目</p></div>  
					<ul class="r3">
						<li class="bol r3_a">真实姓名:</li>
						<li class="r3_b">
							<input type="text" name="realname" value="<?=$value['realname'];?>"  class="r3_input"/>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">性别:</li>
						<li class="r3_b">
							<select name="sex" class="r3_input" />
								<?php if(empty($value['sex'])):?>
								<option value="2" selected>保密</option>
								<option value="3">女</option>
								<option value="1">男</option>
								<?php elseif($value['sex'] == 1):?>
								<option value="1" selected>男</option>
								<option value="3">女</option>
								<option value="2">保密</option>
								<?php elseif($value['sex'] == 2):?>
								<option value="1" >男</option>
								<option value="3">女</option>
								<option value="2" selected>保密</option>
								<?php else: ?>
								<option value="1" >男</option>
								<option value="3" selected>女</option>
								<option value="2">保密</option>
								<?php endif;?>
							</select>
						</li>
					</ul>
					<ul class="r6">
						<li class="bol r3_a">生日:</li>
						<li class="r3_b">
							<select name="year" class="r3_input">
								<?php if(isset($value['birthday'])):?>
								<option value=""><?php echo date('Y' , strtotime($value['birthday']));?></option>
								<?php else: ?>
								<option>年</option>
								<?php endif;?>
								<option>1980</option>
								<option>1981</option>
								<option>1982</option>
								<option>1983</option>
								<option>1984</option>
								<option>1985</option>
								<option>1986</option>
								<option>1987</option>
								<option>1988</option>
								<option>1989</option>
								<option>1990</option>
								<option>1991</option>
								<option>1992</option>				
								<option>1993</option>
								<option>1995</option>
								<option>1996</option>
								<option>1997</option>
								<option>1998</option>
								<option>1999</option>
								<option>2000</option>
								<option>2001</option>
								<option>2002</option>
								<option>2003</option>
								<option>2004</option>
								<option>2005</option>
								<option>2006</option>
								<option>2007</option>
								<option>2008</option>
							</select>
							<br/>
							<select name="month" class="r3_input">
								<?php if(isset($value['birthday'])):?>
								<option value=""><?php echo date('m' , strtotime($value['birthday']));?></option>
								<?php else: ?>
								<option>月</option>
								<?php endif;?>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
							<br/>
							<select name="day" class="r3_input">
								<?php if(isset($value['birthday'])):?>
								<option value=""><?php echo date('d' , strtotime($value['birthday']));?></option>
								<?php else: ?>
								<option>日</option>
								<?php endif;?>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
							</select>
						</li>
					</ul>
					<ul class="r3">
						<li class="bol r3_a">籍贯:</li>
						<li class="r3_b">
							<select name="place" class="r3_input">
								<?php if(isset($value['address'])):?>
								<option value="<?=$value['address'];?>"><?=$value['address'];?></option>
								<?php else: ?>
								<option value="">-省份-</option>
								<?php endif;?>
								<option value="北京市" >北京市</option>
								<option value="天津市" >天津市</option>
								<option value="河北省" >河北省</option>
								<option value="山西省" >山西省</option>
								<option value="内蒙古自治区" >内蒙古自治区</option>
								<option value="辽宁省" >辽宁省</option>
								<option value="吉林省" >吉林省</option>
								<option value="黑龙江省" >黑龙江省</option>
								<option value="上海市" >上海市</option>
								<option value="江苏省" >江苏省</option>
								<option value="浙江省" >浙江省</option>
								<option value="安徽省" >安徽省</option>
								<option value="福建省" >福建省</option>
								<option value="江西省" >江西省</option>
								<option value="山东省" >山东省</option>
								<option value="河南省" >河南省</option>
								<option value="湖北省" >湖北省</option>
								<option value="湖南省" >湖南省</option>
								<option value="广东省" >广东省</option>
								<option value="广西壮族自治区" >广西壮族自治区</option>
								<option value="海南省" >海南省</option>
								<option value="重庆市" >重庆市</option>
								<option value="四川省" >四川省</option>
								<option value="贵州省" >贵州省</option>
								<option value="云南省" >云南省</option>
								<option value="西藏自治区" >西藏自治区</option>
								<option value="陕西省" >陕西省</option>
								<option value="甘肃省" >甘肃省</option>
								<option value="青海省" >青海省</option>
								<option value="宁夏回族自治区" >宁夏回族自治区</option>
								<option value="新疆维吾尔自治区" >新疆维吾尔自治区</option>
								<option value="台湾省" >台湾省</option>
								<option value="香港特别行政区" >香港特别行政区</option>
								<option value="澳门特别行政区" >澳门特别行政区</option>
								<option value="海外" >海外</option>
								<option value="其他" >其他</option>
							</select>
						</li>
					</ul>
					<input type="submit" name="sub_user" value="提交" class="submit fl"/>				
				</div>
			</form>
			<?php endforeach;?>
			<?php endif;?>
		</div>
	
	
	</body>
</html>