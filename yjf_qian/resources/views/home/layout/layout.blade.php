
<body>
<?php 
use Symfony\Component\HttpFoundation\Session\Session;
$session = new session();
$info=$session->get("info");
?>
    <script data-fixed="true">var w=document.body.clientWidth;1480>w&&(document.body.className+=" w-1000");</script>
    <script src="//a.dwstatic.com/huya/main/lib/jq_ud_mod_4de7709.js" data-fixed="true"></script>
    <!-- S 通用头部 -->
        <div class="duya-header" id="duya-header">
    <div class="duya-header-wrap clearfix">
        <div class="duya-header-bd clearfix">
            <h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">
                <a href="http://www.yjf.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img src="images/logo.png" alt="虎牙直播" width="120" height="36"></a>
            </h1>
            <div class="duya-header-nav">
                <span class="hy-nav-link"><a href="http://www.yjf.com/" class="hy-nav-title clickstat" eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>
                <span class="hy-nav-link"><a href="http://www.yjf.com/zb" class="hy-nav-title hiido_stat clickstat"  hiido_code="10004221" eid="click/navi/zhibo" eid_desc="点击/导航/直播">直播</a></span>
                <div class="hy-nav-expand">
                    <div class="hy-nav-title nav-main" id="nav-main"><a href="http://www.yjf.com/type">分类</a><i class="icon-arrow"></i></div>
                    <div class="nav-expand-list nav-expand-game">
                        <i class="arrow"></i>
                    </div>
                </div>
                <!-- <span class="hy-nav-link"><a href="http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->
            </div>
            <div class="duya-header-search clearfix" >
                <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.yjf.com/search.php" target="_blank">
                    <input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">
                    <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton" eid_desc="点击/搜索/搜索按钮"></button>
                </form>
            </div>
            <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic" eid_desc="点击/推荐/顶部导航图片"></div>
            <div class="duya-header-control clearfix">
                <div class="hy-nav-right hy-nav-kaibo">
                    <a class="hy-nav-title clickstat" href="http://www.yjf.com/e/zhubo" eid="click/navi/kaibo" eid_desc="点击/导航/开播" target="_blank">
                        <i class="hy-nav-icon hy-nav-video-icon"></i>
                        <span class="title">开播</span>
                    </a>
                    <div class="nav-expand-list nav-expand-kaibo">
                        <i class="arrow"></i>
                        <div class="kaibo-nav">
                            <a target="_blank" href="http://www.yjf.com/e/zhubo"><i class="hy-nav-video-icon"></i><span>我要开播</span></a>
                            <a target="_blank" href="#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right hy-nav-kaibo">
                    <a class="hy-nav-title clickstat" href="/per" eid="click/navi/kaibo" eid_desc="点击/导航/开播" target="_blank">
                        <i class="hy-nav-icon hy-nav-video-icon"></i>
                        <span class="title">个人中心</span>
                    </a>
                    <div class="nav-expand-list nav-expand-kaibo">
                        <i class="arrow"></i>
                        <div class="kaibo-nav">
                            <a target="_blank" href="/per"><i class="hy-nav-video-icon"></i><span>个人中心</span></a>
                            <a target="_blank" href="#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right nav-subscribe success-login">
                    <a class="hy-nav-title new-clickstat" href="http://i.huya.com/index.php?m=Subscribe" target="_blank" report='{"eid":"click/position","position":"click/navi/dingyue"}'>
                        <i class="hy-nav-icon hy-nav-subscribe-icon"></i>
                        <span class="title">订阅</span>
                    </a>
                    <div class="nav-expand-list">
                        <i class="arrow"></i>
                        <div class="subscribe-hd clearfix" style="display:none;">
                            <h5>我订阅的有<em class="subscribe-key">0</em>个正在直播</h5>
                        </div>
                        <div class="subscribe-bd" style="display:none;">
                            <ul class="subscribe-list"></ul>
                            <a class="subscribe-all" href="http://i.huya.com/index.php?m=Subscribe" target="_blank">全部订阅</a>
                        </div>
                        <div class="mod-list-more">
                            <div class="more-loading">
                                <i class="icon-loading"></i>
                                <em>正在加载您的订阅...</em>
                            </div>
                            <div class="more-empty">
                                <i class="icon-empty"></i>
                                <p>暂无订阅的直播。<br/><em>你可以在主播的播放页进行订阅喔！</em></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right hy-nav-history">
                    <a class="hy-nav-title nav-history new-clickstat" id="nav-history" href="http://i.huya.com/index.php?m=Subscribe&watch=1" target="_blank" report='{"eid":"click/position","position":"click/navi/lishi"}'>
                        <i class="hy-nav-icon hy-nav-history-icon"></i>
                        <span class="title">历史</span>
                    </a>
                    <div class="nav-expand-list nav-expand-history">
                        <i class="arrow"></i>
                        <div class="load-history">
                            <div class="mod-list-more">
                                <div class="more-loading">
                                    <i class="icon-loading"></i>
                                    <em>正在加载您的历史...</em>
                                </div>
                            </div>                            
                        </div>
                        <a href="http://i.huya.com/index.php?m=Subscribe&watch=1" class="nav-expand-history-more J_gNavLogin" style="display:none" target="_blank">更多&gt;</a>
                    </div>
                </div>
                <?php if($info == ""){?>
                    
                
                <div class="hy-nav-right un-login" style="display: block;" id="mysign">
                    <div class="hy-nav-title">
                        <i class="hy-nav-icon hy-nav-login-icon"></i>
                        <div class="un-login-btn">
                            <a href="javascript:;" class="sign">登录</a>
                            <i>|</i>
                            <a href="javascript:;" class="login">注册</a>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right nav-user success-login" style="display: none;" id="myinfo">
                    <a target="_blank" href="/per" class="nav-user-title">
                        <img alt="头像" src="http://huyaimg.dwstatic.com/avatar/1036/22/2b20cf854dfc5bcd45ed1fec247dc2_180_135.jpg" id="login-userAvatar" name="img">
                        <span id="login-username" class="name">.</span>
                        <i></i>
                    </a>
                    <div class="nav-expand-list">
                        <i class="arrow"></i>
                        <div class="tt-user-card">
                            <a href="#" id="nav-loggout" class="btn-exit"><i class="hy-nav-exit-icon"></i><span>退出</span></a>
                            <div class="u-info">
                                <a target="_blank" href="/per" id="J_huyaNavUserCardAvatar" class="avatar">
                                    <img alt="头像" src="" id="login-userAvatar" name="img">
                                </a>
                                <p id="J_huyaNavUserCardNick" class="nick"><span id="login-username" class="name">.</span><i class="gender gender0"></i></p>
                            
                            </div>
                            <div class="u-assets">
                                <div class="bd">
                                    <span class="type-name">资产</span>
                                    <ul class="type">
                                        <li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">0</em></li>
                                        <li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk">0</em></li>
                                        <li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb">0</em></li>
                                    </ul>
                                    <a report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/recharge&quot;}" href="http://i.huya.com/?evt=recharge" target="_blank" class="topup new-clickstat">充值</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{ $info=json_decode($info,true);?>
                    <div class="hy-nav-right un-login" style="display: none;" id="mysign">
                    <div class="hy-nav-title">
                        <i class="hy-nav-icon hy-nav-login-icon"></i>
                        <div class="un-login-btn">
                            <a href="javascript:;" class="sign">登录</a>
                            <i>|</i>
                            <a href="javascript:;" class="login">注册</a>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right nav-user success-login" style="display: block;" id="myinfo">
                    <a target="_blank" href="/per" class="nav-user-title">
                        <img alt="头像" src="<?=$info['img']?>" id="login-userAvatar">
                        <span id="login-username" class="name"><?=$info['username'];?></span>
                        <i></i>
                    </a>
                    <div class="nav-expand-list">
                        <i class="arrow"></i>
                        <div class="tt-user-card">
                            <a href="#" id="nav-loggout" class="btn-exit"><i class="hy-nav-exit-icon"></i><span>退出</span></a>
                            <div class="u-info">
                                <a target="_blank" href="/per" id="J_huyaNavUserCardAvatar" class="avatar">
                                    <img alt="头像" src="<?=$info['img']?>" id="login-userAvatar">
                                </a>
                                <p id="J_huyaNavUserCardNick" class="nick"><span id="login-username" class="name"><?=$info['username'];?></span><i class="gender gender0"></i></p>
                                                                
                            </div>
                            <div class="u-assets">
                                <div class="bd">
                                    <span class="type-name">资产</span>
                                    <ul class="type">
                                        <li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb"><?=$info["jin_d"]?></em></li>
                                        <li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk"><?=$info["jin_d_j"]?></em></li>
                                        <li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb"><?=$info["yin_d"]?></em></li>
                                    </ul>
                                    <a report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/recharge&quot;}" href="http://i.huya.com/?evt=recharge" target="_blank" class="topup new-clickstat">充值</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <script type="text/javascript">
                    //登录
                    $(".sign").click(function(){
                        document.getElementById("box").style.display ="block";
                        document.getElementById("login").style.display ="none";
                        document.getElementById("sign").style.display ="block";

                    });
                    //注册
                    $(".login").click(function(){
                        document.getElementById("box").style.display ="block";
                        document.getElementById("sign").style.display ="none";
                        document.getElementById("login").style.display ="block";

                    });
                    //关闭
                    function del(){
                         document.getElementById("box").style.display ="none";
                    };
                    function submit(){
                        var　username=$(".username").val();
                        var pwd=$(".pwd").val();
                        var csrf=$(".csrf").val();
                        $.ajax({
                           type: "GET",
                           url: "/login/"+username+"/"+pwd+"/"+csrf,
                           dataType:'json',
                           success: function(msg){
                            alert(msg.msgs);
                             if(msg.msgs == "登陆成功"){
                                $("#mysign").css("display","none");
                                $("#box").css("display","none");
                                sign(msg.img,msg.username,msg.jin_d,msg.jin_d_j,msg.yin_d);
                             }if(msg.msgs == "已登录"){
                                $("#mysign").css("display","none");
                                $("#box").css("display","none");
                                sign(msg.img,msg.username,msg.jin_d,msg.jin_d_j,msg.yin_d);
                            }
                           }
                        });
                    };
                    function submitadd(){
                        var　username=$(".add_username").val();
                        var pwd=$(".add_pwd").val();
                        var csrf=$(".add_csrf").val();
                        $.ajax({
                           type: "GET",
                           url: "/loginadd/"+username+"/"+pwd+"/"+csrf,
                           dataType:'json',
                           success: function(msg){
                            alert(msg.msgs);
                             if(msg.msgs == "注册成功"){
                                $("#login").css("display","none");
                                $("#box").css("display","none");
                                sign(msg.img,msg.username,msg.jin_d,msg.jin_d_j,msg.yin_d);
                             }if(msg.msgs == "注册失败"){
                                $("#mysign").css("display","none");
                            }
                           }
                        });
                    }
                    //显示登录用户信息
                    function sign(img,username,jin_d,jin_d_j,yin_d){
                        $("#myinfo").css("display","block");
                        //头像
                        $("[name=img]").attr("src",img);
                        //用户资产
                        var str='<li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">'+jin_d+'</em></li><li class="type-ticket"><i class="gold-ticket"></i><em id="J_huyaNavUserCardAssetsTk">'+jin_d_j+'</em></li><li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb">'+yin_d+'</em></li>';
                        $(".type").html(str);
                        //用户昵称
                        $(".name").html(username);
                        //显示登录用户信息
                        
                        $("#myinfo").css("display","block");
                    }
                    </script>
            </div>
        </div>
        <div id="box" style="display:none">
            <div class="login-box" id="sign" style="display:none">
        <div class="login">
            <div class="login-main">
                <div class="login-hd">
                    <a class="tab-btn active">登录</a>
                    <i class="line J_line" style="left: 0px;"></i>
                </div>

                <div class="login-bd">
                <div class="other-login">
                    <input type="hidden" name="_token" class="csrf" value="<?=csrf_token()?>"/>
                    <span class="edit-item">用户名：</span>
                    <span class="edit-item"><input type="text" name="username" class="username"></span>
                    <span class="edit-warning edit-warning_nick"></span>
                    </br>
                    <span class="edit-item">密&nbsp;&nbsp;&nbsp;码：</span>
                    <span class="edit-item"><input type="password" name="pwd" class="pwd"></span>
                    <span class="edit-warning edit-warning_nick"></span>
                <a class="login-btn login-btn-wechat clickstat" href="javascript:;" onclick="submit()">登录</a>
                </div>
               </div>

            </div>
            <div class="login-sidebar">
                <h2 class="title">合作账号登录</h2>
                <div class="other-login">
                    <a eid_desc="点击/导航/微信账号登录" eid="click/nav/weixinlogin" class="login-btn login-btn-wechat clickstat" href="/weibologin"><i class="icon"></i>微信帐号登录</a>
                    <a login-type="qq" eid_desc="点击/导航/QQ账号登录" eid="click/nav/qqlogin" class="login-btn login-btn-qq clickstat"><i class="icon"></i>QQ帐号登录</a>
                    <a login-type="weibo" eid_desc="点击/导航/新浪微博登录" eid="click/nav/weibologin" href="/auth/weibo" class="login-btn login-btn-weibo clickstat"><i class="icon"></i>微博帐号登录</a>
                </div>
            </div>
        </div>
        <a title="关闭" id="js-login-close" class="login-close" onclick="del()"></a>
        <p class="login-wran-tip">使用即为同意《<a title="虎牙软件用户协议" target="_blank" href="http://blog.huya.com/product/90" class="warn-link">虎牙软件用户协议</a>》</p>
    </div>

    <!-- 注册 -->
    <div class="login-box" id="login" style="display:none">
        <div class="login">
            <div class="login-main">
                <div class="login-hd">
                    <a class="tab-btn active">注册</a>
                    <i class="line J_line" style="left: 0px;"></i>
                </div>

                <div class="login-bd">
                <div class="other-login">
                    <input type="hidden" name="_token" class="add_csrf" value="<?=csrf_token()?>"/>
                    <span class="edit-item">用户名：</span>
                    <span class="edit-item"><input type="text" name="add_username" class="add_username"></span>
                    <span class="edit-warning edit-warning_nick"></span>
                    </br>
                    <span class="edit-item">密&nbsp;&nbsp;&nbsp;码：</span>
                    <span class="edit-item"><input type="password" name="add_pwd" class="add_pwd"></span>
                    <span class="edit-warning edit-warning_nick"></span>
                    <a class="login-btn login-btn-wechat clickstat" href="javascript:;" onclick="submitadd()">注册</a>
                </div>
                    
                </div>

            </div>
            <div class="login-sidebar">
                <h2 class="title">合作账号登录</h2>
                <div class="other-login">
                    <a eid_desc="点击/导航/微信账号登录" eid="click/nav/weixinlogin" class="login-btn login-btn-wechat clickstat"><i class="icon"></i>微信帐号登录</a>
                    <a login-type="qq" eid_desc="点击/导航/QQ账号登录" eid="click/nav/qqlogin" class="login-btn login-btn-qq clickstat"><i class="icon"></i>QQ帐号登录</a>
                    <a login-type="weibo" eid_desc="点击/导航/新浪微博登录" eid="click/nav/weibologin" href="javascript:;" class="login-btn login-btn-weibo clickstat"><i class="icon"></i>微博帐号登录</a>
                </div>
            </div>
        </div>
        <a title="关闭" id="js-login-close" class="login-close" onclick="del()"></a>
        <p class="login-wran-tip">使用即为同意《<a title="虎牙软件用户协议" target="_blank" href="http://blog.huya.com/product/90" class="warn-link">虎牙软件用户协议</a>》</p>
    </div>
        </div>
    </div>
