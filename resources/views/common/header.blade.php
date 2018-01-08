<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">M-zl</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">B-blog</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">admin</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
		
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>
						<a href="/AdminUsers/information">
							<img src="{{Session::get('avatar')}}" class="round" style="width: 35px;height: 35px; border-radius: 70px;" >
						</a>
					</li>
					<li class="dropDown dropDown_hover"> <a href="/AdminUsers/information" class="dropDown_A">admin<i class="Hui-iconfont"></i></a>
						<ul class="dropDown-menu menu radius box-shadow" >
							<li><a href="/AdminUsers/information" style="color:#000">修改用户</a></li>
							<!--<li><a href="/Login/toggle">{{trans('common.change_over')}}</a></li>-->
							<li><a href="/Login/reset" style="color:#000">修改密码</a></li>
							<li><a href="/Login/logout" style="color:#000">推出</a></li>
							
						</ul>
					</li>
					<li class="dropDown dropDown_hover">
						<a href="javascript:;" class="dropDown_A">切换语言 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:changeLang('zh-CN');" style="color:#000">中文</a></li>
							<li><a href="javascript:changeLang('en');" style="color:#000">英文</a></li>
						</ul>
					</li>					
					
				</ul>
			</nav>
		</div>
	</div>
</header>
