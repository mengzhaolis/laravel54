@include('common._meat')
<body>
@include('common.header')
@include('common._left')

<div class="dislpayArrow hidden-xs"></div>
	<form action="" method="post" class="form form-horizontal" id="demoform-2" style="margin-left:15%;margin-right:15%">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">新密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password" id="password">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">密码验证：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password2" id="password2">
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