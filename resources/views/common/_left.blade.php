<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
    <!-- 用户中心 -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe705;</i> {{trans('common.User Center')}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/admin/usernews" data-title="{{trans('common.Personal Details')}}" href="/admin/usernews">{{trans('common.Personal Details')}}</a></li>
                    <!-- <li><a data-href="/article/draft"  data-title="{{trans('common.Change Username')}}"   href="javascript:void(0)">{{trans('common.Change Username')}}</a></li> -->
                    <li><a data-href="/admin/Cpass"  data-title="{{trans('common.Change Password')}}" href="javascript:void(0)">{{trans('common.Change Password')}}</a></li>
                </ul>
            </dd>
        </dl>
        </dl>

        <!-- 商品管理 -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe620;</i> {{trans('common.Merchandise Control')}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/goods/goods_add"   data-title="{{trans('common.Control Add')}}" href="javascript:void(0)">{{trans('common.Control Add')}}</a></li>
                    <li><a data-href="/article/draft"  data-title="{{trans('common.Control Property')}}"   href="javascript:void(0)">{{trans('common.Control Property')}}</a></li>
                    <li><a data-href="/category/show"  data-title="{{trans('common.Control Type')}}" href="javascript:void(0)">{{trans('common.Control Type')}}</a></li>
                </ul>
            </dd>
        </dl>
        </dl>

        <!-- 订单管理 -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe687;</i> {{trans('common.Order Management')}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/admin/index"   data-title="{{trans('common.Order Succeed')}}" href="javascript:void(0)">{{trans('common.Order Succeed')}}</a></li>
                    <li><a data-href="/article/draft"  data-title="{{trans('common.Order loser')}}"   href="javascript:void(0)">{{trans('common.Order loser')}}</a></li>
                    <li><a data-href="/category/show"  data-title="{{trans('common.Order Over')}}" href="javascript:void(0)">{{trans('common.Order Over')}}</a></li>
                    <li><a data-href="/category/show"  data-title="{{trans('common.Order Refund')}}" href="javascript:void(0)">{{trans('common.Order Refund')}}</a></li>
                </ul>
            </dd>
        </dl>
        </dl>

        <!-- 管理员模块 -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe62d;</i> {{trans('common.Administrator')}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/admin/index"   data-title="{{trans('common.User Accredit')}}" href="javascript:void(0)">{{trans('common.User Accredit')}}</a></li>
                    <li><a data-href="/article/draft"  data-title="{{trans('common.User Start')}}"   href="javascript:void(0)">{{trans('common.User Start')}}</a></li>
                    <li><a data-href="/category/show"  data-title="{{trans('common.User Add')}}" href="javascript:void(0)">{{trans('common.User Add')}}</a></li>
                </ul>
            </dd>
        </dl>
        </dl>
        <!-- 图片管理 -->
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe613;</i> {{trans('common.Photo Manage')}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a data-href="/admin/index"   data-title="{{trans('common.Photo Add')}}" href="javascript:void(0)">{{trans('common.Photo Add')}}</a></li>
                </ul>
            </dd>
        </dl>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
