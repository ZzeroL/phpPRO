	<!DOCTYPE html>
	<html class="root61">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache,must-revalidate">
		<title>个人注册</title>

		<link href='./css/jd-reg.css' type='text/css' rel='stylesheet' >     
		</head>
	<body>
	<div class="header">
		<div class="logo-con w clearfix">
			<a href="" class="logo">
			</a>
			<div class="logo-title">欢 迎 注 册</div>
			<div class="have-account">已有账号 <a href="./jd-login.php">请登录</a></div>
		</div>

	</div>
	<div class="container w">

		<div class="main clearfix">
			<div class="reg-form fl">
				<form action="doreg.php" id="register-form" method="post" novalidate="novalidate">
									<!--chrome autocomplete off bug hack-->
					<input style="display:none" name="hack">
					<input type="password" style="display:none" name="hack1">

					<div class="form-item form-item-account" id="form-item-account">
						<label>用　户　名</label>
					   <input type="text" id="form-account" name="username" class="field" autocomplete="off" maxlength="20" placeholder="您的账户名和登录名" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;支持中文、字母、数字、“-”“_”的组合，4-20个字符">
						<i class="i-status"></i>
					</div>
					<div class="input-tip">
						<span></span>
					</div>
					<div class="form-item">
						<label>设 置 密 码</label>
						
						<input type="password" name="password" id="form-pwd" class="field" maxlength="20" placeholder="建议至少使用两种字符组合" default="&lt;i class=i-def&gt;&lt;/i&gt;建议使用字母、数字和符号两种及以上的组合，6-20个字符">
						<i class="i-status"></i>
					<div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div><div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div></div>
					<div class="input-tip">
						<span></span>
					</div>
					<div class="form-item">
						<label>确 认 密 码</label>
						
					  <input type="password" name="repass" id="form-equalTopwd" class="field" placeholder="请再次输入密码" maxlength="20" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;请再次输入密码">
						<i class="i-status"></i>
					<div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div><div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div>
					</div>
					<div class="input-tip">
						<span></span>
					</div>
					<div class="form-item form-item-account" id="form-item-account">
						<label>姓　 　名</label>
					   <input type="text" id="form-account" name="name" class="field" autocomplete="off" maxlength="20" placeholder="请填写真是姓名" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;支持中文、字母、数字、“-”“_”的组合，4-20个字符">
						<i class="i-status"></i>
					</div>
					<div class="input-tip">
						<span></span>
					</div>
					<div class="item-email-wrap">
							<div class="form-item">
								<label>邮 箱 验 证</label>
					  <input type="text" name="e-mail" id="form-email" class="field ignore" autocomplete="off" placeholder="建议使用常用邮箱" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;完成验证后，你可以用该邮箱登录和找回密码">
								<i class="i-status"></i>
							<ul class="suggest-container email-suggest"><li class=""><div class="value">@qq.com</div></li><li class=""><div class="value">@163.com</div></li><li class=""><div class="value">@126.com</div></li><li class=""><div class="value">@Sina.com</div></li><li class=""><div class="value">@Sohu.com</div></li><li class="suggest-li-last "><div class="value">@Gmail.com</div></li></ul></div>
							<div class="input-tip">
								<span></span>
							</div>
							<div class="orPhone">或 <a href="javascript:;">手机验证</a></div>
						</div>
						<div class="item-phone-wrap">
							<div class="form-item form-item-phone">
								<label class="select-country" id="select-country" country_id="0086">中国 + 86<a href="javascript:void(0) " class="arrow"></a></label>
								<input type="text" id="form-phone" name="phone" class="field" placeholder="建议使用常用手机" autocomplete="off" maxlength="11" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;完成验证后，可以使用该手机登录和找回密码">
								<i class="i-status"></i>
							<div id="scrollbar1"> <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>        <div class="viewport">            <div class="overview">            <ul class="suggest-container phone-suggest"><li item_id="0086" class=""><div class="value">中国 +86</div></li><li item_id="0886" class=""><div class="value">台湾 +886</div></li><li item_id="0852" class=""><div class="value">香港 +852</div></li><li item_id="0060" class=""><div class="value">马来西亚 +60</div></li><li item_id="0065" class=""><div class="value">新加坡 +65</div></li><li item_id="0081" class=""><div class="value">日本 +81</div></li><li item_id="0082" class=""><div class="value">韩国 +82</div></li><li item_id="0001" class=""><div class="value">美国 +1</div></li><li item_id="0001" class=""><div class="value">加拿大 +1</div></li><li item_id="0061" class=""><div class="value">澳大利亚 +61</div></li><li item_id="0064" class=""><div class="value">新西兰 +64</div></li><li item_id="0971" class=""><div class="value">阿联酋 +971</div></li><li item_id="0244" class=""><div class="value">安哥拉 +244</div></li><li item_id="0853" class=""><div class="value">澳门 +853</div></li><li item_id="0055" class=""><div class="value">巴西 +55</div></li><li item_id="0045" class=""><div class="value">丹麦 +45</div></li><li item_id="0049" class=""><div class="value">德国 +49</div></li><li item_id="0007" class=""><div class="value">俄罗斯 +7</div></li><li item_id="0033" class=""><div class="value">法国 +33</div></li><li item_id="0063" class=""><div class="value">菲律宾 +63</div></li><li item_id="0358" class=""><div class="value">芬兰 +358</div></li><li item_id="0031" class=""><div class="value">荷兰 +31</div></li><li item_id="0420" class=""><div class="value">捷克 +420</div></li><li item_id="0041" class=""><div class="value">瑞士 +41</div></li><li item_id="0046" class=""><div class="value">瑞典 +46</div></li><li item_id="0066" class=""><div class="value">泰国 +66</div></li><li item_id="0058" class=""><div class="value">委内瑞拉 +58</div></li><li item_id="0034" class=""><div class="value">西班牙 +34</div></li><li item_id="0039" class=""><div class="value">意大利 +39</div></li><li item_id="0091" class=""><div class="value">印度 +91</div></li><li item_id="0062" class=""><div class="value">印度尼西亚 +62</div></li><li item_id="0044" class=""><div class="value">英国 +44</div></li><li item_id="0084" class="suggest-li-last "><div class="value">越南 +84</div></li></ul></div>            </div>            </div></div>
								<div class="input-tip">
									<span></span>
								</div>
											   
						</div>
						<div class="form-item form-item-account" id="form-item-account">
							<label>邮 　 　箱</label>
							<input type="text" id="form-account" name="email" class="field" autocomplete="off" maxlength="20" placeholder="请输入邮箱" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;支持中文、字母、数字、“-”“_”的组合，4-20个字符">
							<i class="i-status"></i>
						</div>
						<div class="input-tip">
							<span></span>
						</div>
						<div class="form-item form-item-authcode">
							<label>验　证　码</label>
							<input type="text" autocomplete="off" name="code" id="authCode" maxlength="6" class="field form-authcode" placeholder="请输入验证码" >
							<img src="./code.php" onclick="code()" id="code">
						</div>
						<div class="input-tip">
							<span></span>
						</div>
						<div class="input-tip">
							<span></span>
						</div>
						<div class="input-tip">
							<span></span>
						</div>
						
									<div class="form-agreen">
						<div><input type="checkbox" name="agreen" checked="">我已阅读并同意<a href="javascript:;" id="protocol">《京东用户注册协议》</a> </div>
						<div class="input-tip">
							<span></span>
						</div>
					</div>
					<div>
						<button type="submit" class="btn-register">立即注册</button>
					</div>
				</form>
			</div>
			<div class="reg-other">
				<div class="phone-fast-reg">
				</div>
								<div class="company-reg">
						<a href="https://reg.jd.com/reg/company" target="_blank">
							<i class="i-company"></i>
							<span>企业用户注册</span>
						</a>
					</div>
											<div class="inter-cust">
						<a href="https://reg.joybuy.com/reg/person.html" target="_blank">
							<i class="i-global"></i>
							<span>INTERNATIONAL<br>CUSTOMERS</span>
						</a>
					</div>
						</div>
		</div>
	  
	</div>
	<div class="footer w">
		<div class="links">
			<a rel="nofollow" target="_blank" href="https://www.jd.com/intro/about.aspx"> 关于我们</a>|
			<a rel="nofollow" target="_blank" href="https://www.jd.com/contact/">联系我们</a>|
			<a rel="nofollow" target="_blank" href="https://zhaopin.jd.com/">人才招聘</a>|
			<a rel="nofollow" target="_blank" href="https://www.jd.com/contact/joinin.aspx">商家入驻</a>|
			<a rel="nofollow" target="_blank" href="https://www.jd.com/intro/service.aspx">广告服务</a>|
			<a rel="nofollow" target="_blank" href="https://app.jd.com/">手机京东</a>|
			<a target="_blank" href="https://club.jd.com/links.aspx">友情链接</a>|
			<a target="_blank" href="https://media.jd.com/">销售联盟</a>|
			<a href="https://club.jd.com/" target="_blank">京东社区</a>|
			<a href="https://gongyi.jd.com/" target="_blank">京东公益</a>|
			<a target="_blank" href="https://en.jd.com/" clstag="pageclick|keycount|20150112ABD|9">English Site</a>
		</div>
		<div class="copyright">
			Copyright&#169;2004-2016&nbsp;&nbsp;京东JD.com&nbsp;版权所有
		</div>
	</div>

		
	  
		<a target="_blank" href="https://surveys.jd.com/index.php?r=survey/index/sid/447941/lang/zh-Hans" class="feedback" style="margin-top: -85px; position: fixed; right: 0px; bottom: 50%;"></a>
		


	<script>
	function code()
	{
		document.getElementById('code').src = "./code.php?"+Math.random();
	}
</script>
	</body></html>