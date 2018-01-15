@include('common._meat')
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<div style="margin-left:15%;margin-right:15%">
		<input class="btn btn-primary size-M radius" type="button" onClick="modaldemo()" value="添加图片">
		<!--<input class="btn btn-primary size-M radius" type="button" value="编辑规格">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">-->
        <div class="cl">
            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTEwYmJhZjQzYSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1MTBiYmFmNDNhIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ0LjA1NDY4NzUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" alt="140x140" class="thumbnail" style="width: 100px; height: 100px;">
        </div>
	</div>
    <div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <form action="" method="post" class="form form-horizontal" id="demoform-2" style="margin-left:10%;margin-right:15%">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">图片名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="goods_name" id="goods_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">上传图片：</label>
            
            <div class="formControls col-xs-8 col-sm-9">
                <div style="width:80px;height:80px;float:left;">
                    <img src="" alt="" class="ing" style="width:80px;height:80px;">
                    <span class="btn-upload" style="float:left;margin-left:80px;margin-top:-20px;"> <a href="javascript:void();" class="btn btn-primary radius upload=btn"><i class="Hui-iconfont">&#xe642;</i>图像浏览 </a>
                        <input type="file" multiple id="fil" class="input-file">
                    </span>
                </div>
        
            </div>
            
        </div>
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <button class="btn" data-dismiss="modal" style="margin-left:22px;" aria-hidden="true">关闭</button>
            </div>
        </div>
        </form>
        </div>
    </div>
    
</div>
        
			
</body>
@include('common.footer')
<!-- <script src="/js/admin/lib/jquery.js"></script> -->
<script src="/js/admin/lib/jquery.form.js"></script>
<script src="/js/admin/dist/jquery.validate.min.js"></script>
<script src="/js/admin/dist/localization/messages_zh.js"></script>
<!-- <script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/zh-cn.js"></script> -->
<script>
    function modaldemo(){
        $("#modal-demo").modal("show")}
    function modalalertdemo(){
        $.Huimodalalert('我是消息框，2秒后我自动滚蛋！',2000)
    }
    //图片上传
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
              url: "/AdminUsers/images",  
              type: "post",  
              data: fordate, 
              processData : false,  
              contentType : false,   
              success: function(data){  
				// console.log(data)
                layer.msg(data.message,{icon:data.status});
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
</script>