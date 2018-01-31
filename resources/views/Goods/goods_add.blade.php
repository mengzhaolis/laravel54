@include('common._meat')
<heade>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</heade>
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<form action="" method="post" class="form form-horizontal" id="demoform" style="margin-left:15%;margin-right:15%">
	{{ csrf_field() }}
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" name="goods_name" id="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">一句话描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" name="one_describe" id="one_describe">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">原价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" placeholder="" name="goods_oldpice" id="goods_oldpice">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">促销价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" placeholder="" name="goods_pice" id="goods_pice">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品封面图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div style="width:80px;height:80px;float:left;">
					<img src="" alt="" class="ing" style="width:80px;height:80px;">
					<span class="btn-upload" style="float:left;margin-left:80px;margin-top:-31px;"> <a href="javascript:void();" class="btn btn-primary radius upload=btn"><i class="Hui-iconfont">&#xe642;</i>文件浏览 </a>
						<input type="file" multiple id="fil" class="input-file">
						<input type="hidden" id="face_img" name="goods_faceimg" value="">
					</span>
				</div>
		
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3" style="display:inline-block;float:left;">商品详情图：</label>
			<div id="uploader-demo" style="float:left">
				<!--用来存放item-->
				<div id="fileList" class="uploader-list" style="margin-bottom:10px;"></div>
				<div id="filePicker" style="margin-left:14px;">选择图片</div>
				<input type="hidden" id="img_path" name="goods_matterimg" value="">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3" >运费：</label>
			<div class="formControls col-xs-8 col-sm-9" >
				<input type="text" class="input-text" autocomplete="off" placeholder="" name="goods_feright" id="goods_feright">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">分类：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="goods_type">
					<option value="" selected>请选择类别</option>
					@foreach($data as $val)						
						<option value="{{$val['id']}}">{{$val['good_type']}}</option>
						@foreach($val['son'] as $value)
							<option value="{{$value['id']}}">&nbsp;&nbsp;&nbsp;&nbsp;{{$value['good_type']}}</option>
						@endforeach
					@endforeach					
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">数量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" placeholder="" name="goods_nums" id="goods_nums">
			</div>
		</div>
		
		<div class="row cl">
		    <label class="form-label col-xs-4 col-sm-3">商品详情：</label>
		    <div class="formControls col-xs-8 col-sm-9">
				<script id="editor" type="text/plain" style="width:700px;height:500px;"></script>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">服务承诺：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" placeholder="" name="goods_promise" id="goods_promise">
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
<script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/admin/webupload/dist/webuploader.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script>
//富文本编辑器
$(document).ready(function () {
	$('.i-checks').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
	});
});
var ue = UE.getEditor('editor');

// 图片回显（商品封面图）
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
		// var id = $("#a_id").val();
         fordate.append('image',fils);  //用append方法添加键值对
        //  fordate.append('id',id);  //用append方法添加键值对
		 
        var srcc=window.URL.createObjectURL(fils);
		$(".ing").attr({'src':srcc,'width':80+'px','heigth':80+'px'});  
         $.ajax({  //发送ajax请求
              url: "/goods_img_face",  
              type: "post",  
              data: fordate, 
              processData : false,  
              contentType : false,   
              success: function(data){  
				// console.log(data)
				$("#face_img").val(data);
                // layer.msg(data.message,{icon:data.status});
				// parent.window.location.reload();
              },
			  'error':function(data)
			  {
				var result = JSON.parse(data.responseText);
                // 非200请求，获取错误消息
                layer.msg(data.message,{icon:data.status});
			  }
            });  

     });




//百度上传（web uploader）
var img_path = Array();
var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: true,
	formData:{
		_token:'{{ csrf_token() }}'
	},
    // swf文件路径
    swf: '/js/admin/webupload/dist/webuploader.swf',

    // 文件接收服务端。
    server: '/goods_img/add',

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    },
	fileNmuLimit:5,
});
// 当有文件添加进来的时候
uploader.on( 'fileQueued', function( file ) {
    var $li = $(
            '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                
            '</div>'
            ),
        $img = $li.find('img');

	var $list = $("#fileList");
	
    // $list为容器jQuery实例
    $list.append( $li );

    // 创建缩略图
    // 如果为非图片文件，可以不用调用此方法。
    // thumbnailWidth x thumbnailHeight 为 100 x 100
    uploader.makeThumb( file, function( error, src ) {
        if ( error ) {
            $img.replaceWith('<span>不能预览</span>');
            return;
        }

        $img.attr( 'src', src );
    }, 100, 100 );
});
uploader.on( 'uploadProgress', function( file, percentage ) {
    var $li = $( '#'+file.id ),
        $percent = $li.find('.progress span');

    // 避免重复创建
    if ( !$percent.length ) {
        $percent = $('<p class="progress"><span></span></p>')
                .appendTo( $li )
                .find('span');
    }

    $percent.css( 'width', percentage * 100 + '%' );
});

// 文件上传成功，给item添加成功class, 用样式标记上传成功。
uploader.on( 'uploadSuccess', function( file,response ) {
	img_path.push(response);
	// console.log(response)
	var path = img_path.join(',');
	var $li = $( '#'+file.id ),
        $success = $li.find('div.success');
		$('#img_path').val(path);
	// 避免重复创建
    if ( !$success.length ) {
        $success = $('<div class="success"></div>').appendTo( $li );
    }

    $success.text('上传成功');	
    // $( '#'+file.id ).addClass('upload-state-done');
});

// 文件上传失败，显示上传出错。
uploader.on( 'uploadError', function( file ) {
    var $li = $( '#'+file.id ),
        $error = $li.find('div.error');

    // 避免重复创建
    if ( !$error.length ) {
        $error = $('<div class="error"></div>').appendTo( $li );
    }

    $error.text('上传失败');
});

// 完成上传完了，成功或者失败，先删除进度条。
uploader.on( 'uploadComplete', function( file ) {
    $( '#'+file.id ).find('.progress').remove();
});
$("#demoform").validate
({
	rules:{
		goods_name:{
			required: true,
		},
		goods_price:
		{
			required: true,
		},
		goods_oldprice:
		{
			required: true,
		},
		goods_feright:
		{
			required: true,
		},
		goods_nums:
		{
			required: true,
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form)
		{
			$(form).ajaxsubmit({
				'type'   : 'post',
				'url'    : "/goods/goods_add",
				'success': function (data) {
					alert(data)
					console.log(data)
					layer.msg(data.message, {icon:data.status});
					parent.window.location.reload();
					// window.location.href="/Login/logout";
				},
				error: function (data) {
					var result = JSON.parse(data.responseText);
					layer.msg(result.message,{icon:result.status});
				}
			})
		}

	}
})
</script>