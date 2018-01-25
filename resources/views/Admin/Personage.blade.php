@include('common._meat')
<heade>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</heade>
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<form action="" method="post" class="form form-horizontal" id="demo2" style="margin-left:15%;margin-right:15%">
		{{ csrf_field() }}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="email" id="email" value="{{$usernews->email}}">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="4~16个字符，字母/中文/数字/下划线" name="name" id="username" value="{{$usernews->name}}">
			</div>
		</div>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password" id="password">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">密码验证：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password2" id="password2">
			</div>
		</div>-->

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">{{trans('admin.Head portrait')}}：</label>
			
			<div class="formControls col-xs-8 col-sm-9">
				<div style="width:80px;height:80px;float:left;">
					<img src="{{$usernews->head_img}}" alt="" class="ing" style="width:80px;height:80px;">
					<span class="btn-upload" style="float:left;margin-left:80px;margin-top:-31px;"> <a href="javascript:void();" class="btn btn-primary radius upload=btn"><i class="Hui-iconfont">&#xe642;</i>{{trans('admin.Head portrait')}} </a>
						<input type="file" multiple id="fil" class="input-file">
					</span>
				</div>
		
			</div>
			
		</div>
		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所在城市：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="city">
					<option value="" selected>请选择城市</option>
					<option value="1">北京</option>
					<option value="2">上海</option>
					<option value="3">广州</option>
				</select>
				</span> </div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea class="textarea"  placeholder="说点什么...最少输入10个字符" name="miaoshu" onKeyUp="member_jian(this,500)">{{$usernews->miaoshu}}</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</section>
</body>
@include('common.footer')
<!-- <script src="/js/admin/lib/jquery.js"></script> -->
<script src="/js/admin/lib/jquery.form.js"></script>
<script src="/js/admin/dist/jquery.validate.min.js"></script>
<script src="/js/admin/dist/localization/messages_zh.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
$(function(){
	var lang = $('textarea').text().length;
    var num = 500 - lang;
	if(num==500)
	{
		num=0;
	}
    $('.textarea-length').html(num);

	// 图片回显
	var img_url = $('.ing').attr('src');
	//  alert(img_url)
	if(img_url ==false)
	{
		$(".ing").attr({'src':'/avatar.jpg','width':80+'px','heigth':80+'px'});
	}
	var fil=$("#fil");  
     $("<img>").insertBefore("#fil");  
     fil.bind('change',function(){ 
         var fordate=new FormData();  //得到一个FormData对象：
         var fils=$("#fil").get(0).files[0];  //得到file对象
        //  console.log(fils);
		var id = $("#a_id").val();
         fordate.append('image',fils);  //用append方法添加键值对
         fordate.append('id',id);  //用append方法添加键值对
		 
        var srcc=window.URL.createObjectURL(fils);
		$(".ing").attr({'src':srcc,'width':80+'px','heigth':80+'px'});  
         $.ajax({  //发送ajax请求
              url: "/img/add",  
              type: "post",  
              data: fordate, 
              processData : false,  
              contentType : false,   
              success: function(data){  
				// console.log(data)
                layer.msg(data.message,{icon:data.status});
				parent.window.location.reload();
              },
			  'error':function(data)
			  {
				var result = JSON.parse(data.responseText);
                // 非200请求，获取错误消息
                layer.msg(data.message,{icon:data.status});
			  }
            });  

     });
});

$("#demo2").validate({
		rules:{
            email:{
				required:true,
				email:true,
			},
			name:{
				required:true,
				minlength:4,
				maxlength:16
			},
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				'type'   : 'post',
				'url'    : "/admin/usernews",
				'success': function (data) {
					// alert(data)
					layer.msg(data.message, {icon:data.status});
					parent.window.location.reload();
					// window.location.href="/Login/logout";
				},
				error: function (data) {
					var result = JSON.parse(data.responseText);
					layer.msg(result.message,{icon:result.status});
				}
			});
		}
	});
		

	
function member_jian(key,val)
{
    var nums = $('.textarea').val().length;
    // alert(nums)
    var num = val - nums;
	if(num==500)
	{
		num=0;
	}
    $('.textarea-length').html(num);
}


</script>