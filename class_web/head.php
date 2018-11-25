<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				<div id="logo">
					<a href="index.php"><img  src="img/logo.png" alt="Simpler"></a>
				</div>
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li><?php	
					@session_start();
					if(empty($_SESSION['username'])) {
						echo "<a href='./login.php'>亲，请登录</a>";
					}else{
						echo "欢迎您，".$_SESSION['username'].","."<a href='./logout.php'>退出</a>";
					}
					?>
					</li>
					<li><a href="index.php"><span>主页</span></a></li>
					<li><a href="page.html">简介</a>
						<ul>
							<li><a href="page-elements.html">班级简介</a></li>
							<li><a href="page-icons.html">教师简介</a></li>
							<li><a href="page-typography.html">班委简介</a></li>
						</ul>
					</li>
					<li class="current-menu-item"><a href="./blog.php">文体活动</a></li>
					<li><a href="portfolio.html">荣誉榜</a></li>
				    <li><a href="contact.html">寝室文化</a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->

			</div>
		</header>