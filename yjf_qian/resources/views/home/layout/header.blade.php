

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="虎牙直播是国内领先的互动直播平台,900万人同时在线,提供高清、流畅的赛事直播和游戏直播.虎牙包含英雄联盟lol直播、dota2直播、穿越火线cf直播、dnf直播等热门游戏直播以及、美女主播、网络电视">
    <meta name="Keywords" content="lol直播,lol游戏直播,英雄联盟直播,dota2直播,dota直播,dnf直播,cf直播,游戏直播,赛事直播,YY直播,美女主播,虎牙,虎牙直播">
    <title>直播个人中心</title>
    <base href="http://www.yjf.com/home/">
    <link rel="stylesheet" href="css/admin.css">
    <style type="text/css">
        .main-col{*padding-bottom: 140px;}
    </style>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script></head>

<style>

    .mod-message{

        border-top: none;

        margin-top: 0;

    }

</style>

<body>


<script src="js/header.js?hiido_no=0&hiido_wid=www,_22dfa14"></script>
<div class="admin-wrap">

    <style type="text/css">
        .nav-scroll-wrap .nav-section .icon-recommendtag{
            background-image: url(images/icon-recommendtag.png);
        }
        .nav-scroll-wrap .nav-section .icon-room{
            background-image: url(images/room_man_icon.png);
        }
        /*CDK兑换*/
        .nav-scroll-wrap .nav-section .icon-CDKey_change {
            background-image: url(images/icon_CDKey.png);
        }
        /*中奖查询*/
        .nav-scroll-wrap .nav-section .icon-maw {
            background-image: url(images/icon_my_awards.png);
        }
        /*虎牙认证*/
        .nav-scroll-wrap .nav-section .icon-auth{background-image: url('images/auth_icon.png');}
        /*广告推广*/
        .nav-scroll-wrap .nav-section .icon-ad{
            background-image: url('images/icon-ad.png');
        }
    </style>
    <script>
        var currentMenu = 'money',
                indexUrl = "http://i.huya.com/",
                indexFile = "index.php";
    </script>
    <script type="text/javascript" src="js/main_menu.js"></script>
    <script type="text/javascript" src="js/cookies.js"></script>

    @yield('content')
    <script type="text/javascript">

        $(document).ready(function(){

            var indexUrl = '';

            var tmp=window.location.href;



            page_util = {

                gotopage: function (currentPage) {

                    var form = document.getElementById('pageForm');

                    form.action=indexUrl;

                    document.getElementById('pageForm_page').value=currentPage;

                    form.submit();

                }

            }

        });

    </script>



</div>





</div>

</div>







</div>



</div>

</div>

<script type="text/javascript" src="js/footer.js"></script>

<script src="js/js&f=main.js"></script>

<script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>

<script type="text/javascript" src="js/report_info.js"></script>

<!--/footer-->

<!-- S 后台推送消息 -->

<!--[if lte IE 7]>

<script  type='text/javascript' src='http://i.huya.com/base/js/push/json3.min.js'></script>

<![endif]-->

<!--[if lte IE 9]>

<script type='text/javascript' src='http://i.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>

<![endif]-->

<script data-fixed="true">

    var PUSH_PROXY_URL="http://channelproxy.huya.com/";

    var PUSH_ENABLE=true;//推送开关

</script>

<script type='text/javascript' src='js/push-min.js?t=20160907'></script>

<script type='text/javascript' src='js/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->

</body>

</html>

