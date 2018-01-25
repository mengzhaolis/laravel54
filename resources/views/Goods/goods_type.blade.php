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
            <form action="" method="post" class="form form-horizontal" id="demo2" style="margin-left:10%;margin-right:15%">
            {{ csrf_field() }}
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">一级分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="good_type" id="good_type">
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

    <ul id="Huifold1" class="Huifold" style="margin-left:15%;">
        @foreach($onetype as $type)
            <li class="item"> 
                <h4>{{$type->good_type}}
                    <input type="hidden" class="p_id" value="{{$type->id}}">
                    <b onclick="modal(this)">+</b><p style="float:right;"><strong>—</strong></p>
                </h4>
            </li>
        @endforeach
    </ul>
<div id="modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <form action="javascript:void(0)" method="post" class="form form-horizontal" id="demo3" style="margin-left:10%;margin-right:15%">
            <input type="hidden" id="token" value="{{ csrf_token() }}">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">下一级分类名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="" name="good_type" id="good_type2">
            </div>
        </div>
        
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary" id="erti" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
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

<script>
    function modaldemo(){
        $("#modal-demo").modal("show")}
    function modalalertdemo(){
        $.Huimodalalert('我是消息框，2秒后我自动滚蛋！',2000)
    };
   
    //添加一级类
    $("#demo2").validate({
        submitHandler:function(form)
        {
            $(form).ajaxSubmit
            ({
                'type':'post',
                'url' :'/goods/goods_type',
                'success':function(data)
                {
                    // console.log(data)
                    layer.msg(data.message,{icon:data.status});
                    parent.window.location.reload();
                },
                'error':function()
                {
                    var result = JSON.parse(data.responseText);
					layer.msg(result.message,{icon:result.status});
                }
                
            });
        }
    });
     

    function modal(th)
    {
         $("#modal").modal("show")
        var p_id = $(th).siblings(".p_id").val();
            $("#erti").click(function(){
            
            var good_type2 = $("#good_type2").val();
            var token = $("#token").val();
            url='/goods/goods_type2';
            data = {'_token':token,'p_id':p_id,'good_types':good_type2};
            $.post(url,data,function(msg){
                // alert(msg)
                layer.msg(msg.message,{icon:msg.status});
                parent.window.location.reload();
            })
        });
    }

    function modalalertdemo(){
        $.Huimodalalert('我是消息框，2秒后我自动滚蛋！',2000)
    };
    //添加二级分类
    
    

</script>