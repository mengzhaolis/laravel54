@include('common._meat')
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<form action="" method="post" class="form form-horizontal" id="demoform-2" style="margin-left:15%;margin-right:15%">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" name="goods_name" id="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">一句话描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="" name="one_miao" id="one_miao">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">原价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="" name="pice" id="pice">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">促销价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="" name="promotion" id="promotion">
			</div>
		</div>
		
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品封面图：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile1" id="uploadfile1" readonly style="width:200px">
				<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">商品详情图：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile1" id="uploadfile1" readonly style="width:200px">
				<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">运费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="" name="fee" id="fee">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">分类：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="city">
					<option value="" selected>请选择类别</option>
					<option value="1">北京</option>
					<option value="2">上海</option>
					<option value="3">广州</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">数量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="" name="nums" id="nums">
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
				<input type="password" class="input-text" autocomplete="off" placeholder="" name="nums" id="nums">
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
<script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
        var ue = UE.getEditor('editor');
    </script>