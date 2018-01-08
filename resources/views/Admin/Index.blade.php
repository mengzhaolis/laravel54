@include('common._meat')
<body>
@include('common.header')
@include('common._left')
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="首页" data-href="">首页</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	
</body>
@include('common.footer')
<!-- <script src="/js/admin/lib/jquery.js"></script> -->
<!-- <script src="/js/admin/lib/jquery.form.js"></script> -->
<!-- <script src="/js/admin/dist/jquery.validate.min.js"></script> -->
<!-- <script src="/js/admin/dist/localization/messages_zh.js"></script> -->
<script>
	// $("#demo").validate({
	// 	rules:{
	// 		username:{
	// 			required:true,
	// 		},
	// 		email:{
	// 			required:true,
	// 		},
	// 		phone:{
	// 			required:true,
	// 		},
	// 	},
	// 	onkeyup:false,
	// 	focusCleanup:true,
	// 	success:'valid',
	// 	submitHandler:function(form){
	// 		$('form').ajaxSubmit({
	// 			type:'post',
	// 			url:'/admin/add',
	// 			success:function(data)
	// 			{
	// 				// alert(data)
	// 				//向后台发起请求并且做出成功之后的提示
	// 				layer.msg(data.message, {icon:data.status});
	// 			},
	// 			error:function(data)
	// 			{
	// 				//执行错误的提示
	// 			},
	// 		});
	// 	}
	// });
</script>
