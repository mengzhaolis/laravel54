@include('common._meat')
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<div style="margin-left:15%;margin-right:15%">
		<input class="btn btn-primary size-M radius" type="button" value="添加规格">
		<input class="btn btn-primary size-M radius" type="button" value="编辑规格">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">
		<input class="btn btn-primary size-M radius" type="button" value="默认尺寸">
	</div>
</body>
@include('common.footer')
<!-- <script src="/js/admin/lib/jquery.js"></script> -->
<script src="/js/admin/lib/jquery.form.js"></script>
<script src="/js/admin/dist/jquery.validate.min.js"></script>
<script src="/js/admin/dist/localization/messages_zh.js"></script>
<!-- <script type="text/javascript" charset="utf-8" src="/js/admin/bianjiqi/ueditor.config.js"></script>
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
    </script> -->