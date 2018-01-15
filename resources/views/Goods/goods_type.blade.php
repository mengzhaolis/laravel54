@include('common._meat')
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<div style="margin-left:15%;margin-right:15%">
		<input class="btn btn-primary size-M radius" type="button" onClick="modaldemo()" value="添加类别">
		<input class="btn btn-primary size-M radius" type="button" value="编辑规格">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">
	</div>
    <div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <form action="" method="post" class="form form-horizontal" id="demoform-2" style="margin-left:10%;margin-right:15%">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">一级分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="goods_name" id="goods_name">
            </div>
        </div>
        
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
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
</script>