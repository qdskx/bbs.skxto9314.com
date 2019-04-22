<!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>登录管理中心</title>
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/adminBase.css' />
		<link rel='stylesheet' type='text/css' href='<?=$dir;?>/css/G-login.css' />
	</head>
	
	<body>
		<div class='logo clearFix'> 
			<img src='<?=$dir;?>/img/h_bg.jpg' style='position:absolute;top:151px;left:337px;' />
			<div class='logo1 clearFix'>
				<p>
					Discuz! 是 <a href="https://www.tencent.com/zh-cn/index.html" target="_blank">腾讯</a> 
					旗下 <a href="http://www.comsenz.com/">Comsenz</a> 
					公司推出的以社区为基础的专业建站平台，帮助网站实现一站式服务。
				</p>
			</div>
			<div class='login clearFix'>
				<form action="adminLogin.php" method="post" enctype="multipart/form-data">
					用户名：<?php if(isset($_SESSION['username'])):?><input type='text' name="username" value="<?=$_SESSION['username'];?>" /><br/><?php else: ?><input type='text' name="username" value="admin" /><br/>
					<?php endif;?>
					密&nbsp;码：<input type='password' name="password"  /><br/>
					提&nbsp;问：<select name="question" style='width:173px;border-top:2px solid #9A9A9A;border-left:2px #9A9A9A solid;'> 
						<option selected value=0>无安全提问</option>
						<option value=1>母亲的名字</option> 
						<option value=2>爷爷的名字</option>
						<option value=3>父亲出生的城市</option>
						<option value=4>你其中一位老师的名字</option>
						<option value=5>你个人计算机的型号</option>
						<option value=6>你最喜欢的餐馆名称</option>
						<option value=7>驾驶执照最后四位数字</option>
					</select> <br/>
					回&nbsp;答：<input type='text' name="answer"/><br/>
					<input type='submit' value="提交" style="margin-left:48px" name='subLogin'/>
				</form>
				
			</div>

		</div>
		<div class='footer clearFix'>
			Powered by 
			<a href='http://www.discuz.net/forum.php' target="_blank">
			Discuz!
			</a> 
			X2 © 2001-2011, 
			<a href="http://www.comsenz.com/">Comsenz</a> 
			Inc.
		</div>
	
	
	
	</body>
</html>