</div>

<!-- E 通用头部 -->






@yield('content')
 <script src="//hd.huya.com/huya_err_monitor/huyahiidoweb_err_monitor-min.js" id="huyahiido_err_monitor" act="webhuyaerror" pageview="index" data-fixed="true"></script>
    <script src="//a.dwstatic.com/huya/main/js/headerFunction_e188182.js" data-fixed="true"></script>
    <script src="//a.dwstatic.com/huya/main/lib/jquery.lazyload_95128f9.js" data-fixed="true"></script>
    <script type="text/javascript" charset="utf-8" src="//a.dwstatic.com/huya/main/pkg/auto_combine_3c78e_fd1aae1.js"></script>
<script type="text/javascript" >
require.resourceMap({"res":{"h5player":{"url":"//a.dwstatic.com/huya/main/modules/h5player/h5player_1a89b41.js"},"dialog":{"url":"//a.dwstatic.com/huya/main/modules/dialog/dialog_2827212.js"}},"pkg":{}});
</script>
<script>
        var rec4x4Data = [{"contents":[{"uid":"128803871","yyid":"9025806","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/17e293714b28d484f5790b911f97bf3134420255","isBluRay":"0","gameFullName":"QQ\u98de\u8f66","liveSourceType":"0","gameHostName":"9","screenType":"0","previewUrl":"http:\/\/ws.streamhls.huya.com\/huyalive\/388935-2557326855-10983635207407534080-257731198-10057-A-1500205264-1_100\/playlist.m3u8","activityId":"6983001","activityCount":"248293","privateHost":"9025806","level":"26","nick":"\u6e1d\u4e07258\u4e36\u9ece\u65ed\u4e1c","totalCount":"9734","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1093\/5d\/07d19029258300398c26bd27de1b26_180_135.jpg?1495455862","gid":"9","bitRate":"2000","channel":"388935","liveChannel":"2557326855","introduction":"\u5173\u6ce87\u670818\u65e5\u864e\u7259\u8f66\u738b\u70ed\u8eab\u8d5b","bussType":"1"},{"uid":"167305620","yyid":"154603319","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/f3fccb8f8b3755331cc5bee2e8593757e4f8d867","isBluRay":"1","gameFullName":"\u6781\u54c1\u98de\u8f66Online","liveSourceType":"0","gameHostName":"2563","screenType":"0","activityId":"20303065","activityCount":"36888","privateHost":"154603319","level":"18","nick":"\u633d\u6b4c","totalCount":"2071","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1096\/6a\/5116c6b9a139ee14d7726c55dabac4_180_135.jpg?1493303430","gid":"2563","bitRate":"3000","channel":"16007726","liveChannel":"2524486230","introduction":"\u56fd\u670d\u7b2c\u4e00\u8f66\u795e \u5907\u6218\u8f66\u795e\u8d5b","bussType":"1"},{"uid":"431653844","yyid":"350069160","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/8c014ddc70456bc8a441f6cdd2fb0bd9059ab0a2","isBluRay":"0","gameFullName":"\u7089\u77f3\u4f20\u8bf4","liveSourceType":"0","gameHostName":"393","screenType":"0","activityId":"27502960","activityCount":"60602","privateHost":"lastpriest","level":"19","nick":"\u6700\u540e\u4e00\u53ea\u7267\u5e08","totalCount":"24941","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1066\/c6\/c7842e28339e0cd8c3d0473579b956_180_135.jpg?0","gid":"393","bitRate":"2000","channel":"82492154","liveChannel":"82492154","introduction":"\u533b\uff1a\u6293\u6293\u6293\u6d4b\u8bd5\u7248","bussType":"1"},{"uid":"1557374026","yyid":"1754665915","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/6ea8a52fe9d47fd2263b84aab47c86aa0f30281b","isBluRay":"1","gameFullName":"\u5b88\u671b\u5148\u950b","liveSourceType":"0","gameHostName":"2174","screenType":"0","activityId":"27498270","activityCount":"51154","privateHost":"azsya","level":"20","nick":"\u68a6\u60f3-SYA","totalCount":"4111","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1086\/0d\/54022711ce48dcfc1dc8c279879aa5_180_135.jpg?1490419280","gid":"2174","bitRate":"5000","channel":"35868033","liveChannel":"2571789265","introduction":"SYA-\u7b2c\u4e00\u730e\u7a7a","bussType":"1"}],"themeLogo":"http:\/\/livewebbs2.dwstatic.com\/huya_hot_rec_theme_logo_1488335027.png","themeTitle":"\u7f51\u6e38\u7ade\u6280"},{"contents":[{"uid":"967499203","yyid":"932805375","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/8500a84bc245509ca87d8623612606c3fdc3ec31","isBluRay":"1","gameFullName":"\u4e3b\u673a\u6e38\u620f","liveSourceType":"0","gameHostName":"1964","screenType":"0","previewUrl":"http:\/\/ws.streamhls.huya.com\/hqlive\/17226001-2586904632-11110670792310915072-1935121862-10057-A-1500205068-1_100\/playlist.m3u8","activityId":"17560727","activityCount":"2896733","privateHost":"xiaoyugame","level":"28","nick":"\u5c0f\u5b87\u70ed\u6e38\u76f4\u64ad","totalCount":"35902","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1098\/a9\/9bfea10ce2c8c983d897409a302205_180_135.jpg","gid":"1964","bitRate":"3000","channel":"17226001","liveChannel":"2586904632","introduction":"90098\u4e3b\u64ad\u5347\u5b66\u8003\u6838\u76f4\u64ad\u4e2d","bussType":"2"},{"uid":"1332412075","yyid":"1468996087","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/65cb24bc631c7186fbf9dfee94c4fc0cc3c1cfa6","isBluRay":"1","gameFullName":"\u7edd\u5730\u6c42\u751f","liveSourceType":"0","gameHostName":"2793","screenType":"0","activityId":"22817392","activityCount":"103105","privateHost":"quedee","level":"22","nick":"\u4f17\u5a31-\u7f3a\u5fb7\u513f\u00b790808","totalCount":"2943","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1045\/e7\/f08c9fa20a71183d463fa5dc7af488_180_135.jpg?1496231871","gid":"2793","bitRate":"3000","channel":"81028608","liveChannel":"2575720454","introduction":"\u5c2c\u67aa\u738b\u5b50","bussType":"2"},{"uid":"12392657","yyid":"35858030","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/847f1b79b82ac901b751969e61c893245ba65da3","isBluRay":"1","gameFullName":"\u8df3\u4f1e\u4e4b\u738b","liveSourceType":"0","gameHostName":"1902","screenType":"0","activityId":"28583698","activityCount":"75462","privateHost":"h1z1fanhua","level":"23","nick":"\u7e41\u534e","totalCount":"4837","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1019\/f9\/c03c3dfc94db7424d8a38a28e2f543_180_135.jpg?1487695651","gid":"1902","bitRate":"3000","channel":"17816659","liveChannel":"2561598237","introduction":"\u516d\u5929\u540e\uff0c\u65b0\u7684\u5de5\u4f1a\u542f\u822a\uff01","bussType":"2"},{"uid":"1276772376","yyid":"1397565593","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/0487b2a76547c59369d8c03947a3f0d9fa94b5dd","isBluRay":"1","gameFullName":"\u6211\u7684\u4e16\u754c","liveSourceType":"0","gameHostName":"1732","screenType":"0","activityId":"22594348","activityCount":"1161727","privateHost":"xiatiany","level":"27","nick":"\u590f\u5929y","totalCount":"121995","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1047\/66\/4e89f8b229f6ba66e4158f110b902e_180_135.jpg?1494421604","gid":"1732","bitRate":"3000","channel":"16790087","liveChannel":"2594341764","introduction":"Five.\u4e8c\u9f99\u54e5 \u6211\u56de\u6765\u5566","bussType":"2"}],"themeLogo":"http:\/\/livewebbs2.dwstatic.com\/huya_hot_rec_theme_logo_1488335054.png","themeTitle":"\u5355\u673a\u70ed\u6e38"},{"contents":[{"uid":"1707748632","yyid":"1948836095","screenshot":"http:\/\/huyaimg.dwstatic.com\/cdnimage\/anchorpost\/1085\/a7\/dc175dbd7403660c0cce3faa72d9dd_1663_1497962005.jpg","isBluRay":"1","gameFullName":"\u661f\u79c0","liveSourceType":"0","gameHostName":"1663","screenType":"0","activityId":"36109723","activityCount":"161695","privateHost":"1948836095","level":"25","nick":"RD\u751c\u59b9","totalCount":"1707","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1085\/a7\/dc175dbd7403660c0cce3faa72d9dd_180_135.jpg?1492356399","gid":"1663","bitRate":"3000","channel":"77690206","liveChannel":"2586640350","introduction":"\u7ad9\u4f4f\uff01\u4e0d\u8981\u8dd1\uff01","bussType":"8"},{"uid":"1088585102","yyid":"1158923739","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/e8345aad1411934568808afc16bbd2a94c70aadc","isBluRay":"0","gameFullName":"\u7f8e\u98df","liveSourceType":"6","gameHostName":"2752","screenType":"1","activityId":"24788730","activityCount":"15432","privateHost":"yashen","level":"20","nick":"AzZ\u4e36\u5c0f\u4e9a","totalCount":"1056","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1044\/3f\/1d944cbebf18b04f16f0eb860ebaa7_180_135.jpg?1489639151","gid":"2752","bitRate":"2000","channel":"26584092","liveChannel":"26584092","introduction":"\u9999\u8fa3\u5c0f\u9f99\u867e\uff0c\u7206\u7092\u86cf\u5b50\uff0c\u51c9\u62cc\u732a\u8033","bussType":"8"},{"uid":"1501374403","yyid":"1683954582","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/41d6e7f6d11691795079f9699103345ba65654d6","isBluRay":"0","gameFullName":"\u4e61\u91ce","liveSourceType":"6","gameHostName":"2836","screenType":"1","activityId":"24918171","activityCount":"1019256","privateHost":"1683954582","level":"23","nick":"\u6840\u695a\u3001\u6d41\u6c13\u5154","totalCount":"5128","avatar180":"http:\/\/downhdlogo.yy.com\/hdlogo\/144144\/3\/44\/37\/1501374403\/u1501374403BpyXS5J.png","gid":"2836","bitRate":"750","channel":"93085901","liveChannel":"93085901","introduction":"\u6d77\u5357\u73af\u5c9b152","bussType":"8"},{"uid":"1011477490","yyid":"978650320","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/3b20f5ddbced9520e426c6dd89ad5146ed46002d","isBluRay":"0","gameFullName":"\u9177\u73a9","liveSourceType":"6","gameHostName":"2165","screenType":"1","previewUrl":"http:\/\/ws.streamhls.huya.com\/hqlive\/63321768-63321768-271964922684899328-2023078436-10057-A-1500195576-1_100\/playlist.m3u8","activityId":"23263300","activityCount":"2137741","privateHost":"daleilei","level":"26","nick":"\u6237\u5916\u864e\u5b50","totalCount":"77658","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1005\/2a\/ee3618f42b751b52815d33a3952144_180_135.jpg?1479369146","gid":"2165","bitRate":"1200","channel":"63321768","liveChannel":"63321768","introduction":"\u864e\u5b50\uff1a\u5404\u79cd\u642d\u8baa\u7f8e\u5973\u5404\u79cd\u4e92\u52a8","bussType":"8"}],"themeLogo":"http:\/\/livewebbs2.dwstatic.com\/huya_hot_rec_theme_logo_1488335035.png","themeTitle":"\u5a31\u4e50\u5929\u5730"},{"contents":[{"uid":"227518226","yyid":"214691649","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/914e98ea545550afa853ed05e473847feb20a6f9","isBluRay":"1","gameFullName":"\u738b\u8005\u8363\u8000","liveSourceType":"0","gameHostName":"2336","screenType":"0","previewUrl":"http:\/\/ws.streamhls.huya.com\/hqlive\/46992905-2607678222-11199892681981427712-455159908-10057-A-1500204577-1_100\/playlist.m3u8","activityId":"4497513","activityCount":"4487317","privateHost":"haishi","level":"27","nick":"\u55e8\u6c0f","totalCount":"637715","avatar180":"http:\/\/downhdlogo.yy.com\/hdlogo\/144144\/26\/82\/51\/0227518226\/u227518226njjesoUd.png","gid":"2336","bitRate":"3500","channel":"46992905","liveChannel":"2607678222","introduction":"\u3010\u55e8\u6c0f\u3011\u4e2d\u5355\u6740\u795e\u5355\u6392\u6cd5\u738b\u6c5f\u6d77\u6d9b","bussType":"3"},{"uid":"1641950957","yyid":"1862797660","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/2e0fa4fdf61419564b84dc5f620ed15e33d9e80a","isBluRay":"0","gameFullName":"\u7403\u7403\u5927\u4f5c\u6218","liveSourceType":"0","gameHostName":"2411","screenType":"0","activityId":"33521133","activityCount":"996320","privateHost":"qingfeng","level":"25","nick":"\u6e05\u98ce\u5f90\u6765","totalCount":"162466","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1036\/bc\/1e044486a75d5c30bddf7b4bf26270_180_135.jpg?0","gid":"2411","bitRate":"2000","channel":"63650371","liveChannel":"2595514996","introduction":"\u5e26\u7c89\u72c2\u9b54\u54e6\uff5e\uff5e\uff5e","bussType":"3"},{"uid":"1016605197","yyid":"983841397","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/20b7015ba3d114bd5c9fd20c81308283b5132fb0","isBluRay":"1","gameFullName":"CF\u67aa\u6218\u738b\u8005","liveSourceType":"0","gameHostName":"2413","screenType":"0","activityId":"19574734","activityCount":"365006","privateHost":"3401sansheng","level":"24","nick":"\u4e45\u5e1d-\u4e09\u58f0","totalCount":"21386","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1088\/0c\/76be86dfd5c71edd75a124e85141c5_180_135.jpg?1495930572","gid":"2413","bitRate":"3000","channel":"56198962","liveChannel":"2547184396","introduction":"\u4e09\u58f0\u5de1\u5c71\u8bb0:\u82f9\u679c\u5fae\u4fe1\u533a,AK\u67aa\u795e\u6e21\u52ab\u4e86\uff01","bussType":"3"},{"uid":"161303350","yyid":"148529663","screenshot":"http:\/\/screenshot.dwstatic.com\/yysnapshot\/4cc09f7576d3e743a3ff63bc3c47355962ab1233","isBluRay":"0","gameFullName":"\u5929\u5929\u72fc\u4eba\u6740","liveSourceType":"0","gameHostName":"2774","screenType":"0","activityId":"20103118","activityCount":"60276","privateHost":"doodoo","level":"21","nick":"\u6735\u6735-\u539a\u7231\u65e0\u9700\u591a\u8a00","totalCount":"2907","avatar180":"http:\/\/huyaimg.dwstatic.com\/avatar\/1020\/e1\/0e8e4a58d9c549a8a912412c7cb780_180_135.jpg?1480782735","gid":"2774","bitRate":"1000","channel":"77259038","liveChannel":"2567064193","introduction":"\u6311\u6218100\u8fde\u80dcIng...\u76ee\u524d\u8fde\u80dc3\u573a","bussType":"3"}],"themeLogo":"http:\/\/livewebbs2.dwstatic.com\/huya_hot_rec_theme_logo_1488335045.png","themeTitle":"\u624b\u6e38\u4f11\u95f2"}]        </script>
    <script>
        require("app/index");
    </script>
    <!--BODY_END-->
    <!-- S 页面公用功能 -->
    <script type="text/javascript" data-fixed="true">
    HUYA_UTIL.getScript('//a.dwstatic.com/huya/main/js/header_search_tip_420f603.js');
</script>
<!-- S 后台推送消息 -->
    <!--[if lte IE 7]>
    <script  type='text/javascript' src='http://www.huya.com/base/js/push/json3.min.js'></script>
    <![endif]-->
    <!--[if lte IE 9]>
    <script type='text/javascript' src='http://www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
    <![endif]-->
    <script data-fixed="true">
        var PUSH_PROXY_URL="http://channelproxy.huya.com/";
        var PUSH_ENABLE=true;//推送开关
        var matchNoticeData=[];//赛事直播间预告数据
    </script>
    <script type='text/javascript' src='http://www.huya.com/base/js/push/push-min.js?t=20160907'></script>
    <script type='text/javascript' src='http://www.huya.com/base/js/push/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->
    <script data-fixed="true">
        (function(win){
            var $win = $(win);
            var reportTimer = null;

            function getScriptCache(url,callback,prop){

                var head = document.getElementsByTagName("head")[0] || document.documentElement;
                var script = document.createElement("script");
                script.type = "text/javascript";
                script.async = true;
                script.charset = "utf-8";
                if(prop){
                    for(var p in prop){
                        script.setAttribute(p,prop[p]);
                    }
                }

                script.src = url;
                script.onload = script.onreadystatechange = function () {
                    if (!script.readyState || /loaded|complete/.test(script.readyState)) {
                        callback && callback();
                        script.onload = script.onreadystatechange = null;
                        if (script.parentNode && !prop) {
                            script.parentNode.removeChild(script);
                        }
                    }
                };
                head.insertBefore(script, null);
            }

            function report(){

                getScriptCache('http://hdjs.hiido.com/hiido_internal.js?siteid=www@huya',function(){},{
                    id:'_hiido_internal_script_id_'
                })
                
                getScriptCache('http://szhuodong.duowan.com/s/rp/ya-huya.min.js',function(){
                    var oHref = parseQueryString(location.href);
                    zhReport({
                        rso: oHref['rso'] || oHref['from'] || "",
                        rso_desc: oHref['rso_desc'] || "",
                        eid: "pageview/home",
                        eid_desc:"pageview/首页"
                    });

                },{
                    pro : 'huya_web',
                    id : 'yaScript'
                })
            }

            $win.on('load.report',function(){
                reportTimer && clearTimeout(reportTimer);
                $win.off('.report');
                $win=null;
                report();
            });

            reportTimer = setTimeout(function(){
                $win.off('.report');
                $win=null;
                report();
            }, 3500);

        })(window);
    </script>
    <!-- S 通用底部 -->
    <script data-fixed="true">
    document.write(function(obj){
var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};
with(obj||{}){
__p+='<div class="huya-footer">\r\n
        <div class="huya-footer__hd">\r\n 
           <dl class="huya-footer_friend">\r\n
           <dt>友情链接</dt>\r\n
            <dd><a href="http://www.duowan.com/" target="_blank">多玩游戏</a></dd>\r\n
            <dd><a href="http://wan.yy.com/" target="_blank">YY游戏</a></dd>\r\n            
            <dd><a href="http://games.qq.com/" target="_blank">腾讯游戏频道</a></dd>\r\n            
            <dd><a href="http://www.pcgames.com.cn/" target="_blank">太平洋游戏</a></dd>\r\n            
            <dd><a href="http://www.ooqiu.com/" target="_blank">全球电竞网</a></dd>\r\n            
            <dd><a href="http://games.ifeng.com/esports/" target="_blank">凤凰游戏电竞</a></dd>\r\n            
            <dd><a href="http://www.aipai.com/" target="_blank">爱拍</a></dd>\r\n            
            <dd><a href="http://www.56.com/game" target="_blank">搜狐56视频</a></dd>\r\n            
            <dd><a href="http://games.iqiyi.com/" target="_blank">爱奇艺游戏</a></dd>\r\n            
            <dd><a href="http://video.duowan.com/" target="_blank">多玩视频</a></dd>\r\n            
            <dd><a href="http://www.hiyd.com/" target="_blank">Hi运动健身</a></dd>\r\n            
            <dd><a href="http://www.yy.com" target="_blank">视频直播</a></dd>\r\n        
            </dl>\r\n        <dl class="huya-footer_help">\r\n            
            <dt>主播帮助</dt>\r\n            
            <dd><a href="http://www.huya.com/e/zhubo" target="_blank">新人主播指引</a></dd>\r\n            
            <dd><a href="http://www.huya.com/download/#players_pc" target="_blank">开播工具下载</a></dd>\r\n            
            <dd><a href="http://help.huya.com/276" target="_blank">开播教程引导</a></dd>\r\n        </dl>\r\n        
            <div class="huya-footer_prod">\r\n            <h2>虎牙产品下载</h2>\r\n            
            <div class="huya-app_qrcode">\r\n                <div class="app_qrcode_img"></div>  \r\n                
            <p>扫描下载虎牙APP</p>\r\n            </div>\r\n            <ul class="huya-footer_prod_list">\r\n                
            <li><i class="huya-footer_iphone"></i><a href="http://www.huya.com/download/#iphone" target="_blank">iPhone版</a></li>\r\n                
            <li><i class="huya-footer_ipad"></i><a href="http://www.huya.com/download/#ipad" target="_blank">iPad版</a></li>\r\n                
            <li><i class="huya-footer_andriod"></i><a href="http://www.huya.com/download/#android" target="_blank">Andriod版</a></li>\r\n                
            <li><i class="huya-footer_pad"></i><a href="http://www.huya.com/download/#pad" target="_blank">Andriod Pad</a></li>\r\n                
            <!-- <li><i class="huya-footer_tv"></i><a href="http://www.huya.com/download/#tv" target="_blank">TV版</a></li> -->\r\n                
            <li><i class="huya-footer_pc"></i><a href="http://www.huya.com/download/#pc" target="_blank">PC版</a></li>\r\n                
            <li><i class="huya-footer_wp"></i><a href="http://www.huya.com/download/#wp" target="_blank">Win10版/WP版</a></li>\r\n            
            </ul>\r\n        </div>\r\n        <div class="huya-footer_other">\r\n            <h2>关注我们</h2>\r\n            
            <div class="huya-pub_number">\r\n                <div class="pub_number_img"></div>  \r\n                <p>扫描关注微信公众号</p>\r\n            
            </div>\r\n            <ul class="footer_other_list">\r\n                
            <li><i class="huya-footer_sina"></i><a href="http://weibo.com/90dwyy" target="_blank">虎牙官方微博</a></li>\r\n                
            <li><i class="huya-footer_qieba"></i><a href="http://tieba.baidu.com/f?ie=utf-8&kw=%E8%99%8E%E7%89%99%E7%9B%B4%E6%92%AD&fr=search" target="_blank">贴吧交流</a></li>\r\n
            <li><a target="_blank" href="http://blog.huya.com/index.php?m=Announcement&do=show&type=notice&id=67">不良信息投诉与举报</a></li>\r\n            
            </ul>\r\n        </div>\r\n    </div>\r\n    <div class="huya-footer__bd">\r\n        <div class="huya-footer__nav">\r\n            
            <p>\r\n                
            <a target="_blank" href="http://www.huya.com/zt/usc/#about" class="clickstat" eid="click/home/yejiao/guanyu" eid_desc="点击/首页/页脚/关于虎牙">关于虎牙</a>|\r\n
            <a target="_blank" href="http://hr.huya.com/" class="clickstat" eid="click/home/yejiao/joinus" eid_desc="点击/首页/页脚/加入我们">加入我们</a>|\r\n                
            <a target="_blank" href="http://www.huya.com/zt/usc/#contact" class="clickstat" eid="click/home/yejiao/lianxi" eid_desc="点击/首页/页脚/合作联系">合作联系</a>|\r\n                
            <a target="_blank" href="http://www.huya.com/zt/usc/#sites" class="clickstat" eid="click/home/yejiao/youlian" eid_desc="点击/首页/页脚/友链">友情链接</a>|\r\n                
            <a target="_blank" href="http://www.huanju.cn/s/contact.html">广告热线：020-82120508</a>|\r\n                
            <a target="_blank" href="http://gm.duowan.com/user/center/centerOpen.do?product=HUYA&source=YY" class="clickstat" eid="click/home/yejiao/kefu" eid_desc="点击/首页/页脚/客服">在线客服</a>|\r\n
            <a target="_blank" href="http://www.huanju.cn/1207/m_205349693256.html">隐私权保护政策</a>|\r\n                
            <a target="_blank" href="http://www.huanju.cn/1207/m_205353486825.html">版权保护投诉指引</a>\r\n            
            </p>\r\n            <p>\r\n                
            <span>增值电信业务经营许可证</span>\r\n                
            <a target="_blank" href="http://assets.dwstatic.com/common/docs/B2-20050785.jpg">粤B2-20050785</a>\r\n                
            <a target="_blank" href="http://assets.dwstatic.com/common/docs/B2-20120129.jpg">B2-20120129</a>|\r\n                
            <a target="_blank" href="http://a.dwstatic.com/huya/main/img/huya_wlwh_xkz.png">粤网文[2015]1712-302号</a>\r\n            
            </p>\r\n            <p>\r\n                <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备16120983号-1</a>|\r\n                
            <span><img src="http://yyweb.yystatic.com/pc/images/company/j.gif" alt="">粤公网安备44011302000242号 </span>|\r\n                
            <a target="_blank" href="http://assets.dwstatic.com/common/docs/4401060100548.jpg">穗公网监备案证第4401060100548号</a>|\r\n                
            <a target="_blank" href="http://www.gdca.gov.cn/">广东省通信管理局</a>|\r\n                
            <a target="_blank" href="http://a.dwstatic.com/huya/main/img/huya_wl_xkz.png">网络出版服务许可证</a>|\r\n                
            <a target="_blank" href="http://a.dwstatic.com/huya/main/img/huya_jm2_xkz.jpg">节目制作经营许可证</a>\r\n            </p>\r\n        </div>\r\n        
            <div class="huya-footer__copyright">\r\n            <p>\r\n                <span>广州虎牙信息科技有限公司</span>\r\n                
            <span>&nbsp;版权所有&nbsp;©&nbsp;2016-2019&nbsp;</span>\r\n                <a target="_blank" href="http://www.huya.com/">huya.com</a>\r\n                
            <a target="_blank" href="http://jb.ccm.gov.cn/" class="clickstat" eid="click/home/yejiao/jubao" eid_desc="点击/首页/页脚/举报">12318全国文化市场举报网站</a>\r\n                
            <a target="_blank" href="http://www.12377.cn/" class="clickstat" eid="click/home/yejiao/jubao2" eid_desc="点击/首页/页脚/举报2">中国互联网不良信息举报中心</a>\r\n                
            <span>客服&举报电话：020-82120010</span>\r\n            </p>\r\n        </div>\r\n        
            <div class="huya-footer__hy-logo">\r\n            <img src="http://a.dwstatic.com/huya/main/img/hy-logo.png" width="322" height="46"/>\r\n            
            <a target="_blank" id="_pingansec_bottomimagesmall_brand" href="http://si.trustutn.org/info?sn=950170109026610628628&certType=1">
            <img src="http://a.dwstatic.com/huya/main/img/brand_bottom_small.jpg"/></a>\r\n        </div>\r\n    </div>\r\n</div>\r\n';
}
return __p;
}())
</script>
<!-- S 通用底部 -->
<script data-fixed="true">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


    <!-- E 通用底部 -->
    <script data-fixed="true">navigator.userAgent.toLocaleLowerCase().indexOf("chrome")<0&&(window.onerror=function(){try{console.log.apply(console,arguments)}catch(e){}return!TT.type}),!function(e){e.loadScript(["http://szhuodong.duowan.com/feq/huya/yy-f2e-huya.min"])}(function(){function e(t,n){var a=n[t];if(a){t++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void e(t,n))};var r=new Date;r.setSeconds(0),r.setMilliseconds(0),r=r.getTime(),o.async=!0,o.src=a+"?_="+r,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(t){t&&t.length&&t instanceof Array&&e(0,t)}}}());</script>
